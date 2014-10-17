<?php

class FabuAction extends CommonAction {
    public function index(){
	$name=$_SESSION['username'];
	$this->assign('name',$name);
	$uid=$_SESSION['id'];
	$this->assign('uid',$uid);
	$fl=M('Column');
	$where['p_id']='0';
	$flarr=$fl->where($where)->select();
	$where['p_id']='1';
	$flarr1=$fl->where($where)->select();
		$where['p_id']='12';
	$flarr12=$fl->where($where)->select();
		$where['p_id']='23';
	$flarr23=$fl->where($where)->select();
		$where['p_id']='7';
	$flarr7=$fl->where($where)->select();
	$this->assign('type',$flarr);
	$this->assign('type1',$flarr1);
	$this->assign('type12',$flarr12);
	$this->assign('type23',$flarr23);
	$this->assign('type7',$flarr7);
	$this->display();
    }
	public function doFabu(){
	  
		$message=D('Huodong');
				$message->create();
				$week='每周';
				if($_POST['week_mon']=='on'){
				$week=$week.' 一';
				$message->week1=1;
				} if($_POST['week_tue']=='on'){
				$message->week2=1;
				$week=$week.' 二';
				} if($_POST['week_wed']=='on'){
			    $message->week3=1;
				$week=$week.' 三';
				} if($_POST['week_thu']=='on'){
				$message->week4=1;
				$week=$week.' 四';
				} if($_POST['week_fri']=='on'){
				$message->week5=1;
				$week=$week.' 五';
				}if($_POST['week_sat']=='on'){
				$message->week6=1;
				$week=$week.'六';
				} if($_POST['week_sun']=='on'){
				$message->week7=1;
				$week=$week.' 日';
				}
				
				if($_POST['repeat_type']=='0')
				{
					$message->hdstart=$_POST['hdstart'];
					$message->hdend=$_POST['hdend'];
					$message->hdtime=strtotime($_POST['hdtime']);
					$message->hdtimeend=strtotime($_POST['hdtime']);
					$message->showtime=date('m月d日',strtotime($_POST['hdtime']));
					$hdtimeend=date('w',strtotime($_POST['hdtime']));
					 switch($hdtimeend)
					 {
						case 4:
						$message->week='星期四';
						break;case 3:
						$message->week='星期三';
						break;case 2:
						$message->week='星期二';
						break;case 1:
						$message->week='星期一';
						break;case 5:
						$message->week='星期五';
						break;case 6:
						$message->week='星期六';
						break;case 0:
						$message->week='星期天';
						break;
					 }
					
				}
				if($_POST['repeat_type']=='1')
				{
					$message->hdstart=$_POST['hdstart2'];
					$message->hdend=$_POST['hdend2'];
					$message->hdtime=strtotime($_POST['hdtime3']);
					$message->hdtimeend=strtotime($_POST['hdtime4']);
						$Days=round((strtotime($_POST['hdtime4'])-strtotime($_POST['hdtime3']))/3600/24);
				
					$message->showtime=date('m月d日',strtotime($_POST['hdtime3'])).'~'.date('m月d日',strtotime($_POST['hdtime4']));
				    if($Days>4)
					{
					   $message->weekend='有周末';
					
					}else {
					$hdtimeend=date('w',strtotime($_POST['hdtime3']));
					     switch($hdtimeend)
					 {
						case 4:
						if($Days>=2){
						$message->weekend='有周末';
						}else{
						$message->weekend='没周末';
						}
						break;case 3:
						if($Days>=3){
						$message->weekend='有周末';
						}else{
						$message->weekend='没周末';
						}
						break;case 2:
						if($Days==4){
						$message->weekend='有周末';
						}else{
						$message->weekend='没周末';
						}
						break;case 1:
						$message->weekend='没周末';
						break;case 5:
						
						$message->weekend='有周末';
						
						break;case 6:
						$message->weekend='有周末';
						break;case 0:
						$message->weekend='有周末';
						break;
					 }
					   
					   
					   
				
					}
				}
				if($_POST['repeat_type']=='2')
				{
					$message->hdstart=$_POST['hdstart3'];
					$message->hdend=$_POST['hdend3'];
					$message->hdtime=strtotime($_POST['hdtime5']);
					$message->hdtimeend=strtotime($_POST['hdtime6']);
					$message->week=$week;
				    $message->showtime=date('m月d日',strtotime($_POST['hdtime5'])).'~'.date('m月d日',strtotime($_POST['hdtime6']));
				}
				if($_POST['type']=='1')
					{
					$message->type2=$_POST['type3'];
					}else if($_POST['type']=='12'){
					$message->type2=$_POST['type2'];
					}else if($_POST['type']=='7'){
					$message->type2=$_POST['type4'];
					}else if($_POST['type']=='23'){
					$message->type2=$_POST['type5'];
					}
				
					if($_POST['fee']=='0'){
					   $message->money='免费';
					}else{
					
					
					if($_POST['money1']!=''){
					
					$money1=$_POST['money1'].'元';
					if($_POST['fy1']!=''){
					    $money1=$money1.'（'.$_POST['fy1'].'）';
					}
					
					}
					if($_POST['money2']!=''){
					
					$money2=$_POST['money2'].'元';
					if($_POST['fy2']!=''){
					    $money2=$money2.'（'.$_POST['fy2'].'）';
					}
					}
					if($_POST['money3']!=''){
					$money3=$_POST['money3'].'元';
					if($_POST['fy3']!=''){
					    $money3=$money3.'（'.$_POST['fy3'].'）';
					}
					}
					if($_POST['money4']!=''){
					$money4=$_POST['money4'].'元';
					if($_POST['fy4']!=''){
					    $money4=$money4.'（'.$_POST['fy4'].'）';
					}
					}
					if($_POST['money5']!=''){
					$money5=$_POST['money5'].'元';
					if($_POST['fy5']!=''){
					    $money5=$money5.'（'.$_POST['fy5'].'）';
					}
					}
					if($_POST['money6']!=''){
					$money6=$_POST['money6'].'元';
					if($_POST['fy6']!=''){
					    $money2=$money2.'（'.$_POST['fy6'].'）';
					}
					}
					if($_POST['money7']!=''){
					$money7=$_POST['money7'].'元';
					if($_POST['fy7']!=''){
					    $money7=$money7.'（'.$_POST['fy7'].'）';
					}
					}
					if($_POST['money8']!=''){
					$money8=$_POST['money8'].'元';
					if($_POST['fy8']!=''){
					    $money8=$money8.'（'.$_POST['fy8'].'）';
					}
					}
					if($_POST['money9']!=''){
					$money9=$_POST['money9'].'元';
					if($_POST['fy9']!=''){
					    $money9=$money9.'（'.$_POST['fy9'].'）';
					}
					}
				
					$money=$money1.' '.$money2.' '.$money3.' '.$money4.' '.$money5.' '.$money6.' '.$money7.' '.$money8.' '.$money9;
					
					$message->money=$money;
					}
				import('ORG.Net.UploadFile');
				$upload = new UploadFile();// 实例化上传类

				$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
				if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
				}else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
				}
				$message->image=$info[0]['savename'];
				//$message->time=time();
				//$message->uid=$_SESSION['id'];
				$lasrid=$message->add();
				if($lasrid)
				{
					$this->success('活动发布成功');
				}
				else{
					$this->error('活动发布失败');
				}
				
			
	}
}