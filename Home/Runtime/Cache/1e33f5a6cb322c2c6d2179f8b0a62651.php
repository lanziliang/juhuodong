<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN" class="ua-windows ua-ff28">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <meta name="renderer" content="webkit">

    <title>
对"<?php echo ($hd["title"]); ?>"活动感兴趣的成员
</title>
    
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="Sun, 6 Mar 2005 01:00:00 GMT">
    
    
    
    
    
    
    
    
    

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/gxq.css" media="all">
<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
<script>
$(function(){
var a=document.getElementById ("h");
var b=document.getElementById ("t");
   
   if(a.innerHTML=='欢迎你，')
   {
       a.innerHTML='登录';
       b.innerHTML='注册';
	   a.href="__APP__/Login/login";
	   b.href="__APP__/Register/register";
	   
   }

});
</script>
</head>
<body><div style="display: none; left: 870px; top: 76px; width: 266px;" class="predictad" id="predictad_div"></div>
  
    
    
   







<div id="db-global-nav" class="global-nav">
  <div class="bd">
    






<div class="top-nav-info">
      
      <a id="h" href="__URL__/myhd/people/<?php echo ($uid); ?>" class="nav-login" rel="nofollow">欢迎你，<?php echo ($name); ?></a>
      <a id="t" href="__APP__/Login/doLogout" class="nav-register" rel="nofollow">退出</a>
</div>



    
  </div>
</div>



   
    








<div id="db-nav-location" class="nav">
  <div class="nav-wrap">
  <div class="nav-primary">
    <div class="nav-search">
      <form id="nav-search-form" action="http://www.douban.com/event/search" method="get">
          
          <div class="inp">
            <label style="display: none;" for="inp-query">活动名称、地点、介绍、舞台剧</label>
            <input autocomplete="off" widdit="on" placeholder="活动名称、地点、介绍、舞台剧" class="inp-text" id="inp-query" name="search_text" size="22" value="">
            <input class="inp-btn" value="搜索" type="submit">
          </div>
            <input name="loc" value="xiamen" type="hidden">
      </form>
    </div>
     <div class="nav-items nav-logged-in">
      <ul>
	  <li>
         <img src="__PUBLIC__/Images/home_logo.png" onclick="javascript:window.location.href='__URL__/index'" style="cursor:pointer" />
    </li>
    <li>
        <a href="#">本地活动</a>
    </li>
     
    <li>
        <a id="lnk-my-loc" href="__URL__/myhd/people/<?php echo ($uid); ?>">我的活动</a>
    </li>
	
      </ul>
  </div>
 
  </div>
  </div>
</div>






    <div id="wrapper">
        

        
<div id="content">
    
    <h1>对"<?php echo ($hd["title"]); ?>"活动感兴趣的成员</h1>

    <div class="grid-16-8 clearfix">
        
        
        <div class="article">
               

<div class="article"> 

    <span class="wrap"><h3>共有<?php echo ($hd["love"]); ?>位成员</h3></span><br>
    <div class="obss name indent">
	<?php if(is_array($lover)): foreach($lover as $key=>$vo): ?><dl class="obu">
    <dt><a href="http://www.douban.com/location/people/50390461/" class="nbg"><img src="__PUBLIC__/avatar/<?php echo ($vo["userdetail"]["image"]); ?>_60.jpg" class="m_sub_img" alt="natalie"></a></dt> 
    <dd><a href="__URL__/myhd/people/<?php echo ($vo["uid"]); ?>"><?php echo ($vo["username"]); ?></a><br>
    	<span class="pl">(厦门)</span>
    </dd>
	
    </dl><?php endforeach; endif; ?>
  
   

    <br clear="all"> 
    </div>
    <br clear="all">

    
    
    

    


    
    <br><br> 

</div> 

        </div>
        <div class="aside">
                
    <p class="pl2">&gt; <a href="__URL__/detail/event/<?php echo ($hd["id"]); ?>">去"<?php echo ($hd["title"]); ?>"的页面</a></p> 

        </div>
        <div class="extra">
            
        </div>
    </div>
</div>

        
<div id="footer">
    

<span id="icp" class="fleft gray-link">
    © 2005－2014 juhuodong.com, all rights reserved
</span>

<span class="fright">
    <a href="http://www.douban.com/about">关于聚活动</a>
 
    · <a href="http://www.douban.com/about?topic=contactus">联系我们</a>
  
    
    · <a href="http://www.douban.com/location/help/">帮助中心</a>
 
</span>


</div>

    </div>
    
    
    
    








    <!-- dis17-->

  





<div style="position: absolute; width: 1px; height: 1px;" id="dp_swf_engine"><object style="width: 1px; height: 1px;" id="_dp_swf_engine" data="swf.swf" type="application/x-shockwave-flash" height="1" width="1"><param value="always" name="allowscriptaccess"></object></div><div id="widditFloatingSettings" style="bottom: 0px; cursor: pointer; position: fixed ! important; z-index: 9999999; left: 0px; display: none; width: 50px; height: 26px; padding-left: 10px;"></div></body>
</html>