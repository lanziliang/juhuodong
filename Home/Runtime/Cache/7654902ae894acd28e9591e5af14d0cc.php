<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN" class="ua-windows ua-ff29">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">




    <title>
<?php echo ($un); ?>
</title>

    




    
    
    

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/mydetail.css" media="all">


<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
 

<script>
$(function(){
$('input[class="cancel"]').click(function(){
var aa=document.getElementById ("edit_sign");
	var aa1=document.getElementById ("edi");
	
	var showa=document.getElementById ("display");
	
    
	showa.style.display='inline';

	aa.style.display='none';
	aa1.style.display='inline';

});
$('input[class="submit"]').click(function(){
var ad=document.getElementById ("acpro_inp3");
						var s=ad.value;
						//alert(s);
$.get('__URL__/qianming',{'signature':s},function(data){
						if(data=='ok'){
						  var a=document.getElementById ("edit_sign");
	var a1=document.getElementById ("edi");
	var qm=document.getElementById ("acpro_inp3");
	var show=document.getElementById ("display");
	show.style.display='inline';
	show.innerHTML=qm.value;
    
	

	a.style.display='none';
	a1.style.display='inline';
						}else{
							alert('编辑签名档错误！');
						}
						});
						

});
$('input[id="intro_cancel"]').click(function(){
var js=document.getElementById ("js");
	var intro_disp_act=document.getElementById ("intro_disp_act");
	
	var intro_display=document.getElementById ("intro_display");
	
    
	intro_display.style.display='inline';

	js.style.display='none';
	intro_disp_act.style.display='inline';

});
$('input[id="intro_submit"]').click(function(){
var intro=document.getElementById ("intro");
						var s=intro.value;
						//alert(s);
$.get('__URL__/jieshao',{'signature':s},function(data){
						if(data=='ok'){
						  var a=document.getElementById ("js");
	var a1=document.getElementById ("intro_disp_act");
	var qm=document.getElementById ("intro");
	var show=document.getElementById ("intro_display");
	show.style.display='inline';
	show.innerHTML=qm.value;
    
	

	a.style.display='none';
	a1.style.display='inline';
						}else{
							alert('编辑个人介绍错误！');
						}
						});
						

});
var a=document.getElementById ("h");
var b=document.getElementById ("t");

 if(a.innerHTML=='的账号')
   {
       a.innerHTML='登录';
       b.innerHTML='注册';
	   a.href="__APP__/Login/login";
	   b.href="__APP__/Register/register";
	   
   }
   });
</script>

<script>
$(function(){

var tx=document.getElementById ("tx");
var edi2=document.getElementById ("intro_disp_act");
var edi1=document.getElementById ("edi");
var fb=document.getElementById ("fb");
 var a1=document.getElementById ("intro_disp_act");  
   if('<?php echo ($nn); ?>'=='我'){
   tx.style.display='inline';
   edi2.style.display='inline';
   edi1.style.display='inline';
 fb.style.display='block';
  a1.style.display='inline';
  
   
   }

});
</script>

<script>
function qianming(){
	var a=document.getElementById ("edit_sign");
	var a1=document.getElementById ("edi");
	var qm=document.getElementById ("acpro_inp3");
	var show=document.getElementById ("display");
	qm.value=show.innerHTML;
    
	show.style.display='none';

	a.style.display='block';
	a1.style.display='none';
	
	
	
	}
function jieshao(){
	var a=document.getElementById ("js");
	var a1=document.getElementById ("intro_disp_act");
	
	var show=document.getElementById ("intro_display");
	
    
	show.style.display='none';
a.style.display='block';
	
	a1.style.display='none';
	
	
	
	}
	
</script>

</head>
<body><div style="display: none; left: 871px; top: -676px; width: 252px;" class="predictad" id="predictad_div"></div>
 
<div id="db-global-nav" class="global-nav">
  <div class="bd">

<div class="top-nav-info">
    

    <span class="perf-metric"><!-- _performtips_ --></span>
    <ul>
       
       
       <li class="nav-user-account">
       <a id="h" href="__URL__/myhd/people/<?php echo ($uid); ?>" class="nav-login" rel="nofollow"><?php echo ($name); ?>的账号</a>
      <a id="t" href="__APP__/Login/doLogout" class="nav-register" rel="nofollow">退出</a>
       

       </li>
     </ul>
</div>

  </div>
</div>

<div id="db-nav-sns" class="nav">
  <div class="nav-wrap">
    <div class="nav-primary">
      <div class="nav-items">
        <ul>
		<li><img src="__PUBLIC__/Images/home_logo2.png" onclick="javascript:window.location.href='__URL__/index'" style="cursor:pointer" /></li>
          <li><a  href="__URL__/index">首页</a></li>
            <li><a href="__URL__/mydetail/people/<?php echo ($uid); ?>">我的主页</a></li>
          <li><a href="__URL__/myhd/people/<?php echo ($uid); ?>">我的活动</a></li>
          <li>
              <a href="http://www.douban.com/thing/explore">事情</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>





    <div id="wrapper">
        

        
