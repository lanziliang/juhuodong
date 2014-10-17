<?php
// 本类由系统自动生成，仅供测试用途
class AdAction extends Action {
    public function ad1(){
		
		$ad=$_GET['ads'];
		$a=M('Ad');
		$where['adname']='ad1';
		$arr=$a->where($where)->select();
		//dump($arr);
		
		$this->assign('ad',$arr[0]);
		$this->display();
    }
	public function ad2(){
		
		$ad=$_GET['ads'];
		$a=M('Ad');
		$where['adname']='ad2';
		$arr=$a->where($where)->select();
		//dump($arr);
		
		$this->assign('ad',$arr[0]);
		$this->display();
    }
	public function ad3(){
		
		$ad=$_GET['ads'];
		$a=M('Ad');
		$where['adname']='ad3';
		$arr=$a->where($where)->select();
		//dump($arr);
		
		$this->assign('ad',$arr[0]);
		$this->display();
    }
	public function ad4(){
		
		$ad=$_GET['ads'];
		$a=M('Ad');
		$where['adname']='ad4';
		$arr=$a->where($where)->select();
		//dump($arr);
		
		$this->assign('ad',$arr[0]);
		$this->display();
    }
	public function ad5(){
		
		$ad=$_GET['ads'];
		$a=M('Ad');
		$where['adname']='ad5';
		$arr=$a->where($where)->select();
		//dump($arr);
		
		$this->assign('ad',$arr[0]);
		$this->display();
    }
	
}
?>