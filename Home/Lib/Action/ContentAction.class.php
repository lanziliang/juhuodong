<?php
// 本类由系统自动生成，仅供测试用途
class ContentAction extends CommonAction {
    public function index(){
		$fromid=$_SESSION['id'];
		$toid=$_GET['toid'];
		$toname=$_GET['toname'];
		$name=$_SESSION['username'];
		$this->assign('name',$name);
		$this->assign('toid',$toid);
		$this->assign('toname',$toname);
		$this->assign('fromid',$fromid);
		$this->display();
    }
	 public function doContent(){
		$con=D('Message');
		$con->create();
			$lasrid=$con->add();
				if($lasrid)
				{
					$this->success('留言成功！');
				}
				else{
					$this->error('留言失败！');
				}
		
    }
}
?>