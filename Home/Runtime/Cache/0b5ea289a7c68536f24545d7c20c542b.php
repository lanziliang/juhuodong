<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN" class="ua-windows ua-ff29">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <meta name="renderer" content="webkit">

    <title><?php echo ($time); echo ($title); ?>活动</title>
    
  
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="Sun, 6 Mar 2005 01:00:00 GMT">
  
    <meta id="meta-viewport" name="viewport" content="width=980">

  
  <meta name="keywords" content="<?php echo ($time); echo ($title); ?>活动">
  <meta name="description" content="">

  


  

  

  
  
  

  


  
  

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/page.css" media="all">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/fenlei.css" media="all">
<link rel="stylesheet" href="__PUBLIC__/Js/jquery.calendar/css/jquery.cxcalendar.css">
<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
<script src="__PUBLIC__/Js/jquery.calendar/js/jquery-1.4.4.min.js"></script> 
    <script src="__PUBLIC__/Js/jquery.calendar/js/jquery.cxcalendar.js"></script>
<script>
function chooseclick(){
var c=document.getElementById ("chosedate");
c.style.display='inline';

}
function sure(){
var c=document.getElementById ("choosedate");
var d=c.value;

window.location.href="__URL__/fenlei/fl/<?php echo ($nowfl); ?>/date/free/choosedate/"+d; 

}
$(function(){
var a=document.getElementById ("h");
var b=document.getElementById ("t");
   
   $("#choosedate").cxCalendar({ 
			begin_year:2014, 
			end_year:2084, 
			type:"yyyy-mm-dd", 
			hyphen:"-", 
			wday:0 
			});
   
   
   if(a.innerHTML=='的账号')
   {
       a.innerHTML='登录';
       b.innerHTML='注册';
	   a.href="__APP__/Login/login";
	   b.href="__APP__/Register/register";
	   
   }

});
</script>
<style>


