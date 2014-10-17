<?php
//权限model模型
class AuthModel extends Model{
    function saveAuth($info){
//        $auth_c=$info['auth_c'];
//        $auth_a=$info['auth_a'];
//        $auth_name=$info['auth_name'];
        $auth_pid=$info['auth_pid'];
        
        $auth_id = $this->add($info);//返回新增记录的id值
        
        //处理auth_path全路径
        //1如果当前权限是顶级的，auth_path=auth_id本身记录id值
        if($auth_pid==0){
            $auth_path=$auth_id;
        }else{//2如果当前权限不是顶级的，auth_path=父级的auth_path-本身id
            //获得父级的全路径
            $p_info = $this->getByAuth_id($auth_pid);
            $p_auth_path = $p_info['auth_path'];
            
            $auth_path = $p_auth_path."-".$auth_id;
        }
        
        //处理autu_level
        $autu_level = count(explode("-", $auth_path))-1;
        
        //更新数据
        $d = array(
            'auth_id' => $auth_id,
            'auth_path' => $auth_path,
            'auth_level' => $autu_level
        );
        return $this->save($d);
    }
}

