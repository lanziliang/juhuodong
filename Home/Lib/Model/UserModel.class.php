<?php
	class UserModel extends Model{
		protected $_validate = array(
		 array('email','','一个Email账号只能注册一次，请换一个Email！',0,'unique',1), // 在新增的时候验证name字段是否唯一
    array('code','require','验证码必须！'), //默认情况下用正则进行验证
    array('code','checkCode','验证码错误！',0,'callback',1), 
    array('username','require','用户名必须！'), //默认情况下用正则进行验证
   array('username','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
    array('username','/^\S{4,}$/','帐号名称长度要大于四个字母！',0,'regex',1), // 在新增的时候验证name字段是否唯一
    array('repassword','password','两次输入密码不一致！',0,'confirm'), 
    
	);
	protected $_auto=array(
			array('password','getpassword',1,'callback'),
			array('time','time',1,'function'),
		);
	protected function checkCode($code){
		if(md5($code)!=$_SESSION['code']){
			return false;
		}else{
			return true;
		}
	}
	protected function getpassword($password){
		
		return md5($password);
	}

	}
?>