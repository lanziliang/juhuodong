<?php

class UserModel extends Model{
    
    //验证用户名和密码
    function checkNamePwd($name,$pwd){
        $name_info=  $this->getByUsername($name);
        
        //用户存在
        if($name_info!=null){
            if($name_info['role_id']==null){
                echo "<script>alert('您不是管理员，没有权限登录！')</script>";
                exit;
            }
            if($name_info['password']!=md5($pwd)){//密码不正确
                return false;
            }else{
                return $name_info;
            }
        }else{//用户不存在
            return false;
        }
    }
}
