<?php

class IndexAction extends Action {


    public function index(){
	$name=$_SESSION['username'];
	$this->assign('name',$name);
	$this->assign('un',$name);
	$uid=$_SESSION['id'];
	$this->assign('uid',$uid);
	$m=M('Huodong');
	$arr=$m->order('love desc')->limit(16)->select();
	$data['type']='1';
	$arr2=$m->where($data)->order('love desc')->limit(4)->select();
	$data1['type']='12';
	$arr3=$m->where($data1)->order('love desc')->limit(4)->select();
	$data2['type']='7';
	$arr4=$m->where($data2)->order('love desc')->limit(4)->select();
	$data3['type']='23';
	$arr5=$m->where($data3)->order('love desc')->limit(4)->select();
	$data4['type']='8';
	$arr6=$m->where($data4)->order('love desc')->limit(4)->select();
	$data5['type']='31';
	$arr7=$m->where($data5)->order('love desc')->limit(4)->select();
	$data6['type']='32';
	$arr8=$m->where($data6)->order('love desc')->limit(4)->select();
	$this->assign('hdyy',$arr2);
	if($_GET['music']){
	$this->assign('hdyy',$arr3);
	}
	$this->assign('hd',$arr);
	
	$this->assign('hdxj',$arr3);
	$this->assign('hdjh',$arr4);
	$this->assign('hddy',$arr5);
	$this->assign('hdjz',$arr6);
	$this->assign('hdzl',$arr7);
	$this->assign('hdqt',$arr8);
	
	//dump($arr2);
	$this->display();
    }
    

	public function detail(){
	function Generate_Brief($text){ 
    $BRIEF_LENGTH=1500; 
    
    if(strlen($text) <= $BRIEF_LENGTH ) return $text;     
    $Foremost = substr($text, 0, $BRIEF_LENGTH); 
    $re = "<(\/?) 
(P|DIV|H1|H2|H3|H4|H5|H6|ADDRESS|PRE|TABLE|TR|TD|TH|INPUT|SELECT|TEXTAREA|OBJECT|A|UL|OL|LI| 
BASE|META|LINK|HR|BR|PARAM|IMG|AREA|INPUT|SPAN)[^>]*(>?)"; 
    $Single = "/BASE|META|LINK|HR|BR|PARAM|IMG|AREA|INPUT|BR/i";     

    $Stack = array(); $posStack = array(); 

    mb_ereg_search_init($Foremost, $re, 'i'); 

    while($pos = mb_ereg_search_pos()){ 
        $match = mb_ereg_search_getregs(); 
        /*    [Child-matching Formulation]: 

            $matche[1] : A "/" charactor indicating whether current "<...>" Friction is  
Closing Part 
            $matche[2] : Element Name. 
            $matche[3] : Right > of a "<...>" Friction     
        */ 
        if($match[1]==""){ 
            $Elem = $match[2]; 
            if(mb_eregi($Single, $Elem) && $match[3] !=""){ 
                continue; 
            } 
            array_push($Stack, mb_strtoupper($Elem)); 
            array_push($posStack, $pos[0]);             
        }else{ 
            $StackTop = $Stack[count($Stack)-1]; 
            $End = mb_strtoupper($match[2]); 
            if(strcasecmp($StackTop,$End)==0){ 
                array_pop($Stack); 
                array_pop($posStack); 
                if($match[3] ==""){ 
                    $Foremost = $Foremost.">"; 
                } 
            } 
        } 
    } 

    $cutpos = array_shift($posStack) - 1;  
    $Foremost=$Foremost."......";
    $Foremost =  mb_substr($Foremost,0,$cutpos,"UTF-8"); 
    return $Foremost; 
}
	$id=$_GET['event'];
	//$_SESSION['hdid']=$id;
	$name=$_SESSION['username'];
	$this->assign('name',$name);
	$this->assign('un',$name);
	if(isset($_SESSION['id'])){
	$uid=$_SESSION['id'];
	$this->assign('uid',$uid);
	}else{$uid=0;$this->assign('uid',$uid);}
	
	$m=D('Huodong');
	$where['id']=$id;
	$r=$m->relation(true)->where($where)->select();
	//dump($r);
	$data='ssss';
	 if($r[0]['mindetail']=="")
	 {
        $data=Generate_Brief($r[0]['detail']);
		$w['mindetail']= $data;
		$w1['id']=$id;
			$m->where($w1)->save($w);
		}
		//dump($data);
      $r2=$m->relation(true)->where($where)->select();
	$l=D('love');
	$w3['hdid']=$id;
	$love=$l->relation(true)->where($w3)->select();
	//dump($love);
	if($r2[0][type]=='1')  //详细页面中的点击分类跳转
	{
	   $this->assign('fl',1);
	}else if($r2[0][type]=='12')
	{
	   $this->assign('fl',12);
	}else if($r2[0][type]=='23')
	{
	   $this->assign('fl',23);
	}else if($r2[0][type]=='7')
	{
	   $this->assign('fl',7);
	}else if($r2[0][type]=='8')
	{
	   $this->assign('fl',8);
	}else if($r2[0][type]=='31')
	{
	   $this->assign('fl',31);
	}else if($r2[0][type]=='16')
	{
	   $this->assign('fl',16);
	}else if($r2[0][type]=='17')
	{
	   $this->assign('fl',17);
	}else if($r2[0][type]=='32')
	{
	   $this->assign('fl',32);
	}else if($r2[0][type]=='15')
	{
	   $this->assign('fl',15);
	}
	
	$tm=time();
	$tm2=date('Y-m-d',$tm);
	$tm=strtotime($tm2);
	if($tm>$r2[0][hdtimeend]){
	
	$this->assign('hdover','（已经过期）');
	}
	$this->assign('hd',$r2[0]);
	$this->assign('lover',$love);
		$this->display();
	
	
	}
	
	
	public function gxq(){
	$name=$_SESSION['username'];
	$this->assign('name',$name);
	$hid=$_GET['event'];
	
	$m=D('Huodong');
	$where['id']=$hid;
	
	$r=$m->relation(true)->where($where)->select();
		$l=D('love');
	$w3['hdid']=$hid;
	$love=$l->relation(true)->where($w3)->select();
	//dump($r);
	$this->assign('hd',$r[0]);
	$this->assign('lover',$love);
	   $this->display();
	}
	
	//我的聚活动
	
