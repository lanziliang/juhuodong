<?php
// 本类由系统自动生成，仅供测试用途
class HuodongAction extends CommonAction {
    public function index(){
		
		$message=D('Huodong');
			//$sss=$message->relation(true)->select();
			
			
		//dump($sss);
		import('ORG.Util.Page');// 导入分页类
		$count=$message->count();
		$Page= new Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('header','个活动');
		$show= $Page->show();// 分页显示输出
	
		$arr=$message->relation(true)->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$arr);
		$this->assign('show',$show);
		$this->assign('uid',$_SESSION['id']);
		$this->display();
    }
	public function love(){
	
		$id=$_REQUEST['id'];
		$uid=$_REQUEST['uid'];
		$hduid=$_REQUEST['hduid'];
		//dump($id);exit;
		
		$love=M('Love');
		$data['uid']=$uid;
		$data['hdid']=$id;
		$num=$love->where($data)->count();
		if(!$num)
		{
			$data2['hdid'] =$id;
			$data2['uid'] = $uid;
			$data2['hduid'] = $hduid;
			$love->add($data2);
			$data3['hdid'] =$id;
			$data4['id'] =$id;
            $num2=$love->where($data3)->count();
			$data5['love'] =$num2;
			$hd=D('Huodong');
			$hd->where($data4)->save($data5);
		   //echo "可以点赞";
		  $this->ajaxReturn($num2,"感谢您对本活动表示支持！", 1);
		}else{
			 //echo "不可以点赞";
			$this->ajaxReturn($num,"您已经对此活动感兴趣，不用重复点击", 0);
		}
	}
}
?>