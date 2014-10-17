<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN" class="ua-windows ua-ff28">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="renderer" content="webkit">
    <title>聚活动</title>
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="Sun, 6 Mar 2005 01:00:00 GMT">
    <meta id="meta-viewport" name="viewport" content="width=980">
    <meta name="keywords" content="活动网站, 同城活动, 活动发布, 活动搜索,聚活动, 音乐, 演出, 电影, 话剧, 公益, 讲座, 沙龙, 展览, 聚会, 旅行, 交友">
    <meta name="description" content="提供本地所有音乐、戏剧、讲座、聚会、旅行等线下活动的资讯，并能根据你的口味推荐好活动给你，帮助你结识志同道合的人">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/index.css" media="all">

<script type="text/javascript" src="__PUBLIC__/Js/pictureturn.js"></script>
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

<body>
<div id="db-global-nav" class="global-nav">
  <div class="bd">   
	<div class="top-nav-info">
    <span class="perf-metric"><!-- _performtips_ --></span>
    <ul>
       <li class="nav-user-account">
       <div><a id="h"  href="__URL__/myhd/people/<?php echo ($uid); ?>" class="bn-more"><?php echo ($name); ?>的账号</a><a id="t"  href="__APP__/Login/doLogout">退出</a></div>
       
       </li>
     </ul>
	</div>
  </div>
</div>

<div id="db-nav-location" class="nav">
  <div class="nav-wrap">
  <div class="nav-primary">
    <div class="nav-search">
      <form id="nav-search-form" action="#" method="get">     
          <div class="inp">
            <label style="display: none;" for="inp-query">活动名称、地点、介绍、舞台剧</label>
            <input placeholder="活动名称、地点、介绍、舞台剧" class="inp-text" id="inp-query" name="search_text" size="22" value="">
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
        <a href="__URL__/fenlei/fl/all/date/week">本地活动</a>
    </li>
     
    <li>
        <a  href="__URL__/myhd/people/<?php echo ($uid); ?>">我的活动</a>
    </li>
	<li><a href="__URL__/mydetail/people/<?php echo ($uid); ?>">我的主页</a></li>
      </ul>
  </div>
 
  </div>
  </div>
</div>

<div id="wrapper" class="fwrap">      
	<div id="content">
    <div class="grid-free clearfix">  
        <div class="article">               
    <div class="hidden-xs">
    </div>
<!--热门活动版块-->
<div id="db-events-guess" class="mod ui-slides">

  <div class="hd">
    <h2>热门活动</h2>  
   <div class="ui-slide-control" >
    <span class="ui-slide-counter pl">1/4</span>
    <a class="btn-prev" href="javascript:void(0)"></a>
    <a class="btn-next" href="javascript:void(0)"></a>
   </div>
 </div>
  
  
  
  <div class="bd ui-slide-screen">
    <ul class="ui-slide-contents gallery gallery-pic110" style="left:0px; width:4800px">
        <?php if(is_array($hd)): foreach($hd as $key=>$vo): ?><li>
          <div class="pic">
            <a tabindex="-1"  href="__URL__/detail/event/<?php echo ($vo["id"]); ?>" ><img alt="" src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" height="165" width="110"></a>
          </div>
          <div class="title">
              <a href="__URL__/detail/event/<?php echo ($vo["id"]); ?>"  title="<?php echo ($vo["title"]); ?>" ><?php echo ($vo["title"]); ?></a>
          </div>
        </li><?php endforeach; endif; ?>
    </ul>
  </div>