<div id="content">
    

    <div class="grid-16-8 clearfix">
        
        
        <div class="article drop-area ui-sortable">
               





<div id="db-usr-profile">
<div class="pic">
    <a href="__URL__/mydetail/people/<?php echo ($id); ?>">
        <img src="__PUBLIC__/avatar/<?php echo ($userdetail["image"]); ?>_60.jpg" alt="<?php echo ($un); ?>">
    </a>
</div>
<div class="info">
    <h1>
        <?php echo ($un); ?>
            
    
    <div id="edit_signature" style="display: inline;" class="j a_edit_signature edtext pl">
        <span id="display" style="display: inline;"><?php echo ($userdetail["qianming"]); ?></span>
    <span id="edi" style="display: none;">
        (<a class="sign-text" href="javascript:void(0);" onclick="qianming()">编辑签名档</a>)
    </span>
	
    <form id="edit_sign" style="display: none;" action=""  method="post">
        <input id="acpro_inp3" name="signature" size="30" maxlength="30" value="" type="text">
        <!--<input class="submit" value="修改" type="submit">-->
        <input class="submit" value="修改" type="button">
        <input class="cancel" value="取消" type="button">
    </form>
    </div>

    </h1>
    <ul>
          <li><a href="__URL__/mydetail/people/<?php echo ($id); ?>"><?php echo ($nn); ?>的主页</a></li>
          <li><a href="__URL__/myhd/people/<?php echo ($id); ?>"><?php echo ($nn); ?>的聚活动</a></li>
          <li><a href="__URL__/wish/people/<?php echo ($id); ?>"><?php echo ($nn); ?>的兴趣</a></li>
          <li><a href="__URL__/liuyan/people/<?php echo ($id); ?>"><?php echo ($nn); ?>的留言</a></li>
         
    </ul>
</div>
</div>
<div class="clear"></div>


       




     
        <div class="sort " id="note">
        

    
    <h2>
        <?php echo ($nn); ?>的聚活动
            &nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;·
            <span class="pl">&nbsp;(
                
                    <a href="__URL__/faqi/people/<?php echo ($id); ?>" target="_self">全部</a>
                ) </span>
    </h2>
    <div id="fb" style="display:none">
    <a class="lnk-create" href="__APP__/Fabu/index" ><i>+</i>发布活动</a>
	</div>

    <div class="content">在聚活动上发布活动，找到志同道合的小伙伴。</div>
	<div class="evt_short">
        <ul>
            <?php if(is_array($canjia)): foreach($canjia as $key=>$vo): ?><li class="actfromfri">
                
                <div class="pl">
                    <a class="pl2" href="__URL__/detail/event/<?php echo ($vo["id"]); ?>" target="_top"><?php echo ($vo["title"]); ?></a><br>
                    时间:<?php echo ($vo["showtime"]); ?> <?php echo ($vo["hdstart"]); ?>到<?php echo ($vo["hdend"]); ?><br>
                    <?php echo ($vo["love"]); ?>人感兴趣
                        
                </div>
               
                </li><?php endforeach; endif; ?>
                
        </ul>
    </div>




        </div>
      
       
   
        <div class="sort " id="board">
        
    <h2>
        留言板
            &nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;·
            <span class="pl">&nbsp;(
                
                    <a href="__URL__/liuyan/people/<?php echo ($id); ?>" target="_self">全部</a>
                ) </span>
    </h2>


        
        <form action="__APP__/Content/doContent" name="bpform" method="post" style="margin-bottom: 12px;"><input name="fromid" value="<?php echo ($uid); ?>" type="hidden"><input name="toid" value="<?php echo ($id); ?>" type="hidden">
            <textarea name="content" style="width: 97%; height: 50px; margin-bottom: 5px;"></textarea>
        <input name="bp_submit" class="butt" value=" 留言 " type="submit"></form>
    



<ul class="mbt" id="comments">
<?php if(is_array($liuyan)): foreach($liuyan as $key=>$vo): ?><li class="mbtl"><a href="__URL__/myhd/people/<?php echo ($vo["fromid"]); ?>"><img src="__PUBLIC__/avatar/<?php echo ($vo["userdetail"]["image"]); ?>_60.jpg" alt="<?php echo ($vo["username"]); ?>" width="45"></a></li>
<li class="mbtrdot comment-item" data-cid="39687883"><a href="__URL__/myhd/people/<?php echo ($vo["fromid"]); ?>"><?php echo ($vo["username"]); ?></a>: &nbsp;
<?php echo ($vo["content"]); ?> &nbsp; &nbsp; <span class="pl"><?php echo (date('y-m-d H:i',$vo["time"])); ?></span>
    <br>
   
    </li><?php endforeach; endif; ?>
