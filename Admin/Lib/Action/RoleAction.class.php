<?php
import("@.Components.AdminAction");
//角色管理控制器
class RoleAction extends AdminAction{
    
    public function showlist(){
        
        $roleinfo=D('Role')->select();
        //show_bug($roleinfo);
        
        $this->assign('info',$roleinfo);
        $this->display();
    }
    
    //分配权限方法
    function distribute($role_id){
        if(!empty($_POST)){
            //给角色分配具体权限
            
            $rst=D("Role")->distributeAuth($_POST['auth_name'],$role_id);
            if($rst){
                $this->success("分配权限成功",U("Role/showlist"));
            }
        }else{
            //获取全部权限信息
            $p_auth=D("Auth")->where("auth_level=0")->select();
            $s_auth=D("Auth")->where("auth_level=1")->select();
            $t_auth=D("Auth")->where("auth_level=2")->select();

            //根据$role_id查询对应角色名称
            $role_info=D("Role")->getByRole_id($role_id);
            $role_name=$role_info['role_name'];
            $role_auth_ids=$role_info['role_auth_ids'];

            $this->assign('role_name',$role_name);
            $this->assign('role_auth_ids',  explode(',',$role_auth_ids));//将角色当前拥有的所有权限id，根据逗号拆分为数组
            $this->assign('p_auth',$p_auth);
            $this->assign('s_auth',$s_auth);
            $this->assign('t_auth',$t_auth);
            $this->display();
        }
    }
    
    
    //添加角色
    public function add(){
        if(!empty($_POST)){
            //添加角色并分配具体权限
            
            $rst=D("Role")->addRole($_POST['auth_name'],$_POST['role_name']);
            if($rst){
                $this->success("添加角色成功",U("Role/showlist"));
            }
        }else{
            //获取全部权限信息
            $p_auth=D("Auth")->where("auth_level=0")->select();
            $s_auth=D("Auth")->where("auth_level=1")->select();
            $t_auth=D("Auth")->where("auth_level=2")->select();

            $this->assign('role_name',$role_name);
            $this->assign('role_auth_ids',  explode(',',$role_auth_ids));//将角色当前拥有的所有权限id，根据逗号拆分为数组
            $this->assign('p_auth',$p_auth);
            $this->assign('s_auth',$s_auth);
            $this->assign('t_auth',$t_auth);
            $this->display();
        }
    }
}