</div>


 
  


 
  <div id="picked-events">
  
  <!--音乐模块-->
  <div class="mod event-mod">
    <div class="hd">
      <h2>
        <span class="title">
        音乐
        </span>
      </h2>
      <span class="pl rr">
        <a href="__URL__/fenlei/fl/music">更多》</a>
      </span>
        <div class="tabs">
            <a class="on" href="javascript:void(0)" id="music_hot">
              <span>最热</span>
            </a>
              <a  href="__URL__/fenlei/fl/2/date/week" data-i="0" id="music0" >
                <span>小型现场</span>
              </a>
              <a href="__URL__/fenlei/fl/3/date/week" data-i="1">
                <span>音乐会</span>
              </a>
              <a href="__URL__/fenlei/fl/4/date/week" data-i="2">
                <span>演唱会</span>
              </a>
              <a href="__URL__/fenlei/fl/14/date/week" data-i="3">
                <span>音乐节</span>
              </a>
        </div>
    </div>
  
	  <div class="bd" id='musicul'>
  <ul class="events-list events-list-2col events-list-pic70">
	<?php if(is_array($hdyy)): foreach($hdyy as $key=>$vo): ?><li class="list-entry">
      <div class="pic">
        <a tabindex="-1" href="__URL__/detail/event/<?php echo ($vo["id"]); ?>">
          <img alt=""  src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="70">
        </a>
      </div>
      <div class="info">
        <div class="title">
          <a href="__URL__/detail/event/<?php echo ($vo["id"]); ?>" title="<?php echo ($vo["title"]); ?>">
            <?php echo ($vo["title"]); ?>
            
          </a>
        </div>
        <div class="datetime">
          
    <span class="month"><?php echo ($vo["showtime"]); ?></span>

        </div>
        <address title="<?php echo ($vo["address"]); ?>">
         <?php echo ($vo["address"]); ?>
        </address>
        <div>
          <?php echo ($vo["love"]); ?>人关注
        </div>
      </div>
      </li><?php endforeach; endif; ?>
      
  </ul>
    </div>
	
	
	

  </div>

  
  <!--戏剧模块-->
  <div class="mod event-mod">
    <div class="hd">
      <h2>
        <span class="title">
        戏剧
        </span>
      </h2>
      <span class="pl rr">
        <a href="__URL__/fenlei/fl/drama">更多》</a>
      </span>
        <div class="tabs">
            <a class="on" href="">
              <span>最热</span>
            </a>
              <a href="__URL__/fenlei/fl/13/date/week" data-i="0">
                <span>话剧</span>
              </a>
              <a href="__URL__/fenlei/fl/18/date/week" data-i="1">
                <span>音乐剧</span>
              </a>
              <a href="__URL__/fenlei/fl/19/date/week" data-i="2">
                <span>舞剧</span>
              </a>
              <a href="__URL__/fenlei/fl/20/date/week" data-i="3">
                <span>歌剧</span>
              </a>
              <a href="__URL__/fenlei/fl/21/date/week" data-i="4">
                <span>戏曲</span>
              </a>
        </div>
    </div>
    
	
	<div class="bd">
	
    <ul class="events-list events-list-2col events-list-pic70">
	<?php if(is_array($hdxj)): foreach($hdxj as $key=>$vo): ?><li class="list-entry">
      <div class="pic">
        <a tabindex="-1" href="__URL__/detail/event/<?php echo ($vo["id"]); ?>">
          <img alt=""  src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="70">
        </a>
      </div>
      <div class="info">
        <div class="title">
          <a href="__URL__/detail/event/<?php echo ($vo["id"]); ?>" title="<?php echo ($vo["title"]); ?>">
            <?php echo ($vo["title"]); ?>
            
          </a>
        </div>
        <div class="datetime">
          
    <span class="month"><?php echo ($vo["showtime"]); ?></span>

        </div>
        <address title="<?php echo ($vo["address"]); ?>">
         <?php echo ($vo["address"]); ?>
        </address>
        <div>
          <?php echo ($vo["love"]); ?>人关注
        </div>
      </div>
      </li><?php endforeach; endif; ?>
      
  </ul>
 </div>
  </div>

  
  <!--聚会模块-->
  <div class="mod event-mod">
    <div class="hd">
      <h2>
        <span class="title">
        聚会
        </span>
      </h2>
      <span class="pl rr">
        <a href="__URL__/fenlei/fl/party">更多》</a>
      </span>
        <div class="tabs">
            <a class="on" href="">
              <span>最热</span>
            </a>
              <a href="__URL__/fenlei/fl/9/date/week" data-i="0">
                <span>生活</span>
              </a>
              <a href="__URL__/fenlei/fl/22/date/week" data-i="1">
                <span>摄影</span>
              </a>
              <a href="__URL__/fenlei/fl/11/date/week" data-i="2">
                <span>外语</span>
              </a>
              <a href="__URL__/fenlei/fl/27/date/week" data-i="3">
                <span>桌游</span>
              </a>
              <a href="__URL__/fenlei/fl/28/date/week" data-i="4">
                <span>交友</span>
              </a>
              <a href="__URL__/fenlei/fl/29/date/week" data-i="5">
                <span>夜店</span>
              </a>
              <a href="__URL__/fenlei/fl/30/date/week" data-i="6">
                <span>集市</span>
              </a>
        </div>
    </div>
    <div class="bd">
  <ul class="events-list events-list-2col events-list-pic70">
  <?php if(is_array($hdjh)): foreach($hdjh as $key=>$vo): ?><li class="list-entry">
      <div class="pic">
        <a tabindex="-1" href="__URL__/detail/event/<?php echo ($vo["id"]); ?>">
          <img alt=""  src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="70">
        </a>
      </div>
      <div class="info">
        <div class="title">
          <a href="__URL__/detail/event/<?php echo ($vo["id"]); ?>" title="<?php echo ($vo["title"]); ?>">
            <?php echo ($vo["title"]); ?>
            
          </a>
        </div>
        <div class="datetime">
          
    <span class="month"><?php echo ($vo["showtime"]); ?></span>

        </div>
        <address title="<?php echo ($vo["address"]); ?>">
          <?php echo ($vo["address"]); ?>
        </address>
        <div>
          <?php echo ($vo["love"]); ?>人关注
        </div>
      </div>
      </li><?php endforeach; endif; ?>
  </ul>





    </div>
  </div>



    <!-- douban ad begin -->
    <div id="dale_location_xiamen_home_left_bottom"></div>
    <!-- douban ad end -->
  
  
  <!--电影模块-->
  <div class="mod event-mod">
    <div class="hd">
      <h2>
        <span class="title">
        电影
        </span>
      </h2>
      <span class="pl rr">
        <a href="__URL__/fenlei/fl/film">更多》</a>
      </span>
        <div class="tabs">
            <a class="on" href="">
              <span>最热</span>
            </a>
              <a href="__URL__/fenlei/fl/24/date/week" data-i="0">
                <span>主题放映</span>
              </a>
              <a href="__URL__/fenlei/fl/25/date/week" data-i="1">
                <span>影展</span>
              </a>
              <a href="__URL__/fenlei/fl/26/date/week" data-i="2">
                <span>影院活动</span>
              </a>
        </div>
    </div>
    <div class="bd">
  <ul class="events-list events-list-2col events-list-pic70">
   <?php if(is_array($hddy)): foreach($hddy as $key=>$vo): ?><li class="list-entry">
      <div class="pic">
        <a tabindex="-1" href="__URL__/detail/event/<?php echo ($vo["id"]); ?>">
          <img alt=""  src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="70">
        </a>
      </div>
      <div class="info">
        <div class="title">
          <a href="__URL__/detail/event/<?php echo ($vo["id"]); ?>" title="<?php echo ($vo["title"]); ?>">
            <?php echo ($vo["title"]); ?>
            
          </a>
        </div>
        <div class="datetime">
          
    <span class="month"><?php echo ($vo["showtime"]); ?></span>

        </div>
        <address title="<?php echo ($vo["address"]); ?>">
          <?php echo ($vo["address"]); ?>
        </address>
        <div>
         <?php echo ($vo["love"]); ?>人关注
        </div>
      </div>
      </li><?php endforeach; endif; ?>
      
  </ul>
    </div>
  </div>



  