#choosedate{background:url(__PUBLIC__/Js/jquery.calendar/img/cxcalendar.png) no-repeat right center;cursor:pointer;}
</style>
<script>
$(function(){
if('<?php echo ($nowdt); ?>'=='future'){
var dt=document.getElementById ("future");
dt.innerHTML="<span>全部</span>";
}else if('<?php echo ($nowdt); ?>'=='today'){
var dt=document.getElementById ("today");
dt.innerHTML="<span>今天</span>";
}else if('<?php echo ($nowdt); ?>'=='tomorrow'){
var dt=document.getElementById ("tomorrow");
dt.innerHTML="<span>明天</span>";
}else if('<?php echo ($nowdt); ?>'=='weekend'){
var dt=document.getElementById ("weekend");
dt.innerHTML="<span>周末</span>";
}else if('<?php echo ($nowdt); ?>'=='week'){
var dt=document.getElementById ("week");
dt.innerHTML="<span>最近一周</span>";
}else if('<?php echo ($nowdt); ?>'=='free'){
var dt=document.getElementById ("free");
dt.innerHTML="<span><?php echo ($free); ?></span>";
var sss=document.getElementById ("chosedate");
sss.style.display='inline';
}
if('<?php echo ($fff); ?>'=='all')
  {var a=document.getElementById ("all");
  a.innerHTML="<span>全部</span>";
}else if('<?php echo ($fff); ?>'=='1'){
var b=document.getElementById ("music");
var b1=document.getElementById ("type2");
  b1.style.display="block";
  b.innerHTML="<span>音乐</span>";

}else if('<?php echo ($fff); ?>'=='12'){
var c=document.getElementById ("drama");
  c.innerHTML="<span>戏剧</span>";
 var c1=document.getElementById ("type2");
  c1.style.display="block";
}else if('<?php echo ($fff); ?>'=='8'){
var d=document.getElementById ("salon");
 d.innerHTML="<span>讲座</span>";

}else if('<?php echo ($fff); ?>'=='7'){
var e=document.getElementById ("party");
  e.innerHTML="<span>聚会</span>";
var e1=document.getElementById ("type2");
  e1.style.display="block";
}else if('<?php echo ($fff); ?>'=='23'){
var f=document.getElementById ("film");
  f.innerHTML="<span>电影</span>";
var f1=document.getElementById ("type2");
  f1.style.display="block";
}else if('<?php echo ($fff); ?>'=='31'){
var g=document.getElementById ("exhibition");
  g.innerHTML="<span>展览</span>";

}else if('<?php echo ($fff); ?>'=='15'){
var h=document.getElementById ("sports");
  h.innerHTML="<span>运动</span>";

}else if('<?php echo ($fff); ?>'=='16'){
var i=document.getElementById ("commonweal");
  i.innerHTML="<span>公益</span>";

}else if('<?php echo ($fff); ?>'=='17'){
var j=document.getElementById ("travel");
  j.innerHTML="<span>旅行</span>";

}else if('<?php echo ($fff); ?>'=='32'){
var k=document.getElementById ("others");
  k.innerHTML="<span>其他</span>";

}
else if('<?php echo ($ff); ?>'=='2'){
var b=document.getElementById ("music");
var b1=document.getElementById ("type2");
 b1.style.display="block";
  b.innerHTML="<span>音乐</span>";
var l=document.getElementById ("<?php echo ($ff); ?>");
  l.innerHTML="<span>小型现场</span>";
 var l2=document.getElementById ("tp2all");
  l2.innerHTML="<a href='__URL__/fenlei/fl/1/date/<?php echo ($nowdt); ?>'>全部</a>";
}
else if('<?php echo ($ff); ?>'=='3'){
var b=document.getElementById ("music");
var b1=document.getElementById ("type2");
 b1.style.display="block";
  b.innerHTML="<span>音乐</span>";
var l=document.getElementById ("<?php echo ($ff); ?>");
  l.innerHTML="<span>音乐会</span>";
 var l2=document.getElementById ("tp2all");
  l2.innerHTML="<a href='__URL__/fenlei/fl/1/date/<?php echo ($nowdt); ?>'>全部</a>";
}
else if('<?php echo ($ff); ?>'=='4'){
var b=document.getElementById ("music");
var b1=document.getElementById ("type2");
 b1.style.display="block";
  b.innerHTML="<span>音乐</span>";
var l=document.getElementById ("<?php echo ($ff); ?>");
  l.innerHTML="<span>演唱会</span>";
 var l2=document.getElementById ("tp2all");
  l2.innerHTML="<a href='__URL__/fenlei/fl/1/date/<?php echo ($nowdt); ?>'>全部</a>";
}
else if('<?php echo ($ff); ?>'=='14'){
var b=document.getElementById ("music");
var b1=document.getElementById ("type2");
 b1.style.display="block";
  b.innerHTML="<span>音乐</span>";
var l=document.getElementById ("<?php echo ($ff); ?>");
  l.innerHTML="<span>音乐节</span>";
 var l2=document.getElementById ("tp2all");
  l2.innerHTML="<a href='__URL__/fenlei/fl/1/date/<?php echo ($nowdt); ?>'>全部</a>";
}
else if('<?php echo ($ff); ?>'=='18'){
var b=document.getElementById ("drama");
var b1=document.getElementById ("type2");
 b1.style.display="block";
  b.innerHTML="<span>戏剧</span>";
var l=document.getElementById ("<?php echo ($ff); ?>");
  l.innerHTML="<span>音乐剧</span>";
 var l2=document.getElementById ("tp2all");
  l2.innerHTML="<a href='__URL__/fenlei/fl/12/date/<?php echo ($nowdt); ?>'>全部</a>";
}
else if('<?php echo ($ff); ?>'=='19'){
var b=document.getElementById ("drama");
var b1=document.getElementById ("type2");
 b1.style.display="block";
  b.innerHTML="<span>戏剧</span>";
var l=document.getElementById ("<?php echo ($ff); ?>");
  l.innerHTML="<span>舞剧</span>";
 var l2=document.getElementById ("tp2all");
  l2.innerHTML="<a href='__URL__/fenlei/fl/12/date/<?php echo ($nowdt); ?>'>全部</a>";
}
else if('<?php echo ($ff); ?>'=='20'){
var b=document.getElementById ("drama");
var b1=document.getElementById ("type2");
 b1.style.display="block";
  b.innerHTML="<span>戏剧</span>";
var l=document.getElementById ("<?php echo ($ff); ?>");
  l.innerHTML="<span>歌剧</span>";
 var l2=document.getElementById ("tp2all");
  l2.innerHTML="<a href='__URL__/fenlei/fl/12/date/<?php echo ($nowdt); ?>'>全部</a>";
}
else if('<?php echo ($ff); ?>'=='21'){
var b=document.getElementById ("drama");
var b1=document.getElementById ("type2");
 b1.style.display="block";
  b.innerHTML="<span>戏剧</span>";
var l=document.getElementById ("<?php echo ($ff); ?>");
  l.innerHTML="<span>戏曲</span>";
 var l2=document.getElementById ("tp2all");
  l2.innerHTML="<a href='__URL__/fenlei/fl/12/date/<?php echo ($nowdt); ?>'>全部</a>";
}
else if('<?php echo ($ff); ?>'=='13'){
var b=document.getElementById ("drama");
var b1=document.getElementById ("type2");
 b1.style.display="block";
  b.innerHTML="<span>戏剧</span>";
var l=document.getElementById ("<?php echo ($ff); ?>");
  l.innerHTML="<span>话剧</span>";
 var l2=document.getElementById ("tp2all");
  l2.innerHTML="<a href='__URL__/fenlei/23/date/<?php echo ($nowdt); ?>'>全部</a>";
}
else if('<?php echo ($ff); ?>'=='24'){
var b=document.getElementById ("film");
var b1=document.getElementById ("type2");
 b1.style.display="block";
  b.innerHTML="<span>电影</span>";
var l=document.getElementById ("<?php echo ($ff); ?>");
  l.innerHTML="<span>主题放映</span>";
 var l2=document.getElementById ("tp2all");
  l2.innerHTML="<a href='__URL__/fenlei/fl/23/date/<?php echo ($nowdt); ?>'>全部</a>";
}
else if('<?php echo ($ff); ?>'=='25'){
var b=document.getElementById ("film");
var b1=document.getElementById ("type2");
 b1.style.display="block";
  b.innerHTML="<span>电影</span>";
var l=document.getElementById ("<?php echo ($ff); ?>");
  l.innerHTML="<span>影展</span>";
 var l2=document.getElementById ("tp2all");
  l2.innerHTML="<a href='__URL__/fenlei/fl/23/date/<?php echo ($nowdt); ?>'>全部</a>";
}
else if('<?php echo ($ff); ?>'=='26'){
var b=document.getElementById ("film");
var b1=document.getElementById ("type2");
 b1.style.display="block";
  b.innerHTML="<span>电影</span>";
var l=document.getElementById ("<?php echo ($ff); ?>");
  l.innerHTML="<span>影院活动</span>";
 var l2=document.getElementById ("tp2all");
  l2.innerHTML="<a href='__URL__/fenlei/fl/23/date/<?php echo ($nowdt); ?>'>全部</a>";
}
else if('<?php echo ($ff); ?>'=='27'){
var b=document.getElementById ("party");
var b1=document.getElementById ("type2");
 b1.style.display="block";
  b.innerHTML="<span>聚会</span>";
var l=document.getElementById ("<?php echo ($ff); ?>");
  l.innerHTML="<span>桌游</span>";
 var l2=document.getElementById ("tp2all");
  l2.innerHTML="<a href='__URL__/fenlei/fl/7/date/<?php echo ($nowdt); ?>'>全部</a>";
}
else if('<?php echo ($ff); ?>'=='28'){
var b=document.getElementById ("party");
var b1=document.getElementById ("type2");
 b1.style.display="block";
  b.innerHTML="<span>聚会</span>";
var l=document.getElementById ("<?php echo ($ff); ?>");
  l.innerHTML="<span>交友</span>";
 var l2=document.getElementById ("tp2all");
  l2.innerHTML="<a href='__URL__/fenlei/fl/7/date/<?php echo ($nowdt); ?>'>全部</a>";
}
else if('<?php echo ($ff); ?>'=='29'){
var b=document.getElementById ("party");
var b1=document.getElementById ("type2");
 b1.style.display="block";
  b.innerHTML="<span>聚会</span>";
var l=document.getElementById ("<?php echo ($ff); ?>");
  l.innerHTML="<span>夜店</span>";
 var l2=document.getElementById ("tp2all");
  l2.innerHTML="<a href='__URL__/fenlei/fl/7/date/<?php echo ($nowdt); ?>'>全部</a>";
}
else if('<?php echo ($ff); ?>'=='30'){
var b=document.getElementById ("party");
var b1=document.getElementById ("type2");
 b1.style.display="block";
  b.innerHTML="<span>聚会</span>";
var l=document.getElementById ("<?php echo ($ff); ?>");
  l.innerHTML="<span>集市</span>";
 var l2=document.getElementById ("tp2all");
  l2.innerHTML="<a href='__URL__/fenlei/fl/7/date/<?php echo ($nowdt); ?>'>全部</a>";
}
else if('<?php echo ($ff); ?>'=='9'){
var b=document.getElementById ("party");
var b1=document.getElementById ("type2");
 b1.style.display="block";
  b.innerHTML="<span>聚会</span>";
var l=document.getElementById ("<?php echo ($ff); ?>");
  l.innerHTML="<span>生活</span>";
 var l2=document.getElementById ("tp2all");
  l2.innerHTML="<a href='__URL__/fenlei/fl/7/date/<?php echo ($nowdt); ?>'>全部</a>";
}
else if('<?php echo ($ff); ?>'=='22'){
var b=document.getElementById ("party");
var b1=document.getElementById ("type2");
 b1.style.display="block";
  b.innerHTML="<span>聚会</span>";
var l=document.getElementById ("<?php echo ($ff); ?>");
  l.innerHTML="<span>摄影</span>";
 var l2=document.getElementById ("tp2all");
  l2.innerHTML="<a href='__URL__/fenlei/fl/7/date/<?php echo ($nowdt); ?>'>全部</a>";
}
else if('<?php echo ($ff); ?>'=='11'){
var b=document.getElementById ("party");
var b1=document.getElementById ("type2");
 b1.style.display="block";
  b.innerHTML="<span>聚会</span>";
var l=document.getElementById ("<?php echo ($ff); ?>");
  l.innerHTML="<span>外语</span>";
 var l2=document.getElementById ("tp2all");
  l2.innerHTML="<a href='__URL__/fenlei/fl/7/date/<?php echo ($nowdt); ?>'>全部</a>";
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
        <a id="lnk-my-loc" href="__URL__/myhd/people/<?php echo ($uid); ?>">我的活动</a>
    </li>
	 <li><a href="__URL__/mydetail/people/<?php echo ($uid); ?>">我的主页</a></li>
      </ul>
  </div>
 
  </div>
  </div>
</div>





  

  <div id="wrapper" class="fwrap">
      
<div id="content">
    
  <h1>厦门<?php echo ($time); echo ($title); ?>活动</h1>

    <div class="grid-free clearfix">
        
        
        <div class="article">
               




<div id="db-events-list" class="mod event-mod event-mod-1col">
  <div class="hd">
    



<div class="events-nav">
    <div class="events-nav-item">
        <label class="events-nav-title">类型：</label>
        <ul>
                <li id="all"><a href="__URL__/fenlei/fl/all/date/<?php echo ($nowdt); ?>">
                    全部
                </a></li>
                <li id="music"><a href="__URL__/fenlei/fl/1/date/<?php echo ($nowdt); ?>">
                    音乐
                </a></li>
                <li id="drama"><a href="__URL__/fenlei/fl/12/date/<?php echo ($nowdt); ?>">
                    戏剧
                </a></li>
                <li id="salon"><a href="__URL__/fenlei/fl/8/date/<?php echo ($nowdt); ?>">
                    讲座
                </a></li>
                <li id="party"><a href="__URL__/fenlei/fl/7/date/<?php echo ($nowdt); ?>">
                    聚会
                </a></li>
                <li id="film"><a href="__URL__/fenlei/fl/23/date/<?php echo ($nowdt); ?>">
                    电影
                </a></li>
                <li id="exhibition"><a href="__URL__/fenlei/fl/31/date/<?php echo ($nowdt); ?>">
                    展览
                </a></li>
                <li id="sports"><a href="__URL__/fenlei/fl/15/date/<?php echo ($nowdt); ?>">
                    运动
                </a></li>
                <li id="commonweal"><a href="__URL__/fenlei/fl/16/date/<?php echo ($nowdt); ?>">
                    公益
                </a></li>
                <li id="travel"><a href="__URL__/fenlei/fl/17/date/<?php echo ($nowdt); ?>">
                    旅行
                </a></li>
                <li id="others"><a href="__URL__/fenlei/fl/32/date/<?php echo ($nowdt); ?>">
                    其他
                </a></li>
        </ul>
    </div>

    

        
        <div class="events-nav-item" id="type2" style="display:none;">
            <div class="events-filter-subtype">
                <ul>
                        <li id="tp2all"><span>全部</span></li>
						<?php if(is_array($ty2)): foreach($ty2 as $key=>$t): ?><li id="<?php echo ($t["c_id"]); ?>"><a href="__URL__/fenlei/fl/<?php echo ($t["c_id"]); ?>/date/<?php echo ($nowdt); ?>">
                            <?php echo ($t["c_name"]); ?>
                        </a></li><?php endforeach; endif; ?>
                </ul>
            </div>
        </div>

   

    <div class="events-nav-item">
        <label class="events-nav-title">时间：</label>
        <ul>
            
                <li id="future"><a  href="__URL__/fenlei/fl/<?php echo ($nowfl); ?>/date/future">
                    全部
					</a>
                </li>
                <li id="today"><a  href="__URL__/fenlei/fl/<?php echo ($nowfl); ?>/date/today">
                    今天
                </a></li>
                <li id="tomorrow"><a  href="__URL__/fenlei/fl/<?php echo ($nowfl); ?>/date/tomorrow">
                    明天
                </a></li>
                <li id="weekend"><a  href="__URL__/fenlei/fl/<?php echo ($nowfl); ?>/date/weekend">
                    周末
                </a></li>
                <li id="week"><a  href="__URL__/fenlei/fl/<?php echo ($nowfl); ?>/date/week">最近一周</a></li>

            <li data-url="http://www.douban.com/location/xiamen/events/week-music" id="free">
                <a id="choose-date" href="javascript:void(0);" onclick="chooseclick()">选择日期</a></li><div id="chosedate" style="display:none"  ><input type="text"  size="12" id="choosedate" name="choosedate" readonly /><button onclick="sure()"  >确定</button></div>
        </ul>
    </div>
</div>





  </div>
  <p class="no-result" align="center"><?php echo ($tishi); ?></p>
  <ul class="events-list events-list-pic100 events-list-psmall">
  <?php if(is_array($hd)): foreach($hd as $key=>$vo): ?><li class="list-entry" itemscope="" itemtype="http://data-vocabulary.org/Event">
      <div class="pic">
        <a href="__URL__/detail/event/<?php echo ($vo["id"]); ?>">
          <img  src="__PUBLIC__/Uploads/<?php echo ($vo["image"]); ?>" itemprop="photo" width="110">
        </a>
      </div>
      <div class="info">
        <div class="title">
          <a href="__URL__/detail/event/<?php echo ($vo["id"]); ?>" title="<?php echo ($vo["title"]); ?>" itemprop="url">
            <span itemprop="summary"><?php echo ($vo["title"]); ?></span>
          </a>
        </div>
        
          <!--<p class="event-cate-tag hidden-xs">
            <a href="http://www.douban.com/event/search?loc=xiamen&amp;search_text=%E6%B0%91%E6%97%8F&amp;p=week">民族</a>&nbsp;
            <a href="http://www.douban.com/event/search?loc=xiamen&amp;search_text=reallive&amp;p=week">reallive</a>&nbsp;
          </p>-->
        <ul class="event-meta">
          <li class="event-time">
          <span class="hidden-xs">时间：</span>
            
            <?php echo ($vo["showtime"]); ?>
            <time itemprop="startDate" datetime="2014-05-23T21:30:00"></time>
            <time itemprop="endDate" datetime="2014-05-23T23:30:00"></time>
          </li>
          <li title="<?php echo ($vo["address"]); ?>"">
            <span class="hidden-xs">地点：</span>
             <?php echo ($vo["address"]); ?>
             <meta itemscope="" itemprop="location" content="<?php echo ($vo["address"]); ?>"">
               
               <span itemprop="geo" itemscope="" itemtype="http://data-vocabulary.org/​Geo">
                  <meta itemprop="latitude" content="24.442305">
                  <meta itemprop="longitude" content="118.098991">
               </span>
          </li>
          <li class="fee">
            
              <span class="hidden-xs">费用：</span>
              <strong><?php echo ($vo["money"]); ?></strong>
          </li>
          <li>
            <span class="meta-title">发起：</span>
            <a target="db-event-owner" href="__URL__/myhd/people/<?php echo ($vo["uid"]); ?>"><?php echo ($vo["name"]); ?></a>
          </li>
        </ul>
        <p class="counts">
            <span><?php echo ($vo["love"]); ?>人感兴趣</span> 
        </p>
      </div>
      </li><?php endforeach; endif; ?>
     
  </ul>
  

  
    
    

    
        <div class="paginator">
          <?php echo ($page); ?>
        </div>


</div>








        </div>
        <div class="aside">
                

  <!-- douban ad begin -->
  <div id="dale_event_list_by_city_top_right"><iframe src="__APP__/Ad/ad4/ads/ad4" style="overflow: hidden; margin: 0px 0px 20px;" scrolling="no" id="dale_event_list_by_city_top_right_frame" frameborder="0" height="250" width="300"></iframe></div>
  <!-- douban ad end -->

  
  <div class="mod">
  
  
       
<a class="bn-big-action" rel="nofollow" href="__APP__/Fabu/index">
  ＋发起同城活动     
</a>     






  </div>
  
  







  







  <div class="mod event-mod">
    <div class="hd">
    <h2>
      <span class="pl rr">
        <a href="http://www.douban.com/location/xiamen/hosts/active">更多》</a>
      </span>
      厦门活跃的主办方
    </h2>
    </div>
    
<ul class="simple-list-1col">
    <li class="list-entry">
    <a target="db-host" class="ll" href="http://site.douban.com/dreamerhouse/"><img alt="梦旅人音乐客栈" src="f184b8625975112.jpg" height="48" width="48"></a>
    <div class="info">
      <p class="title"><a target="db-host" href="http://site.douban.com/dreamerhouse/">梦旅人音乐客栈</a></p>
      <p class="tip">
      
      有<a target="db-host" href="http://site.douban.com/dreamerhouse/widget/events/1317468/">4个活动</a>正在进行
      </p>
    </div>
    </li>
    <li class="list-entry">
    <a target="db-host" class="ll" href="http://site.douban.com/144956/"><img alt="海西同心社" src="c55027200884513.jpg" height="48" width="48"></a>
    <div class="info">
      <p class="title"><a target="db-host" href="http://site.douban.com/144956/">海西同心社</a></p>
      <p class="tip">
      
      有<a target="db-host" href="http://site.douban.com/144956/widget/events/7170791/">2个活动</a>正在进行
      </p>
    </div>
    </li>
    <li class="list-entry">
    <a target="db-host" class="ll" href="http://site.douban.com/ccfpekin/"><img alt="法国文化中心" src="e06bd77b280735a.jpg" height="48" width="48"></a>
    <div class="info">
      <p class="title"><a target="db-host" href="http://site.douban.com/ccfpekin/">法国文化中心</a></p>
      <p class="tip">
      
      有<a target="db-host" href="http://site.douban.com/ccfpekin/widget/events/113073/">1个活动</a>正在进行
      </p>
    </div>
    </li>
</ul>

  </div>

  <div class="mod">
    <p class="pl" style="font-size: 14px;">
    <a style="background: none repeat scroll 0% 0% rgb(255, 255, 255); color: rgb(102, 102, 102);" href="http://www.douban.com/location/xiamen/events/feed/weekly">
      <span class="feed" style="color: rgb(1, 146, 181);">RSS</span> 订阅同城活动</a>
    </p>
  </div>

        </div>
        <div class="extra">
            
    <!-- douban ad begin -->
    <div id="dale_events_week_all_bottom_banner"><iframe src="__APP__/Ad/ad5/ads/ad5" style="overflow: hidden; margin: 0px;" scrolling="no" id="dale_events_week_all_bottom_banner_frame" frameborder="0" height="90" width="950"></iframe></div>
    <!-- douban ad end -->

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
  
  
<!-- douban ad begin -->





    











<!-- douban ad end -->

  
    










  <!-- dis17-->
  

  





<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body>
</html>