	public function myhd(){
	
	
	$name=$_SESSION['username'];
	$this->assign('name',$name);
	
	$uid=$_SESSION['id'];
	$this->assign('uid',$uid);
	
	$id=$_GET['people'];
	if(!isset($_GET['people'])||$id==0){
		$this->redirect('Login/login');
	}
	$this->assign('id',$id);
	$name=M('User');
	$un=$name->find($id);
	$this->assign('un',$un['username']);
	$ud=M('Userdetail');
	$where['id']=$id;
	$arr=$ud->where($where)->find();
	//dump($arr);
	$this->assign('userdetail',$arr);
		$tm=time();
		$tmr=date('Y-m-d',$tm);
		$tm=strtotime($tmr);
	$l=D('Love');
	$where1['uid']=$id;
	$where1['hdtime']=$id;
	

	$at=$l->relation(true)->where($where1)->count();
	$ar=$l->relation(true)->where($where1)->select();
		//dump($at);
    while($at){
	  if(($ar[$at-1]['huodong']['hdtimeend'])<$tm)
	  {
	    $sum++;
		//dump($sum);
	  }else{
	  if($sum1<6){
	  $ar1[$sum1]['huodong']=$ar[$at-1]['huodong'];
	  }
	  $sum1++;
		
	  }
	  $at=$at-1;
	}
	//dump($ar1);
	$this->assign('xqover',$sum);$this->assign('xqok',$sum1);
	
	//dump($ar);
	$this->assign('canjia',$ar1);
	$hd=D('Huodong');

	$map['hdtimeend']  = array('egt',$tm);
	$map['uid']  = $id;
	$map2['hdtimeend']  = array('lt',$tm);
	$map2['uid']  = $id;
	$t=$hd->where($map)->count();
	$t1=$hd->where($map2)->count();
	//dump($t);
	//dump($t1);
	$this->assign('fqover',$t1);$this->assign('fqok',$t);
	$a=$hd->where($map)->limit(6)->select();
	$this->assign('faqi',$a);
	$this->display();
	}
	
	
	
	//感兴趣

	public function wish(){
	
	
	$name=$_SESSION['username'];
	$this->assign('name',$name);
	$uid=$_SESSION['id'];
	$this->assign('uid',$uid);
	$id=$_GET['people'];
	$this->assign('id',$id);
	$name=M('User');
	$un=$name->find($id);
	$this->assign('un',$un['username']);
	$ud=M('Userdetail');
	$where['id']=$id;
	$arr=$ud->where($where)->find();
	//dump($arr);
	$this->assign('userdetail',$arr);
	$tm=time();
	$tmtrr=date('Y-m-d',$tm);
	 $tm=strtotime($tmtrr);
	$l=D('Love');
	$where1['uid']=$id;
	
	$sum=0;
	$sum1=0;
	$at=$l->relation(true)->where($where1)->count();
		$ar=$l->relation(true)->where($where1)->select();
		

	//dump($q);

		//dump($at);
    while($at){
	  if(($ar[$at-1]['huodong']['hdtimeend'])<$tm)
	  {
	  $ar2[$sum]['huodong']=$ar[$at-1]['huodong'];
	    $sum++;
		//dump($sum);
	  }else{
	  
	  $ar1[$sum1]['huodong']=$ar[$at-1]['huodong'];
	  
	  $sum1++;
		
	  }
	  $at=$at-1;
	}
	//dump($ar1);
	$this->assign('xqover',$sum);$this->assign('xqok',$sum1);
	
	
	 import('ORG.Util.Page');// 导入分页类

$pages=2;
$count = count($ar1);
$p = new Page($count,$pages);
$p->setConfig('header','个活动');
$lists = array_slice($ar1, $p->firstRow,$p->listRows);
$page = $p->show();
$this->assign('page',$page);


	//dump($ar);
	$this->assign('canjia',$lists);

	$this->display();
	}
	
	
	//兴趣过期
		public function wishover(){
	
	
	
	$name=$_SESSION['username'];
	$this->assign('name',$name);
	$uid=$_SESSION['id'];
	$this->assign('uid',$uid);
	$id=$_GET['people'];
	$this->assign('id',$id);
	$name=M('User');
	$un=$name->find($id);
	$this->assign('un',$un['username']);
	$ud=M('Userdetail');
	$where['id']=$id;
	$arr=$ud->where($where)->find();
	//dump($arr);
	$this->assign('userdetail',$arr);
	$tm=time();
	$tmtrr=date('Y-m-d',$tm);
	 $tm=strtotime($tmtrr);
	$l=D('Love');
	$where1['uid']=$id;
	
	$sum=0;
	$sum1=0;
	$at=$l->relation(true)->where($where1)->count();
		$ar=$l->relation(true)->where($where1)->select();
		
 import('ORG.Util.Page');// 导入分页类
	//dump($q);

		//dump($at);
    while($at){
	  if(($ar[$at-1]['huodong']['hdtimeend'])<$tm)
	  {
	  $ar2[$sum]['huodong']=$ar[$at-1]['huodong'];
	    $sum++;
		//dump($sum);
	  }else{
	  
	  $ar1[$sum1]['huodong']=$ar[$at-1]['huodong'];
	  
	  $sum1++;
		
	  }
	  $at=$at-1;
	}
	//dump($ar1);
	$this->assign('xqover',$sum);$this->assign('xqok',$sum1);
	
	//dump($ar);
	$pages=2;
$count = count($ar2);
$p = new Page($count,$pages);
$p->setConfig('header','个活动');

$lists = array_slice($ar2, $p->firstRow,$p->listRows);
$page = $p->show();
$this->assign('page',$page);


	//dump($ar);
	$this->assign('guoqi',$lists);
	$this->display();
	}
	