<!--讲座模块-->
  <div class="mod event-mod">
    <div class="hd">
      <h2>
        <span class="title">
        讲座
        </span>
      </h2>
      <span class="pl rr">
        <a href="__URL__/fenlei/fl/salon">更多》</a>
      </span>
    </div>
    <div class="bd">

  <ul class="events-list events-list-2col events-list-pic70">
  <?php if(is_array($hdjz)): foreach($hdjz as $key=>$vo): ?><li class="list-entry">
      <div class="pic">
        <a tabindex="-1" href="__URL__/detail/event/<?php echo ($vo["id"]); ?>">
          <img alt=""  src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="70">
        </a>
      </div>
      <div class="info">
        <div class="title">
          <a href="__URL__/detail/event/<?php echo ($vo["id"]); ?>" title="<?php echo ($vo["title"]); ?>">
            <?php echo ($vo["title"]); ?>
            
          </a>
        </div>
        <div class="datetime">
          
    <span class="month"><?php echo ($vo["showtime"]); ?></span>

        </div>
        <address title="<?php echo ($vo["address"]); ?>">
          <?php echo ($vo["address"]); ?>
        </address>
        <div>
          <?php echo ($vo["love"]); ?>人关注
        </div>
      </div>
      </li><?php endforeach; endif; ?>
    
  </ul>
    </div>
  </div>




