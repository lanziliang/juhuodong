<?php

//后台管理员控制器
class UserAction extends Action{
    
    //登录
    public function login(){
        if(!empty($_POST)){
            if(md5($_POST['captcha'])==$_SESSION['verify']){
                //用户名和密码校验
                $user_model=D('User');
                $user_info=$user_model->checkNamePwd($_POST['username'],$_POST['password']);
                if($user_info!=false){
                    //持久化用户信息（id和名字）
                    session("username",$user_info['username']);
                    session("id",$user_info['id']);
                    
                    $this->redirect("Index/index");
                }else{
                    echo "用户名或密码错误！";
                }
            }else{
                echo "验证码不正确";
            }
        }
        $this->display();
    }
    
    //退出系统
    function logout(){
        //删除session信息
        session(null);
        $this->redirect("User/login");
    }
    
    
    
    //生成验证码
    function verifyImg(){
        //手动加载对应的类文件
        import("ORG.Util.Image");
        echo Image::buildImageVerify();
    }
    
    
    //显示所有管理员
    public function showlist(){
        $info = D("User")->where("role_id>=0")->select();
        
        //获得角色信息
        $role = D("Role")->select();
        
        //把角色变为一维数组信息 array(id值=>名称...)
        $role_info = array();
        foreach ($role as $k=>$v){
            $role_info[$v['role_id']]=$v['role_name'];
        }
        
        $this->assign('role_info',$role_info);
        $this->assign('info',$info);
        $this->display();
    }
    
    
     //添加管理员
    function add(){
        //判断是否提交表单数据
        if(!empty($_POST)){
            $manager_model = D("User");
            $name=$_POST['username'];
            $user=$manager_model->getByUsername("$name");
            if(!empty($user)){
                $d=array('role_id'=>$_POST['role_id']);

                $rst=$manager_model->where("username='$name'")->data($d)->save();//修改用户的role_id值

                if($rst){
                    $this->success("添加管理员成功",U("User/showlist"));
                }
            }else{
                $this->error("您输入的用户不存在，请重新输入！",U("User/add"));
            }
        }else{
            //获得角色信息
            $role = D("Role")->select();
            
            //把角色变为一维数组信息 array(id值=>名称...)
            $role_info = array();
            foreach ($role as $k=>$v){
                $role_info[$v['role_id']]=$v['role_name'];
            }
            
            $this->assign('role_info',$role_info);
            $this->display();
        }
    }
    
    //用户列表
    public function userlist(){
        $model = D('User');
        
        
        //1 引入分页类
        import("@.Components.Page");
        
        //2 计算当前记录总数目
        $total=$model->where("is_black=1")->count();
        $per=13;
        
        //3 实例化分页类对象
        $page=new Page($total,$per);
        
        //4 制作一条sql语句获得每页信息
        $sql="select * from tp_user where is_black=0 ".$page->limit;
        $info=$model->query($sql);
        
        //5 获得页面列表
        $page_list=$page->fpage();
        
        
        //获得对应用户的发起活动数  array(用户id值=>活动数目)
        $hdnumber = array();
        foreach ($info as $k=>$v){
            $hdnumber[$v['id']] = D('Huodong')->where("uid='$v[id]'")->count();
        }
        
        $this->assign('hdnumber',$hdnumber);
        $this->assign('info',$info);
        $this->assign('page_list',$page_list);
        $this->display();
    }

    //把用户拉入黑名单
    public function black($id){
        $model=D("User");
        $model->id=$id;
        $model->is_black=1;
        $rst=$model->save();
        if($rst){
            $this->success("已加入黑名单！",U("User/userlist"));
        }
    }
    
    //用户移除黑名单
    public function resume($id){
        $model=D("User");
        $model->id=$id;
        $model->is_black=0;
        $rst=$model->save();
        if($rst){
            $this->success("已移出黑名单！",U("User/blacklist"));
        }
    }

    //用户黑名单
    public function blacklist(){
        $model = D("User");
        
        
        //1 引入分页类
        import("@.Components.Page");
        
        //2 计算当前记录总数目
        $total=$model->where("is_black=1")->count();
        $per=13;
        
        //3 实例化分页类对象
        $page=new Page($total,$per);
        
        //4 制作一条sql语句获得每页信息
        $sql="select * from tp_user where is_black=1 ".$page->limit;
        $info=$model->query($sql);
        
        //5 获得页面列表
        $page_list=$page->fpage();
        
        //获得对应用户的发起活动数  array(用户id值=>活动数目)
        $hdnumber = array();
        foreach ($info as $k=>$v){
            $hdnumber[$v['id']] = D('Huodong')->where("uid='$v[id]'")->count();
        }
        
        $this->assign('hdnumber',$hdnumber);
        $this->assign('info',$info);
        $this->assign('page_list',$page_list);
        $this->display();
    }
}

