<?php
	class RegisterAction extends Action{
		public function register(){
			$this->display();
		}
		public function checkName(){
			$username=$_GET['username'];
			$user=M('User');
			$where['username']=$username;
			$count=$user->where($where)->count();
			if($count)
			{
				echo '不允许';
			}
			else{
				echo '允许';
			}
			
		}
			public function checkEmail(){
			$e=$_GET['email'];
			$user=M('User');
			$where['email']=$e;
			$count=$user->where($where)->count();
			if($count)
			{
				echo '不允许';
			}
			else{
				echo '允许';
			}
			
		}
		public function doReg(){
			//$username=$_POST['username'];
			//$password=$_POST['password'];
			//$repassword=$_POST['repassword'];
			//$sex=$_POST['sex'];
			$m=D('User');
			//dump($m->select());
		
			if(!($m->create()))
			{
				$this->error($m->getError());
			}
			//$data['username']=$username;
			//$data['password']=$password;
			//$data['sex']=$sex;
			//$id=$m->add($data);
			$id=$m->add();
			if($id){
				$email=$_POST['email'];
			$password=md5($_POST['password']);
			$user=M('User');
			$userdetail=M('Userdetail');
			$where['email']=$email;
			$where['password']=$password;
			$arr=$user->where($where)->select();
				$_SESSION['username']=$arr[0]['username'];
				$_SESSION['id']=$arr[0]['id'];
				$wh['id']=$arr[0]['id'];
				$wh['image']='536f3baa7fea5.jpg';
				$userdetail->add($wh);
				$this->redirect('Index/index');
			}else{
				$this->error('用户注册失败！');
			}
			
			
		}
		
	}
?>