<!--展览模块-->
  <div class="mod event-mod">
    <div class="hd">
      <h2>
        <span class="title">
        展览
        </span>
      </h2>
      <span class="pl rr">
        <a href="__URL__/fenlei/fl/exhibition">更多》</a>
      </span>
    </div>
    <div class="bd">
 
  <ul class="events-list events-list-2col events-list-pic70">
  <?php if(is_array($hdzl)): foreach($hdzl as $key=>$vo): ?><li class="list-entry">
      <div class="pic">
        <a tabindex="-1" href="__URL__/detail/event/<?php echo ($vo["id"]); ?>">
          <img alt="" src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="70">
        </a>
      </div>
      <div class="info">
        <div class="title">
          <a href="__URL__/detail/event/<?php echo ($vo["id"]); ?>" title="<?php echo ($vo["title"]); ?>">
            <?php echo ($vo["title"]); ?>
            
          </a>
        </div>
        <div class="datetime">
          
    <span class="month"><?php echo ($vo["showtime"]); ?></span>

        </div>
        <address title="<?php echo ($vo["address"]); ?>">
          <?php echo ($vo["address"]); ?>
        </address>
        <div>
          <?php echo ($vo["love"]); ?>人关注
        </div>
      </div>
      </li><?php endforeach; endif; ?>
  </ul>
    </div>
  </div>
  
  
  
  
  <!--其他模块-->
  <div class="mod event-mod">
    <div class="hd">
      <h2>
        <span class="title">
        其他
        </span>
      </h2>
      <span class="pl rr">
        <a href="__URL__/fenlei/fl/others">更多》</a>
      </span>
        <div class="tabs">
            <a class="on" href="">
              <span>最热</span>
            </a>
              <a href="__URL__/fenlei/fl/15/date/week" data-i="0">
                <span>运动</span>
              </a>
              <a href="__URL__/fenlei/fl/16/date/week" data-i="1">
                <span>公益</span>
              </a>
              <a href="__URL__/fenlei/fl/17/date/week" data-i="2">
                <span>旅行</span>
              </a>
        </div>
    </div>
    <div class="bd">
  <ul class="events-list events-list-2col events-list-pic70">
  <?php if(is_array($hdqt)): foreach($hdqt as $key=>$vo): ?><li class="list-entry">
      <div class="pic">
        <a tabindex="-1" href="__URL__/detail/event/<?php echo ($vo["id"]); ?>">
          <img alt=""  src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" width="70">
        </a>
      </div>
      <div class="info">
        <div class="title">
          <a href="__URL__/detail/event/<?php echo ($vo["id"]); ?>" title="<?php echo ($vo["title"]); ?>">
           <?php echo ($vo["title"]); ?>
            
          </a>
        </div>
        <div class="datetime">
          
    <span class="month"><?php echo ($vo["showtime"]); ?></span>

        </div>
        <address title="<?php echo ($vo["address"]); ?>">
          <?php echo ($vo["address"]); ?>
        </address>
        <div>
         <?php echo ($vo["love"]); ?>人关注
        </div>
      </div>
      </li><?php endforeach; endif; ?>
  
  </ul>
    </div>
  </div>
  
  </div>
        </div>
        <div class="aside">
                

  <div id="dale_location_home_top_right"><iframe src="__APP__/Ad/ad1/ads/ad1" style="overflow: hidden; margin: 0px 0px 20px;" id="dale_location_home_top_right_frame" frameborder="0" height="250" scrolling="no" width="300"></iframe>
  </div>

  <div class="hidden-sm">
    
  <div class="mod">
         