</ul>
        </div>
        </div>
        <div class="aside drop-area ui-sortable">

<div id="profile">


<div class="infobox">
    <div class="ex1"><span></span></div>
    <div class="bd">
<img src="__PUBLIC__/avatar/<?php echo ($userdetail["image"]); ?>" class="userface" alt="" width="150">

<div class="user-info">

常居:&nbsp;福建厦门<br>

<div class="pl">邮箱：<?php echo ($email); ?> <br> <?php echo (date('Y-m-d',$tm)); ?>加入 <br><a id="tx" style="display: none;"  href="__APP__/Touxiang/index">修改当前头像</a></div>

</div>


<div class="sep-line"></div>
<div class="user-intro">
    <div id="edit_intro" class="j edtext pl" >
        <pre id="intro_display" style="display: inline;"><?php echo ($userdetail["jieshao"]); ?>
</pre>
        <span id="intro_disp_act" style="display: none;">
            (<a class="edijs" href="javascript:void(0);" onclick="jieshao()">
                编辑
            </a>)
        </span>
        
        <form id="js" style="display:none;"     >
            <textarea id="intro" ><?php echo ($userdetail["jieshao"]); ?></textarea><br>
            <input id="intro_submit"  value="保存" type="button">
            <input id="intro_cancel"  value="取消" type="button">
        </form>

        
    </div>

</div>

</div>
   
</div>


</div>







    








  <div class="clear"></div>


    

   


    
    







<div id="friend">

    <h2>
       <?php echo ($nn); ?>的关注
            &nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;·
            <span class="pl">&nbsp;(
                
                <a href="http://www.douban.com/contacts/list" target="_self">成员5</a>
                ) </span>
    </h2>

<dl class="obu"><dt><a href="http://www.douban.com/people/54038126/" class="nbg"><img src="u54038126-1.jpg" class="m_sub_img" alt="Mr 看"></a></dt>
                    <dd><a href="http://www.douban.com/people/54038126/">Mr 看</a></dd></dl><dl class="obu"><dt><a href="http://www.douban.com/people/panlijunzuibang/" class="nbg"><img src="u72440913-7.jpg" class="m_sub_img" alt="妹纸不是弟子"></a></dt>
                    <dd><a href="http://www.douban.com/people/panlijunzuibang/">妹纸不是弟子</a></dd></dl><dl class="obu"><dt><a href="http://www.douban.com/people/74642312/" class="nbg"><img src="u74642312-1.jpg" class="m_sub_img" alt="Crystal"></a></dt>
                    <dd><a href="http://www.douban.com/people/74642312/">Crystal</a></dd></dl><dl class="obu"><dt><a href="http://www.douban.com/people/65493091/" class="nbg"><img src="u65493091-8.jpg" class="m_sub_img" alt="莫忘初衷"></a></dt>
                    <dd><a href="http://www.douban.com/people/65493091/">莫忘初衷</a></dd></dl><dl class="obu"><dt><a href="http://www.douban.com/people/70160707/" class="nbg"><img src="u70160707-4.jpg" class="m_sub_img" alt="--"></a></dt>
                    <dd><a href="http://www.douban.com/people/70160707/">--</a></dd></dl><br clear="all">
    
</div>


    <p class="rev-link"><a href="http://www.douban.com/contacts/rlist">&gt;&nbsp;<?php echo ($nn); ?>被4人关注</a></p>

    

    



    


        
        
        
        








        
        
    </div>
</div>

        
<div id="footer">
    

<span id="icp" class="fleft gray-link">
    © 2005－2014 聚活动.com, all rights reserved
</span>

<span class="fright">
    <a href="http://www.douban.com/about">关于聚活动</a>
   
    · <a href="http://www.douban.com/about?topic=contactus">联系我们</a>

    
    · <a href="http://www.douban.com/help/">帮助中心</a>
 
</span>


</div>

    </div>
    
    
    
    








    <!-- dis18-->

  





<div style="position: absolute; width: 1px; height: 1px;" id="dp_swf_engine"><object style="width: 1px; height: 1px;" id="_dp_swf_engine" data="swf.swf" type="application/x-shockwave-flash" height="1" width="1"><param value="always" name="allowscriptaccess"></object></div><div id="widditFloatingSettings" style="bottom: 0px; cursor: pointer; position: fixed ! important; z-index: 9999999; left: 0px; display: none; width: 50px; height: 26px; padding-left: 10px;"></div></body>
</html>