	//发起	
	public function faqi(){
			
	
	
	$name=$_SESSION['username'];
	$this->assign('name',$name);
	$uid=$_SESSION['id'];
	$this->assign('uid',$uid);
	$id=$_GET['people'];
	$this->assign('id',$id);
	$name=M('User');
	$un=$name->find($id);
	$this->assign('un',$un['username']);
	$ud=M('Userdetail');
	$where['id']=$id;
	$arr=$ud->where($where)->find();
	//dump($arr);
	$this->assign('userdetail',$arr);
	$tm=time();
	$tmtrr=date('Y-m-d',$tm);
	 $tm=strtotime($tmtrr);
	$l=D('Huodong');
	$where2['uid']=$id;
	$where1['uid']=$id;
	$where1['hdtimeend'] = array('lt',$tm);
	$where2['hdtimeend'] = array('egt',$tm);
	
      $sum1=$l->relation(true)->where($where2)->count();
        import('ORG.Util.Page');// 导入分页类
		$pages=2;
		$Page1= new Page($sum1,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page1->setConfig('header','个活动');
		$show1= $Page1->show();// 分页显示输出
	  $sum=$l->relation(true)->where($where1)->count();
	
		$ar=$l->relation(true)->where($where2)->limit($Page1->firstRow.','.$Page1->listRows)->select();
		$this->assign('page',$show1);
		$ar1=$l->relation(true)->where($where1)->limit($Page2->firstRow.','.$Page2->listRows)->select();
	
		

	//dump($q);

		//dump($at);
    
	$this->assign('xqover',$sum);$this->assign('xqok',$sum1);
	
	//dump($ar);
	$this->assign('canjia',$ar);
	$this->assign('guoqi',$ar1);
	$this->display();
	}
	
	
	//发起过期
	public function faqiover(){
			
	
	
	$name=$_SESSION['username'];
	$this->assign('name',$name);
	$uid=$_SESSION['id'];
	$this->assign('uid',$uid);
	$id=$_GET['people'];
	$this->assign('id',$id);
	$name=M('User');
	$un=$name->find($id);
	$this->assign('un',$un['username']);
	$ud=M('Userdetail');
	$where['id']=$id;
	$arr=$ud->where($where)->find();
	//dump($arr);
	$this->assign('userdetail',$arr);
	$tm=time();
	$tmtrr=date('Y-m-d',$tm);
	 $tm=strtotime($tmtrr);
	$l=D('Huodong');
	$where2['uid']=$id;
	$where1['uid']=$id;
	$where1['hdtimeend'] = array('lt',$tm);
	$where2['hdtimeend'] = array('egt',$tm);
	
      $sum1=$l->relation(true)->where($where2)->count();
	   $sum=$l->relation(true)->where($where1)->count();
        import('ORG.Util.Page');// 导入分页类
		$pages=2;
		$Page1= new Page($sum,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page1->setConfig('header','个活动');
		$show1= $Page1->show();// 分页显示输出
	 
	
		$ar=$l->relation(true)->where($where2)->select();
	
		$ar1=$l->relation(true)->where($where1)->limit($Page1->firstRow.','.$Page1->listRows)->select();
		$this->assign('page',$show1);
		

	//dump($q);

		//dump($at);
    
	$this->assign('xqover',$sum);$this->assign('xqok',$sum1);
	
	//dump($ar);
	$this->assign('canjia',$ar);
	$this->assign('guoqi',$ar1);
	$this->display();
	}
	
	//我的个人首页
	
	
	public function mydetail(){
	$name=$_SESSION['username'];
	$this->assign('name',$name);
	$n='我';
	$uid=$_SESSION['id'];
	$this->assign('uid',$uid);
	$id=$_GET['people'];
	if(!isset($_GET['people'])||$id==0){
		$this->redirect('Login/login');
	}

	
	$this->assign('id',$id);
	$name=M('User');
	$un=$name->find($id);
	if($id!=$uid){
		$n=$un['username'];
	}
	$this->assign('nn',$n);
	$this->assign('un',$un['username']);
	$this->assign('tm',$un['time']);
	$this->assign('email',$un['email']);
	$ud=M('Userdetail');
	$where['id']=$id;
	$arr=$ud->where($where)->find();
	//dump($arr);
	$this->assign('userdetail',$arr);
	$tm=time();
	$l=D('Huodong');

	$where2['uid']=$id;
	$where2['hdtimeend'] = array('egt',$tm);
	

		$ar=$l->relation(true)->where($where2)->limit(5)->select();
		

	//dump($q);

		//dump($at);
   
	$this->assign('canjia',$ar);
	$mes=D('Message');
	$mm['toid']=$id;
	$m=$mes->relation(true)->where($mm)->limit(5)->order('time desc')->select();
	$this->assign('liuyan',$m);
	//dump($m);
		$this->display();
	}
	public function qianming(){
	$qm=$_GET['signature'];
	
	$m=D('Userdetail');
	$s['qianming']=$qm;
	$where['id']=$_SESSION['id'];
	$j=$m->where($where)->save($s);
	echo "ok";
	
	
	}
	public function jieshao(){
	$qm=$_GET['signature'];
	
	$m=D('Userdetail');
	$s['jieshao']=$qm;
	$where['id']=$_SESSION['id'];
	$j=$m->where($where)->save($s);
	echo "ok";
	
	
	}
	public function liuyan(){   //留言
	$name=$_SESSION['username'];
	$this->assign('name',$name);
	$n='我';
	$uid=$_SESSION['id'];
	$this->assign('uid',$uid);
	$id=$_GET['people'];
	if(!isset($_GET['people'])||$id==0){
		$this->redirect('Login/login');
	}

	
	$this->assign('id',$id);
	$name=M('User');
	$un=$name->find($id);
	if($id!=$uid){
		$n=$un['username'];
	}
	$this->assign('nn',$n);
	$this->assign('un',$un['username']);
	$mes=D('Message');
	$mm['toid']=$id;
	$sum1=$mes->where($mm)->count();
	import('ORG.Util.Page');// 导入分页类
		$pages=2;
		$Page1= new Page($sum1,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page1->setConfig('header','条留言');
		$show1= $Page1->show();// 分页显示输出
	$m=$mes->relation(true)->where($mm)->order('time desc')->limit($Page1->firstRow.','.$Page1->listRows)->select();
	$this->assign('liuyan',$m);
	$this->assign('page',$show1);
	
	$this->display();
	
	}
	public function deleteliuyan(){
	 $where['id']=$_GET['ly'];
	
	 
	 $m=M('Message');
	 $m->where($where)->delete();
	 $this->redirect('Index/liuyan');
	
	}
	
	
	public function fenlei(){  //分类
	$fl=$_GET['fl'];
	$dt=$_GET['date'];
	$this->assign('nowfl',$fl);
	$this->assign('nowdt',$dt);
	$fr=$_GET['choosedate'];
	
	$all=M('Huodong');
	$type2=D('Column');
	$pages=8;
	$tm=time();
	 $tmtrr=date('Y-m-d',$tm);
	 $tm=strtotime($tmtrr);
	$where['hdtimeend'] = array('egt',$tm);
	if($fl=='all')
	{
		    if($dt=='future'){ //全部
				import('ORG.Util.Page');// 导入分页类
				$count=$all->where($where)->count();
				$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
				$Page->setConfig('header','个活动');
				$show= $Page->show();// 分页显示输出
				
				$allarr=$all->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
				$this->assign('page',$show);
				if($allarr==null){
				$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
				}
				$this->assign('hd',$allarr);
				$this->assign('fff',$fl);
				$this->assign('title','聚');
				$this->assign('time','近期');
				
				
			}
			else if($dt=='today'){  //今天
				$td=date('w',$tm);
				if($td=="0"){   //选择周几输出
				
				$where2['week7&week'] =array('1',array('like','%每周%'),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="1"){
				
				$where2['week1&week'] =array('1',array('like','%每周%'),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="2"){
				
				$where2['week2&week'] =array('1',array('like','%每周%'),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="3"){
				
				$where2['week3&week'] =array('1',array('like','%每周%'),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="4"){
				
				$where2['week4&week'] =array('1',array('like','%每周%'),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="5"){
				
				$where2['week5&week'] =array('1',array('like','%每周%'),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="6"){
				
				$where2['week6&week'] =array('1',array('like','%每周%'),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				 $where2['hdtime&hdtimeend&week'] = array(array('elt',$tm),array('egt',$tm),array('notlike','%每周%'),'_multi'=>true);
				import('ORG.Util.Page');// 导入分页类
				$count=$all->where($where2)->count();
				$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
				$Page->setConfig('header','个活动');
				$show= $Page->show();// 分页显示输出
				
				$allarr=$all->where($where2)->limit($Page->firstRow.','.$Page->listRows)->select();
				$this->assign('page',$show);
				if($allarr==null){
				$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
				}
				$this->assign('hd',$allarr);
				$this->assign('fff',$fl);
				$this->assign('title','聚');
				$this->assign('time','今天');
			}
			else if($dt=='tomorrow'){  //明天
			      
			     
			    $tmtr=strtotime("+1 day");
		        $tmtrr=date('Y-m-d',$tmtr);
				$tmtr=strtotime($tmtrr);
			
				$td=date('w',$tmtr);
				
				if($td=="0"){   //选择周几输出
				
				$where2['week7&week'] =array('1',array('like','%每周%'),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="1"){
				
				$where2['week1&week'] =array('1',array('like','%每周%'),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="2"){
				
				$where2['week2&week'] =array('1',array('like','%每周%'),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="3"){
				
				$where2['week3&week'] =array('1',array('like','%每周%'),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="4"){
				
				$where2['week4&week'] =array('1',array('like','%每周%'),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="5"){
				
				$where2['week5&week'] =array('1',array('like','%每周%'),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="6"){
				
				$where2['week6&week'] =array('1',array('like','%每周%'),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				 $where2['hdtime&hdtimeend&week'] = array(array('elt',$tmtr),array('egt',$tmtr),array('notlike','%每周%'),'_multi'=>true);
				import('ORG.Util.Page');// 导入分页类
				$count=$all->where($where2)->count();
				$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
				$Page->setConfig('header','个活动');
				$show= $Page->show();// 分页显示输出
				
				$allarr=$all->where($where2)->limit($Page->firstRow.','.$Page->listRows)->select();
				$this->assign('page',$show);
				if($allarr==null){
				$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
				}
				$this->assign('hd',$allarr);
				$this->assign('fff',$fl);
				$this->assign('title','聚');
				$this->assign('time','明天');
			}
			else if($dt=='weekend'){   //周末
				
				 $where2['week'] =array('like',array('%星期六%','%星期天%','%周%六%','%周%日%',),'OR');
				 $where2['weekend&hdtimeend'] =array(array('eq','有周末'),array('egt',$tm),'_multi'=>true);
				 $where2['_logic'] = 'OR';
				import('ORG.Util.Page');// 导入分页类
				$count=$all->where($where2)->count();
				$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
				$Page->setConfig('header','个活动');
				$show= $Page->show();// 分页显示输出
				
				$allarr=$all->where($where2)->limit($Page->firstRow.','.$Page->listRows)->select();
				$this->assign('page',$show);
				if($allarr==null){
				$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
				}
				$this->assign('hd',$allarr);
				$this->assign('fff',$fl);
				$this->assign('title','聚');
				$this->assign('time','周末');
			}
			else if($dt=='week'){   //未来一周
				$tm1=strtotime("+1 day");
		        $tmtrr=date('Y-m-d',$tm1);
				$tm1=strtotime($tmtrr);
				
				$tm2=strtotime("+2 day");
		        $tmtrr=date('Y-m-d',$tm2);
				$tm2=strtotime($tmtrr);
			
				$tm3=strtotime("+3 day");
		        $tmtrr=date('Y-m-d',$tm3);
				$tm3=strtotime($tmtrr);
					
				$tm4=strtotime("+4 day");
		        $tmtrr=date('Y-m-d',$tm4);
				$tm4=strtotime($tmtrr);
				
				$tm5=strtotime("+5 day");
		        $tmtrr=date('Y-m-d',$tm5);
				$tm5=strtotime($tmtrr);
				
				$tm6=strtotime("+6 day");
		        $tmtrr=date('Y-m-d',$tm6);
				$tm6=strtotime($tmtrr);
					
				 $where2['hdtime'] =array('in',array($tm,$tm1,$tm2,$tm3,$tm4,$tm5,$tm6));
				 $where2['hdtimeend'] =array('in',array($tm,$tm1,$tm2,$tm3,$tm4,$tm5,$tm6));
				 $where2['hdtime&hdtimeend'] = array(array('elt',$tm6),array('egt',$tm6),'_multi'=>true);
					$where2['_logic'] = 'OR';
				 
				import('ORG.Util.Page');// 导入分页类
				$count=$all->where($where2)->count();
				$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
				$Page->setConfig('header','个活动');
				$show= $Page->show();// 分页显示输出
				
				$allarr=$all->where($where2)->limit($Page->firstRow.','.$Page->listRows)->select();
				$this->assign('page',$show);
				if($allarr==null){
				$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
				}
				$this->assign('hd',$allarr);
				$this->assign('fff',$fl);
				$this->assign('title','聚');
				$this->assign('time','最近一周');
			}
			else if($dt=='free'){   //自由选择日期
				 
				 if($fr==NULL){
				 $fr=$_SESSION['free'];
				 if($_SESSION['free']==null){
				 $fr=$tmtrr;
				 }
				 }
					$tme=strtotime($fr);
					$_SESSION['free']= $fr;
					$this->assign('free',$fr);
					$tmtr=strtotime($fr);
			
				$td=date('w',$tmtr);
					if($td=="0"){   //选择周几输出
				
				$where2['week7&week'] =array('1',array('like','%每周%'),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="1"){
				
				$where2['week1&week'] =array('1',array('like','%每周%'),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="2"){
				
				$where2['week2&week'] =array('1',array('like','%每周%'),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="3"){
				
				$where2['week3&week'] =array('1',array('like','%每周%'),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="4"){
				
				$where2['week4&week'] =array('1',array('like','%每周%'),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="5"){
				
				$where2['week5&week'] =array('1',array('like','%每周%'),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="6"){
				
				$where2['week6&week'] =array('1',array('like','%每周%'),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				// $where['hdtime'] =array('in',array($tm,$tm1,$tm2,$tm3,$tm4,$tm5,$tm6));
				 $where2['hdtime&hdtimeend&week'] = array(array('elt',$tme),array('egt',$tme),array('notlike','%每周%'),'_multi'=>true);
					
				 
				import('ORG.Util.Page');// 导入分页类
				$count=$all->where($where2)->count();
				$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
				$Page->setConfig('header','个活动');
				$show= $Page->show();// 分页显示输出
				
				$allarr=$all->where($where2)->limit($Page->firstRow.','.$Page->listRows)->select();
				$this->assign('page',$show);
				if($allarr==null){
				$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
				}
				$this->assign('hd',$allarr);
				$this->assign('fff',$fl);
				$this->assign('title','聚');
				$tme=date('m月d日',$tmtr);
				$this->assign('time',$tme);
			}
	
		
	}
	else if($fl=='1'||$fl=='12'||$fl=='7'||$fl=='23'){
	     $where['type']=$fl;
		 
				if($dt=='future'){ //全部
				import('ORG.Util.Page');// 导入分页类
				$count=$all->where($where)->count();
				$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
				$Page->setConfig('header','个活动');
				$show= $Page->show();// 分页显示输出
				
				$music=$all->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
				if($music==null){
				$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
				}
				$this->assign('page',$show);
				$this->assign('hd',$music);
				$this->assign('fff',$fl);
				$ty['p_id']=$fl;
				$tp2=$type2->where($ty)->select();
				$twhere['c_id']=$fl;
				$cname=$type2->where($twhere)->getField('c_name');
				$this->assign('title',$cname);
				$this->assign('time','近期');
			   $this->assign('ty2',$tp2);
	   }
	   else if($dt=='today'){  //今天
			   
			    $td=date('w',$tm);
				if($td=="0"){   //选择周几输出
				
				$where2['week7&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="1"){
				
				$where2['week1&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="2"){
				
				$where2['week2&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="3"){
				
				$where2['week3&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="4"){
				
				$where2['week4&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="5"){
				
				$where2['week5&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="6"){
				
				$where2['week6&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				 $where2['hdtime&hdtimeend&week&type'] = array(array('elt',$tm),array('egt',$tm),array('notlike','%每周%'),array('eq',$fl),'_multi'=>true);
			
			
				import('ORG.Util.Page');// 导入分页类
				$count=$all->where($where2)->count();
				$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
				$Page->setConfig('header','个活动');
				$show= $Page->show();// 分页显示输出
				
				$music=$all->where($where2)->limit($Page->firstRow.','.$Page->listRows)->select();
				if($music==null){
				$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
				}
				$this->assign('page',$show);
				$this->assign('hd',$music);
				$this->assign('fff',$fl);
				$ty['p_id']=$fl;
				$tp2=$type2->where($ty)->select();
				$twhere['c_id']=$fl;
				$cname=$type2->where($twhere)->getField('c_name');
				$this->assign('title',$cname);
				$this->assign('time','今天');
			   $this->assign('ty2',$tp2);
	   
	   
	   }
	    else if($dt=='tomorrow'){  //明天
			      
			     
			    $tmtr=strtotime("+1 day");
		        $tmtrr=date('Y-m-d',$tmtr);
				$tmtr=strtotime($tmtrr);
			
				$td=date('w',$tmtr);
				if($td=="0"){   //选择周几输出
				
				$where2['week7&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="1"){
				
				$where2['week1&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="2"){
				
				$where2['week2&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="3"){
				
				$where2['week3&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="4"){
				
				$where2['week4&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="5"){
				
				$where2['week5&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="6"){
				
				$where2['week6&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				$where2['hdtime&hdtimeend&week&type'] = array(array('elt',$tmtr),array('egt',$tmtr),array('notlike','%每周%'),array('eq',$fl),'_multi'=>true);
			
			
				import('ORG.Util.Page');// 导入分页类
				$count=$all->where($where2)->count();
				$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
				$Page->setConfig('header','个活动');
				$show= $Page->show();// 分页显示输出
				
				$music=$all->where($where2)->limit($Page->firstRow.','.$Page->listRows)->select();
				if($music==null){
				$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
				}
				$this->assign('page',$show);
				$this->assign('hd',$music);
				$this->assign('fff',$fl);
				$ty['p_id']=$fl;
				$tp2=$type2->where($ty)->select();
				$twhere['c_id']=$fl;
				$cname=$type2->where($twhere)->getField('c_name');
				$this->assign('title',$cname);
				$this->assign('time','明天');
			   $this->assign('ty2',$tp2);
				
				
	}
	   else if($dt=='weekend'){   //周末
			$where2['week&type'] =array(array('like',array('%星期六%','%星期天%','%周%六%','%周%日%',),'OR'),array('eq',$fl),'_multi'=>true);
				 $where2['weekend&hdtimeend&type'] =array(array('eq','有周末'),array('egt',$tm),array('eq',$fl),'_multi'=>true);
				 $where2['_logic'] = 'OR';
	            import('ORG.Util.Page');// 导入分页类
				$count=$all->where($where2)->count();
				$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
				$Page->setConfig('header','个活动');
				$show= $Page->show();// 分页显示输出
				
				$music=$all->where($where2)->limit($Page->firstRow.','.$Page->listRows)->select();
				if($music==null){
				$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
				}
				$this->assign('page',$show);
				$this->assign('hd',$music);
				$this->assign('fff',$fl);
				$ty['p_id']=$fl;
				$tp2=$type2->where($ty)->select();
				$twhere['c_id']=$fl;
				$cname=$type2->where($twhere)->getField('c_name');
				$this->assign('title',$cname);
				$this->assign('time','周末');
			   $this->assign('ty2',$tp2);
	   
	   }
	   else if($dt=='week'){   //未来一周
				$tm1=strtotime("+1 day");
		        $tmtrr=date('Y-m-d',$tm1);
				$tm1=strtotime($tmtrr);
				
				$tm2=strtotime("+2 day");
		        $tmtrr=date('Y-m-d',$tm2);
				$tm2=strtotime($tmtrr);
			
				$tm3=strtotime("+3 day");
		        $tmtrr=date('Y-m-d',$tm3);
				$tm3=strtotime($tmtrr);
					
				$tm4=strtotime("+4 day");
		        $tmtrr=date('Y-m-d',$tm4);
				$tm4=strtotime($tmtrr);
				
				$tm5=strtotime("+5 day");
		        $tmtrr=date('Y-m-d',$tm5);
				$tm5=strtotime($tmtrr);
				
				$tm6=strtotime("+6 day");
		        $tmtrr=date('Y-m-d',$tm6);
				$tm6=strtotime($tmtrr);
					
				 $where2['hdtime&type'] =array(array('in',array($tm,$tm1,$tm2,$tm3,$tm4,$tm5,$tm6)),array('eq',$fl),'_multi'=>true);
				 $where2['hdtimeend&type'] =array(array('in',array($tm,$tm1,$tm2,$tm3,$tm4,$tm5,$tm6)),array('eq',$fl),'_multi'=>true);
				 $where2['hdtime&hdtimeend&type'] = array(array('elt',$tm6),array('egt',$tm6),array('eq',$fl),'_multi'=>true);
					$where2['_logic'] = 'OR';
				 import('ORG.Util.Page');// 导入分页类
				$count=$all->where($where2)->count();
				$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
				$Page->setConfig('header','个活动');
				$show= $Page->show();// 分页显示输出
				
				$music=$all->where($where2)->limit($Page->firstRow.','.$Page->listRows)->select();
				if($music==null){
				$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
				}
				$this->assign('page',$show);
				$this->assign('hd',$music);
				$this->assign('fff',$fl);
				$ty['p_id']=$fl;
				$tp2=$type2->where($ty)->select();
				$twhere['c_id']=$fl;
				$cname=$type2->where($twhere)->getField('c_name');
				$this->assign('title',$cname);
				$this->assign('time','最近一周');
				
			   $this->assign('ty2',$tp2);
				
			}
	    else if($dt=='free'){   //自由选择日期
				 
				if($fr==NULL){
				 $fr=$_SESSION['free'];
				 }
					$tme=strtotime($fr);
					$_SESSION['free']= $fr;
					$this->assign('free',$fr);
					$tmtr=strtotime($fr);
			
				$td=date('w',$tmtr);
				if($td=="0"){   //选择周几输出
				
				$where2['week7&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="1"){
				
				$where2['week1&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="2"){
				
				$where2['week2&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="3"){
				
				$where2['week3&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="4"){
				
				$where2['week4&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="5"){
				
				$where2['week5&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="6"){
				
				$where2['week6&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				// $where['hdtime'] =array('in',array($tm,$tm1,$tm2,$tm3,$tm4,$tm5,$tm6));
				 $where2['hdtime&hdtimeend&week&type'] = array(array('elt',$tme),array('egt',$tme),array('notlike','%每周%'),array('eq',$fl),'_multi'=>true);
				  import('ORG.Util.Page');// 导入分页类
				$count=$all->where($where2)->count();
				$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
				$Page->setConfig('header','个活动');
				$show= $Page->show();// 分页显示输出
				
				$music=$all->where($where2)->limit($Page->firstRow.','.$Page->listRows)->select();
				if($music==null){
				$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
				}
				$this->assign('page',$show);
				$this->assign('hd',$music);
				$this->assign('fff',$fl);
				$ty['p_id']=$fl;
				$tp2=$type2->where($ty)->select();
				$twhere['c_id']=$fl;
				$cname=$type2->where($twhere)->getField('c_name');
				$this->assign('title',$cname);
				$td=date('m月d日',$tmtr);
				$this->assign('time',$td);
			   $this->assign('ty2',$tp2);
				 }
	}
	else if($fl=='31'||$fl=='32'||$fl=='16'||$fl=='17'||$fl=='15'||$fl=='8'){
	    $where['type']=$fl;
		if($dt=='future'){ //全部
				import('ORG.Util.Page');// 导入分页类
				$count=$all->where($where)->count();
				$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
				$Page->setConfig('header','个活动');
				$show= $Page->show();// 分页显示输出
				$salon=$all->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
				if($salon==null){
				$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
				}
				$this->assign('page',$show);
				$this->assign('hd',$salon);
				$twhere['c_id']=$fl;
				$cname=$type2->where($twhere)->getField('c_name');
				$this->assign('title',$cname);
				
				$this->assign('time','近期');
				$this->assign('fff',$fl);
				}
				
				else if($dt=='today'){  //今天
			  
			    $td=date('w',$tm);
				if($td=="0"){   //选择周几输出
				
				$where2['week7&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="1"){
				
				$where2['week1&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="2"){
				
				$where2['week2&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="3"){
				
				$where2['week3&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="4"){
				
				$where2['week4&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="5"){
				
				$where2['week5&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="6"){
				
				$where2['week6&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				 $where2['hdtime&hdtimeend&week&type'] = array(array('elt',$tm),array('egt',$tm),array('notlike','%每周%'),array('eq',$fl),'_multi'=>true);
			
				import('ORG.Util.Page');// 导入分页类
				$count=$all->where($where2)->count();
				$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
				$Page->setConfig('header','个活动');
				$show= $Page->show();// 分页显示输出
				$salon=$all->where($where2)->limit($Page->firstRow.','.$Page->listRows)->select();
				if($salon==null){
				$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
				}
				$this->assign('page',$show);
				$this->assign('hd',$salon);
				$twhere['c_id']=$fl;
				$cname=$type2->where($twhere)->getField('c_name');
				$this->assign('title',$cname);
				
				$this->assign('time','今天');
				$this->assign('fff',$fl);
			   }
	         else if($dt=='tomorrow'){  //明天
			 $tmtr=strtotime("+1 day");
		        $tmtrr=date('Y-m-d',$tmtr);
				$tmtr=strtotime($tmtrr);
				$td=date('w',$tmtr);
			 if($td=="0"){   //选择周几输出
				
				$where2['week7&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="1"){
				
				$where2['week1&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="2"){
				
				$where2['week2&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="3"){
				
				$where2['week3&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="4"){
				
				$where2['week4&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="5"){
				
				$where2['week5&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="6"){
				
				$where2['week6&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				 $where2['hdtime&hdtimeend&week&type'] = array(array('elt',$tmtr),array('egt',$tmtr),array('notlike','%每周%'),array('eq',$fl),'_multi'=>true);
			
				import('ORG.Util.Page');// 导入分页类
				$count=$all->where($where2)->count();
				$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
				$Page->setConfig('header','个活动');
				$show= $Page->show();// 分页显示输出
				$salon=$all->where($where2)->limit($Page->firstRow.','.$Page->listRows)->select();
				if($salon==null){
				$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
				}
				$this->assign('page',$show);
				$this->assign('hd',$salon);
				$twhere['c_id']=$fl;
				$cname=$type2->where($twhere)->getField('c_name');
				$this->assign('title',$cname);
				
				$this->assign('time','明天');
				$this->assign('fff',$fl);
			 }
		else if($dt=='weekend'){   //周末
			$where2['week&type'] =array(array('like',array('%星期六%','%星期天%','%周%六%','%周%日%',),'OR'),array('eq',$fl),'_multi'=>true);
				 $where2['weekend&hdtimeend&type'] =array(array('eq','有周末'),array('egt',$tm),array('eq',$fl),'_multi'=>true);
				 $where2['_logic'] = 'OR';
				 import('ORG.Util.Page');// 导入分页类
				$count=$all->where($where2)->count();
				$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
				$Page->setConfig('header','个活动');
				$show= $Page->show();// 分页显示输出
				$salon=$all->where($where2)->limit($Page->firstRow.','.$Page->listRows)->select();
				if($salon==null){
				$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
				}
				$this->assign('page',$show);
				$this->assign('hd',$salon);
				$twhere['c_id']=$fl;
				$cname=$type2->where($twhere)->getField('c_name');
				$this->assign('title',$cname);
				
				$this->assign('time','周末');
				$this->assign('fff',$fl);
				 }
		else if($dt=='week'){   //未来一周
				$tm1=strtotime("+1 day");
		        $tmtrr=date('Y-m-d',$tm1);
				$tm1=strtotime($tmtrr);
				
				$tm2=strtotime("+2 day");
		        $tmtrr=date('Y-m-d',$tm2);
				$tm2=strtotime($tmtrr);
			
				$tm3=strtotime("+3 day");
		        $tmtrr=date('Y-m-d',$tm3);
				$tm3=strtotime($tmtrr);
					
				$tm4=strtotime("+4 day");
		        $tmtrr=date('Y-m-d',$tm4);
				$tm4=strtotime($tmtrr);
				
				$tm5=strtotime("+5 day");
		        $tmtrr=date('Y-m-d',$tm5);
				$tm5=strtotime($tmtrr);
				
				$tm6=strtotime("+6 day");
		        $tmtrr=date('Y-m-d',$tm6);
				$tm6=strtotime($tmtrr);
					
				 $where2['hdtime&type'] =array(array('in',array($tm,$tm1,$tm2,$tm3,$tm4,$tm5,$tm6)),array('eq',$fl),'_multi'=>true);
				 $where2['hdtimeend&type'] =array(array('in',array($tm,$tm1,$tm2,$tm3,$tm4,$tm5,$tm6)),array('eq',$fl),'_multi'=>true);
				 $where2['hdtime&hdtimeend&type'] = array(array('elt',$tm6),array('egt',$tm6),array('eq',$fl),'_multi'=>true);
					$where2['_logic'] = 'OR';
					 import('ORG.Util.Page');// 导入分页类
				$count=$all->where($where2)->count();
				$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
				$Page->setConfig('header','个活动');
				$show= $Page->show();// 分页显示输出
				$salon=$all->where($where2)->limit($Page->firstRow.','.$Page->listRows)->select();
				if($salon==null){
				$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
				}
				$this->assign('page',$show);
				$this->assign('hd',$salon);
				$twhere['c_id']=$fl;
				$cname=$type2->where($twhere)->getField('c_name');
				$this->assign('title',$cname);
				
				$this->assign('time','最近一周');
				$this->assign('fff',$fl);
					
					}
		else if($dt=='free'){   //自由选择日期
				 
				if($fr==NULL){
				 $fr=$_SESSION['free'];
				 }
					$tme=strtotime($fr);
					$_SESSION['free']= $fr;
					$this->assign('free',$fr);
					$tmtr=strtotime($fr);
			
				$td=date('w',$tmtr);
				if($td=="0"){   //选择周几输出
				
				$where2['week7&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="1"){
				
				$where2['week1&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="2"){
				
				$where2['week2&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="3"){
				
				$where2['week3&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="4"){
				
				$where2['week4&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="5"){
				
				$where2['week5&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="6"){
				
				$where2['week6&week&type'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				// $where['hdtime'] =array('in',array($tm,$tm1,$tm2,$tm3,$tm4,$tm5,$tm6));
				 $where2['hdtime&hdtimeend&week&type'] = array(array('elt',$tme),array('egt',$tme),array('notlike','%每周%'),array('eq',$fl),'_multi'=>true);
				  import('ORG.Util.Page');// 导入分页类
				$count=$all->where($where2)->count();
				$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
				$Page->setConfig('header','个活动');
				$show= $Page->show();// 分页显示输出
				$salon=$all->where($where2)->limit($Page->firstRow.','.$Page->listRows)->select();
				if($salon==null){
				$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
				}
				$this->assign('page',$show);
				$this->assign('hd',$salon);
				$twhere['c_id']=$fl;
				$cname=$type2->where($twhere)->getField('c_name');
				$this->assign('title',$cname);
				$td=date('m月d日',$tmtr);
				$this->assign('time',$td);
				$this->assign('fff',$fl);
				 
				 }
	}
	
	
	
	
	
	else {
	    $wheretp2['c_id']=$fl;
		
        $pid=$type2->where($wheretp2)->getField('p_id');
		
		
		if($dt=='future'){ //全部
	    $where['type2']=$fl;
		import('ORG.Util.Page');// 导入分页类
		$count=$all->where($where)->count();
		$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('header','个活动');
		$show= $Page->show();// 分页显示输出
		$others=$all->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
		if($others==null){
		$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
		}
		$this->assign('page',$show);
		$this->assign('hd',$others);
		$this->assign('ff',$fl);
		$ty['p_id']=$pid;
		$tp2=$type2->where($ty)->select();
		$twhere['c_id']=$fl;
				$cname=$type2->where($twhere)->getField('c_name');
				$this->assign('title',$cname);
				
				$this->assign('time','近期');
	   $this->assign('ty2',$tp2);
	   }
	   else if($dt=='today'){  //今天
			  
			    $td=date('w',$tm);
				if($td=="0"){   //选择周几输出
				
				$where2['week7&week&type2'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="1"){
				
				$where2['week1&week&type2'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="2"){
				
				$where2['week2&week&type2'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="3"){
				
				$where2['week3&week&type2'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="4"){
				
				$where2['week4&week&type2'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="5"){
				
				$where2['week5&week&type2'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="6"){
				
				$where2['week6&week&type2'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				 $where2['hdtime&hdtimeend&week&type2'] = array(array('elt',$tm),array('egt',$tm),array('notlike','%每周%'),array('eq',$fl),'_multi'=>true);
				 
				 import('ORG.Util.Page');// 导入分页类
		$count=$all->where($where2)->count();
		$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('header','个活动');
		$show= $Page->show();// 分页显示输出
		$others=$all->where($where2)->limit($Page->firstRow.','.$Page->listRows)->select();
		if($others==null){
		$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
		}
		$this->assign('page',$show);
		$this->assign('hd',$others);
		$this->assign('ff',$fl);
		$ty['p_id']=$pid;
		$tp2=$type2->where($ty)->select();
		$twhere['c_id']=$fl;
				$cname=$type2->where($twhere)->getField('c_name');
				$this->assign('title',$cname);
				
				$this->assign('time','明天');
	   $this->assign('ty2',$tp2);
				 
				 }
				else if($dt=='tomorrow'){  //明天
			 $tmtr=strtotime("+1 day");
		        $tmtrr=date('Y-m-d',$tmtr);
				$tmtr=strtotime($tmtrr);
				$td=date('w',$tmtr);
					if($td=="0"){   //选择周几输出
				
				$where2['week7&week&type2'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="1"){
				
				$where2['week1&week&type2'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="2"){
				
				$where2['week2&week&type2'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="3"){
				
				$where2['week3&week&type2'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="4"){
				
				$where2['week4&week&type2'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="5"){
				
				$where2['week5&week&type2'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="6"){
				
				$where2['week6&week&type2'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				 $where2['hdtime&hdtimeend&week&type2'] = array(array('elt',$tmtr),array('egt',$tmtr),array('notlike','%每周%'),array('eq',$fl),'_multi'=>true);
				 
				 import('ORG.Util.Page');// 导入分页类
		$count=$all->where($where2)->count();
		$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('header','个活动');
		$show= $Page->show();// 分页显示输出
		$others=$all->where($where2)->limit($Page->firstRow.','.$Page->listRows)->select();
		if($others==null){
		$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
		}
		$this->assign('page',$show);
		$this->assign('hd',$others);
		$this->assign('ff',$fl);
		$ty['p_id']=$pid;
		$tp2=$type2->where($ty)->select();
		$twhere['c_id']=$fl;
				$cname=$type2->where($twhere)->getField('c_name');
				$this->assign('title',$cname);
				
				$this->assign('time','明天');
	   $this->assign('ty2',$tp2);
              }				
	    else if($dt=='weekend'){   //周末
			$where2['week&type2'] =array(array('like',array('%星期六%','%星期天%','%周%六%','%周%日%',),'OR'),array('eq',$fl),'_multi'=>true);
				 $where2['weekend&hdtimeend&type2'] =array(array('eq','有周末'),array('egt',$tm),array('eq',$fl),'_multi'=>true);
				 $where2['_logic'] = 'OR';
	             import('ORG.Util.Page');// 导入分页类
		$count=$all->where($where2)->count();
		$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('header','个活动');
		$show= $Page->show();// 分页显示输出
		$others=$all->where($where2)->limit($Page->firstRow.','.$Page->listRows)->select();
		if($others==null){
		$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
		}
		$this->assign('page',$show);
		$this->assign('hd',$others);
		$this->assign('ff',$fl);
		$ty['p_id']=$pid;
		$tp2=$type2->where($ty)->select();
		$twhere['c_id']=$fl;
				$cname=$type2->where($twhere)->getField('c_name');
				$this->assign('title',$cname);
				
				$this->assign('time','周末');
	   $this->assign('ty2',$tp2);
	   }
	    else if($dt=='week'){   //未来一周
				$tm1=strtotime("+1 day");
		        $tmtrr=date('Y-m-d',$tm1);
				$tm1=strtotime($tmtrr);
				
				$tm2=strtotime("+2 day");
		        $tmtrr=date('Y-m-d',$tm2);
				$tm2=strtotime($tmtrr);
			
				$tm3=strtotime("+3 day");
		        $tmtrr=date('Y-m-d',$tm3);
				$tm3=strtotime($tmtrr);
					
				$tm4=strtotime("+4 day");
		        $tmtrr=date('Y-m-d',$tm4);
				$tm4=strtotime($tmtrr);
				
				$tm5=strtotime("+5 day");
		        $tmtrr=date('Y-m-d',$tm5);
				$tm5=strtotime($tmtrr);
				
				$tm6=strtotime("+6 day");
		        $tmtrr=date('Y-m-d',$tm6);
				$tm6=strtotime($tmtrr);
					
				 $where2['hdtime&type2'] =array(array('in',array($tm,$tm1,$tm2,$tm3,$tm4,$tm5,$tm6)),array('eq',$fl),'_multi'=>true);
				 $where2['hdtimeend&type2'] =array(array('in',array($tm,$tm1,$tm2,$tm3,$tm4,$tm5,$tm6)),array('eq',$fl),'_multi'=>true);
				 $where2['hdtime&hdtimeend&type2'] = array(array('elt',$tm6),array('egt',$tm6),array('eq',$fl),'_multi'=>true);
					$where2['_logic'] = 'OR';
					import('ORG.Util.Page');// 导入分页类
		$count=$all->where($where2)->count();
		$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('header','个活动');
		$show= $Page->show();// 分页显示输出
		$others=$all->where($where2)->limit($Page->firstRow.','.$Page->listRows)->select();
		if($others==null){
		$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
		}
		$this->assign('page',$show);
		$this->assign('hd',$others);
		$this->assign('ff',$fl);
		$ty['p_id']=$pid;
		$tp2=$type2->where($ty)->select();
		$twhere['c_id']=$fl;
				$cname=$type2->where($twhere)->getField('c_name');
				$this->assign('title',$cname);
				
				$this->assign('time','最近一周');
	   $this->assign('ty2',$tp2);
					
					
					}
		else if($dt=='free'){   //自由选择日期
				 
				if($fr==NULL){
				 $fr=$_SESSION['free'];
				 }
					$tme=strtotime($fr);
					$_SESSION['free']= $fr;
					$this->assign('free',$fr);
					$tmtr=strtotime($fr);
			
				$td=date('w',$tmtr);
				if($td=="0"){   //选择周几输出
				
				$where2['week7&week&type2'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="1"){
				
				$where2['week1&week&type2'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="2"){
				
				$where2['week2&week&type2'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="3"){
				
				$where2['week3&week&type2'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="4"){
				
				$where2['week4&week&type2'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="5"){
				
				$where2['week5&week&type2'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				else if($td=="6"){
				
				$where2['week6&week&type2'] =array('1',array('like','%每周%'),array('eq',$fl),'_multi'=>true);
				$where2['_logic'] = 'OR';
				}
				 $where2['hdtime&hdtimeend&week&type2'] = array(array('elt',$tme),array('egt',$tme),array('notlike','%每周%'),array('eq',$fl),'_multi'=>true);
				import('ORG.Util.Page');// 导入分页类
		$count=$all->where($where2)->count();
		$Page= new Page($count,$pages);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('header','个活动');
		$show= $Page->show();// 分页显示输出
		$others=$all->where($where2)->limit($Page->firstRow.','.$Page->listRows)->select();
		if($others==null){
		$this->assign('tishi','暂时没有符合条件的活动，<a href="__APP__/Fabu/index">我来创建</a>');
		}
		$this->assign('page',$show);
		$this->assign('hd',$others);
		$this->assign('ff',$fl);
		$ty['p_id']=$pid;
		$tp2=$type2->where($ty)->select();
		$twhere['c_id']=$fl;
				$cname=$type2->where($twhere)->getField('c_name');
				$this->assign('title',$cname);
				$td=date('m月d日',$tmtr);
				$this->assign('time',$td);
	   $this->assign('ty2',$tp2);
				}
				
				
	}
	
	
	
	//dump($fl);
	
	$this->display();
	}
	
	
}
?>