<a class="bn-big-action" rel="nofollow" href="__APP__/Fabu/index" target="_blanck">
  ＋发起聚活动     
</a>     

  </div>
  </div>
  <div id="dale_location_home_for_thinkpad"></div>


  <div class="mod event-mod">
    <div class="hd">
    <h2>
      <span class="pl rr">
        <a href="">更多》</a>
      </span>
      聚活动活跃的主办人
    </h2>
    </div>
    
<ul class="simple-list-1col">
    <li class="list-entry">
    <a target="db-host" class="ll" href="http://site.douban.com/144956/"><img alt="海西同心社" src="c55027200884513.jpg" height="48" width="48"></a>
    <div class="info">
      <p class="title"><a target="db-host" href="http://site.douban.com/144956/">海西同心社</a></p>
      <p class="tip">
      
      有<a target="db-host" href="http://site.douban.com/144956/widget/events/7170791/">1个活动</a>正在进行
      </p>
      <ul>
          <li>
          <a class="gloomy" href="http://www.douban.com/event/21437737/" title="【拱趴会】No.21 -- 八卦">[聚会] 【拱趴会】No.21 -- 八卦</a>
          </li>
      </ul>
    </div>
    </li>
    <li class="list-entry">
    <a target="db-host" class="ll" href="http://site.douban.com/dreamerhouse/"><img alt="梦旅人音乐客栈" src="f184b8625975112.jpg" height="48" width="48"></a>
    <div class="info">
      <p class="title"><a target="db-host" href="http://site.douban.com/dreamerhouse/">梦旅人音乐客栈</a></p>
      <p class="tip">
      
      有<a target="db-host" href="http://site.douban.com/dreamerhouse/widget/events/1317468/">6个活动</a>正在进行
      </p>
      <ul>
          <li>
          <a class="gloomy" href="http://www.douban.com/event/21347649/" title="5月10日 微笑的刀乐队(英国/墨西哥)厦门站演出@梦旅人音乐客栈">[音乐] 5月10日 微笑的刀乐队(英国/墨西...</a>
          </li>
          <li>
          <a class="gloomy" href="http://www.douban.com/event/21243542/" title="让我们听到你！——张艺德的个人音乐节厦门站（众筹中）">[音乐] 让我们听到你！——张艺德的个人...</a>
          </li>
      </ul>
    </div>
    </li>
    <li class="list-entry">
    <a target="db-host" class="ll" href="http://site.douban.com/152755/"><img alt="厦门谷吧" src="8fbb5174b5701f7.jpg" height="48" width="48"></a>
    <div class="info">
      <p class="title"><a target="db-host" href="http://site.douban.com/152755/">厦门谷吧</a></p>
      <p class="tip">
      
      有<a target="db-host" href="http://site.douban.com/152755/widget/events/13427818/">7个活动</a>正在进行
      </p>
      <ul>
          <li>
          <a class="gloomy" href="http://www.douban.com/event/21103655/" title="他是不是你见过最懂唱歌的服务员？">[音乐] 他是不是你见过最懂唱歌的服务员？</a>
          </li>
          <li>
          <a class="gloomy" href="http://www.douban.com/event/21103641/" title="让任何人都能像明星一样开演唱会">[音乐] 让任何人都能像明星一样开演唱会</a>
          </li>
      </ul>
    </div>
    </li>
</ul>

  </div>


  

  <!-- douban ad begin -->
  <div id="dale_location_home_bottom_right"><iframe src="__APP__/Ad/ad2/ads/ad2" style="overflow: hidden; margin: 0px 0px 20px;" id="dale_location_home_bottom_right_frame" frameborder="0" height="250" scrolling="no" width="300"></iframe></div>
  <!-- douban ad end -->

  

<!--更多发现-->




<div class="mod">
<p class="pl" style="font-size: 14px;">
<a target="_top" class="lnk-rss" href="http://www.douban.com/location/xiamen/events/feed/weekly">RSS</a>
&nbsp;
&nbsp;
&gt; <a href="http://help.douban.com/help/ask">我要提建议</a>
</p>
</div>

  <!-- douban app end -->

        </div>
        <div class="extra">           
        </div>
    </div>
</div>

      <!--底部-->
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
</body>
</html>