<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN" class="ua-windows ua-ff28">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <meta name="renderer" content="webkit">

    <title><?php echo ($un); ?>感兴趣的活动</title>
    
  

  
    <meta id="meta-viewport" name="viewport" content="width=980">

  
  


  

  

  
  
  

  


  
  

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/wish.css" media="all">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/page.css" media="all">
<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
<script>
$(function(){


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

</head>
<body><div style="display: none; left: 870px; top: -491px; width: 266px;" class="predictad" id="predictad_div"></div>
  
  
  
   







<div id="db-global-nav" class="global-nav">
  <div class="bd">
    






<div class="top-nav-info">
    

    <span class="perf-metric"><!-- _performtips_ --></span>
    <ul>
       
        <a id="h" href="__URL__/myhd/people/<?php echo ($uid); ?>" class="nav-login" rel="nofollow"><?php echo ($name); ?>的账号</a>
      <a id="t" href="__APP__/Login/doLogout" class="nav-register" rel="nofollow">退出</a>
     </ul>
</div>


    

    <div class="global-nav-items">
     
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
            <input name="loc" value="beijing" type="hidden">
      </form>
    </div>
    <div class="nav-items nav-logged-in">
      <ul>
	  <li>
         <img src="__PUBLIC__/Images/home_logo.png" onclick="javascript:window.location.href='__URL__/index'" style="cursor:pointer" />
    </li>
    <li>
        <a href="__URL__/fenlei/fl/all">本地活动</a>
    </li>
     
    <li>
        <a id="lnk-my-loc" href="__URL__/myhd/people/<?php echo ($uid); ?>">我的活动</a>
    </li>
	<li>
        <a  href="__APP__/Touxiang/index">修改我的头像</a>
    </li>
      </ul>
  </div>
 
  </div>
  </div>
</div>






  

  <div id="wrapper" class="fwrap">
      
<div id="content">
    
  




<div id="db-usr-profile">
  <div class="pic">
    <a href="__URL__/myhd/people/<?php echo ($id); ?>"><img alt=" <?php echo ($name); ?>" src="__PUBLIC__/avatar/<?php echo ($userdetail["image"]); ?>_60.jpg"></a>
  </div>
  
  <div class="info">
    <h1>
	<span>
        &nbsp;
      </span>
        <?php echo ($un); ?>感兴趣的活动
        
       
    </h1>
    <p>
	<span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </span>
      <span>
        <a href="__URL__/myhd/people/<?php echo ($id); ?>">同城主页</a>
      </span>
		<span>
        <a href="__URL__/wish/people/<?php echo ($id); ?>">感兴趣</a>
      </span>
	  
      <span>
        <a href="__URL__/faqi/people/<?php echo ($id); ?>">发起</a>
      </span>
      <span>
        <a href="__URL__/mydetail/people/<?php echo ($id); ?>">个人主页</a>
      </span>
    </p>
  </div>
</div>












    <div class="grid-free clearfix">
        
        
        <div class="article" id="xq1" style="display: block;">
               
  
  
  <div class="tabs norm-tabs" >
        <a href="__URL__/wish/people/<?php echo ($id); ?>"  class="on">可参加 <em>(<?php echo ($xqok); ?>)</em></a>
        <a href="__URL__/wishover/people/<?php echo ($id); ?>"  >已过期 <em>(<?php echo ($xqover); ?>)</em></a>
  </div>

    
  <ul class="events-list events-list-pic100 events-list-psmall">
  <?php if(is_array($canjia)): foreach($canjia as $key=>$vo): ?><li class="list-entry" itemscope="" itemtype="http://data-vocabulary.org/Event">
      <div class="pic">
        <a href="__URL__/detail/event/<?php echo ($vo["huodong"]["id"]); ?>">
          <img  src="__PUBLIC__/Uploads/<?php echo ($vo["huodong"]["image"]); ?>" itemprop="photo" width="110" height="200">
        </a>
      </div>
      <div class="info">
        <div class="title">
          <a href="__URL__/detail/event/<?php echo ($vo["huodong"]["id"]); ?>" title=" <?php echo ($vo["huodong"]["title"]); ?>" itemprop="url">
            <span itemprop="summary"> <?php echo ($vo["huodong"]["title"]); ?></span>
          </a>
        </div>
        
        <ul class="event-meta">
          <li class="event-time">
          <span class="hidden-xs">时间：</span>
            
            <?php echo ($vo["huodong"]["showtime"]); ?>
            <time itemprop="startDate" datetime="2014-03-10T10:00:00"></time>
            <time itemprop="endDate" datetime="2014-05-10T20:00:00"></time>
          </li>
          <li title="<?php echo ($vo["huodong"]["address"]); ?>">
            <span class="hidden-xs">地点：</span>
           <?php echo ($vo["huodong"]["address"]); ?>
             
          </li>
          <li class="fee">
            
              <span class="hidden-xs">费用：</span>
              <strong><?php echo ($vo["huodong"]["money"]); ?></strong>
          </li>
          <li>
            <span class="meta-title">发起：</span>
            <a target="db-event-owner" href="__URL__/myhd/people/<?php echo ($vo["huodong"]["uid"]); ?>"><?php echo ($vo["huodong"]["name"]); ?></a>
          </li>
		  
        </ul>
        <p class="counts">
           <span><?php echo ($vo["huodong"]["love"]); ?>人感兴趣</span>
        </p>
      </div>
      </li><?php endforeach; endif; ?>
      
  </ul>
  <div align="center" ><?php echo ($page); ?></div>
        </div>
		
		    
		
		
		
		
        <div class="aside">
                
  <p class="pl2">
  &gt; <a href="__URL__/myhd/people/<?php echo ($id); ?>">去<?php echo ($un); ?>的活动首页</a>
  </p>
  <p class="pl2">
  &gt; <a href="__URL__/mydetail/people/<?php echo ($id); ?>">去<?php echo ($un); ?>的个人首页</a>
  </p>

        </div>
        <div class="extra">
            
        </div>
    </div>
</div>

      
  <div id="footer">
    <div class="hidden-sm">
      

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

  </div>
  
  
  
    








  <!-- nain2-->
  

  





</body>
</html>