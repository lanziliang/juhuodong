<?php
	class LoginAction extends Action{
		public function login(){
			$this->display();
		}
		public function doLogin(){
		 	$email=$_POST['email'];
			$password=md5($_POST['password']);
			$user=M('User');
			$where['email']=$email;
			$where['password']=$password;
			$arr=$user->where($where)->select();
			
		
			if($arr){
				$_SESSION['username']=$arr[0]['username'];
				$_SESSION['id']=$arr[0]['id'];
				$this->success('用户登录成功',U('Index/index'));
			}
			else{
				$this->error('该用户名或密码不正确！');
			}
		}
		public function doLogout(){
			$_SESSION=array();
			if(isset($_COOKIE[session_name()])){
				setcookie(session_name(),'',time()-1,'/');
			}
			session_destroy();
			//$this->success('您已经成功退出！',U('Login:login'));
			$this->redirect('Index/index');
		}
		
		}
?>
