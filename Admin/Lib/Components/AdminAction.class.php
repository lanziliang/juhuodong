<?php

class AdminAction extends Action{
    //控制用户访问的模块和操作方法
    function __construct() {
        parent::__construct();
        $ac = MODULE_NAME."-".ACTION_NAME;
        $sql = "select role_auth_ac from tp_user a join tp_role b on a.role_id=b.role_id where id=".$_SESSION['id'];
        $info = M()->query($sql);
        $auth_ac = $info[0]['role_auth_ac'];
        if(strpos($auth_ac,$ac)===false && $_SESSION['id']!=1){
            $this->error('没有权限访问',U("Index/right"));
        }
    }
}

