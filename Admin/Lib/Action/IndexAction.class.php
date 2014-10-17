<?php


// 后台首页控制器
class IndexAction extends Action {
    public function index(){
	$this->display();
    }
    
    public function head(){
        $this->display();
    }
    
    public function left(){
        //$_SESSION['id']
        $model=M();
        
        //查询用户所属角色的所有权限id
        $sql = "select b.role_auth_ids from tp_user a join tp_role b on a.role_id=b.role_id where a.id=".$_SESSION['id'];
        $info = $model->query($sql);
        //show_bug($info);
        $auth_ids = $info[0]['role_auth_ids'];
        //show_bug($auth_ids);
        
        
        //查询父权限
        $sql = "select * from tp_auth where auth_level=0";
        if($_SESSION['id']!=1){//不是超级管理员
            $sql.=" and auth_id in ($auth_ids)";
        }
        $p_auth_info = $model->query($sql);
        
        //查询子权限
        $sql = "select * from tp_auth where auth_level=1";
        if($_SESSION['id']!=1){//不是超级管理员
            $sql.=" and auth_id in ($auth_ids)";
        }
        $s_auth_info = $model->query($sql);
        
        $this->assign('p_auth',$p_auth_info);
        $this->assign('s_auth',$s_auth_info);
        $this->display();
    }
    
    public function right(){
        $this->display();
    }
}