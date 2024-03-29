<?php

class RoleModel extends Model{
    function distributeAuth($auth,$role_id){
        $ids=implode(',',$auth);//1,2,3,4,...
        
        //根据ids查询全部的模块和操作方法
        $sql="select auth_c,auth_a from tp_auth where auth_id in ($ids)";
        $info = $this->query($sql);
        
        $ac="";
        foreach($info as $k=>$v){
            if(!empty($v['auth_c']) && !empty($v['auth_a'])){
                $ac.=$v['auth_c']."-".$v['auth_a'].",";
            }
        }
        $ac = rtrim($ac,',');
        
        $sql = "update tp_role set role_auth_ids='$ids',role_auth_ac='$ac' where role_id=".$role_id;
        return $this->execute($sql);
    }
    
    function addRole($auth,$name){
        $ids=implode(',',$auth);//1,2,3,4,...
        
        //根据ids查询全部的模块和操作方法
        $sql="select auth_c,auth_a from tp_auth where auth_id in ($ids)";
        $info = $this->query($sql);
        
        $ac="";
        foreach($info as $k=>$v){
            if(!empty($v['auth_c']) && !empty($v['auth_a'])){
                $ac.=$v['auth_c']."-".$v['auth_a'].",";
            }
        }
        $ac = rtrim($ac,',');
        
        $sql = "insert into tp_role (role_name,role_auth_ids,role_auth_ac) values ('".$name."','".$ids."','".$ac."')";
        return $this->execute($sql);
    }
}

