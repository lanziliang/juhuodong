<?php
//权限管理控制器
import("@.Components.AdminAction");
class AuthAction extends AdminAction{
    function showlist(){
        //获取全部权限信息
        $info=D("Auth")->order("auth_path")->select();
        
        $this->assign('info',$info);
        $this->display();
    }
    
    function add(){
        //判断表单是否提交数据
        if(!empty($_POST)){
            //show_bug($_POST);
            //在model模型里制作一个方法处理权限添加
            $rst = D("Auth")->saveAuth($_POST);
            if($rst){
                $this->success("添加成功",U("Auth/showlist"));
            }
        }else{
            //获取全部权限信息
            $info=D("Auth")->where('auth_level<2')->order("auth_path")->select();
            //权限父子级有缩进关系
            foreach ($info as $k => $v){
                $info[$k]['auth_name'] = str_repeat("-/", $v['auth_level']).$info[$k]['auth_name'];
            }

            //获取权限名称
            $authinfo=array();
            foreach ($info as $kk => $vv){
                $authinfo[$vv['auth_id']] = $vv['auth_name'];
            }

            $this->assign('authinfo',$authinfo);
            $this->display();
        }
    }
}
