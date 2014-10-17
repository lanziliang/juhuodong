<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN" class="ua-windows ua-ff28">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="renderer" content="webkit">
    <title>
<?php echo ($hd["title"]); ?>
</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/detail.css" media="all">
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
<script type="text/javascript" src="__PUBLIC__/Js/share.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/Base.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/prototype.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/mootools.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/Ajax/ThinkAjax.js"></script>

<script>
	
function Generate_Brief(text,length){ 

if(text.length < length) return text; 
var Foremost = text.substr(0,length); 
var re = /<(\/?) 
(BODY|SCRIPT|P|DIV|H1|H2|H3|H4|H5|H6|ADDRESS|PRE|TABLE|TR|TD|TH|INPUT|SELECT|TEXTAREA|OBJECT 
|A|UL|OL|LI|BASE|META|LINK|HR|BR|PARAM|IMG|AREA|INPUT|SPAN)[^>]*(>?)/ig; 

var Singlable = /BASE|META|LINK|HR|BR|PARAM|IMG|AREA|INPUT/i 
var Stack = new Array(), posStack = new Array(); 
while(true){ 
var newone = re.exec(Foremost); 
if(newone == null) break; 

if(newone[1] == ""){ 
var Elem = newone[2]; 
if(Elem.match(Singlable) && newone[3]!= ""){ 
continue; 
} 
Stack.push(newone[2].toUpperCase()); 
posStack.push(newone.index); 

if(newone[3] == "") break; 
}else{ 
var StackTop = Stack[Stack.length-1]; 
var End = newone[2].toUpperCase(); 
if(StackTop == End){ 
Stack.pop(); 
posStack.pop(); 
if(newone[3] == ""){ 
Foremost = Foremost+">"; 
} 
} 

}; 
} 
var cutpos = posStack.shift(); 
Foremost = Foremost.substring(0,cutpos); 

return Foremost; 
} 
</script>
<script language="JavaScript">


	 function dolove(name,result){
	 
	 if(<?php echo ($uid); ?>!=0){
	 
	     
		 ThinkAjax.sendForm(name,'__APP__/Huodong/love',complete,result);
		 }else{
		   window.location.href='__APP__/Login/login';
		 }
	}
	function complete(data,status){
	if (status==0)
  {

    
  }else{
   var a=document.getElementById("a");
   
   a.innerHTML = data;
      var a1=document.getElementById("a1");
   
   a1.innerHTML = data;
   
  
 
  }
	}
	function dodetail(){
	var a=document.getElementById ("foldDescHook");
	var d2=document.getElementById ("detail");
	var d1=document.getElementById ("mindetail");
	if(a.innerHTML=="展开&gt;&gt;"){
	a.innerHTML="收起&lt;&lt;";
	d1.style.display='none';
	d2.style.display='block';
	
	}else{
	a.innerHTML="展开&gt;&gt;";
	d2.style.display='none';
	d1.style.display='block';
	}
	
	}
 
	</script>

</head>
<body>
<!--头部欢迎你，某某某-->
<div id="db-global-nav" class="global-nav">
  <div class="bd">   
	<div class="top-nav-info">
    <span class="perf-metric"><!-- _performtips_ --></span>
    <ul>
       <li class="nav-user-account">
       <a id="h" href="__URL__/myhd/people/<?php echo ($uid); ?>" class="bn-more"><?php echo ($name); ?>的账号</a><a id="t"  href="__APP__/Login/doLogout">退出</a>
       </li>
     </ul>
	</div>
  </div>
</div>

<!--导航栏及搜索-->
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

    <div class="grid-free clearfix">                
        <div class="article">
<div class="eventwrap" itemscope="" itemtype="http://data-vocabulary.org/Event">
    <div class="poster">
      <a href="">
        <img id="poster_img" itemprop="image" src="__PUBLIC__/Uploads/<?php echo ($hd["image"]); ?>" title="点击查看大图" height="260" width="175">
      </a>   
    </div>
    <div id="event-info">
        <div class="event-info">
            <h1 itemprop="summary"><?php echo ($hd["title"]); ?><span>&nbsp;&nbsp;<?php echo ($hdover); ?></span></h1> 
            <div class="event-detail">
                <span class="pl">时间:&nbsp;&nbsp;</span>  
  <ul class="calendar-strs ">     
      <li class="calendar-str-item "><?php echo ($hd["showtime"]); ?>&nbsp;&nbsp;<?php echo ($hd["week"]); ?>&nbsp;&nbsp;<?php echo ($hd["hdstart"]); ?> - <?php echo ($hd["hdend"]); ?></li>
  </ul>
                <time itemprop="startDate" datetime="2014-05-17T19:30:00"></time>
                <time itemprop="endDate" datetime="2014-05-18T21:30:00"></time>
            </div>
            <div class="event-detail" itemprop="location" itemscope="" itemtype="http://data-vocabulary.org/Organization">
                <span class="pl">地点:&nbsp;</span>
    <span itemprop="address" itemscope="" itemtype="http://data-vocabulary.org/Address" class="micro-address">
         <span itemprop="region" class="micro-address"><?php echo ($hd["address"]); ?></span>
         
    </span>
    <span itemprop="geo" itemscope="" itemtype="http://data-vocabulary.org/Geo" class="micro-address">
        <meta itemprop="latitude" content="24.473829">
        <meta itemprop="longitude" content="118.189346">
    </span>
            </div>
            <div class="event-detail">
                  <span class="pl">费用:&nbsp;&nbsp;</span><?php echo ($hd["money"]); ?>
            </div>
            <div class="event-detail">
                <span class="pl">类型:&nbsp;&nbsp;</span><a href="__URL__/fenlei/fl/<?php echo ($fl); ?>/date/future" itemprop="eventType"><?php echo ($hd["c_name"]); ?></a>
            </div>
            <div class="event-detail" itemscope="" itemtype="http://data-vocabulary.org/Organization">
                
                <span class="pl">发起人:</span>
                <a href="__URL__/myhd/people/<?php echo ($hd["uid"]); ?>" target="_top" itemprop="name"><?php echo ($hd["username"]); ?></a>
            </div>
            <div class="interest-attend pl">
                <span class="num" id='a'><?php echo ($hd["love"]); ?></span><span>人感兴趣</span><span id='ts'></span> 
            </div>
        </div>
        <div id="event-act">
		<form action="" method="post" id="<?php echo ($hd["id"]); ?>">
			<input type="hidden" value="<?php echo ($hd["id"]); ?>" name="id" />
			<input type="hidden" value="<?php echo ($uid); ?>" name="uid" />
			<input type="hidden" value="<?php echo ($hd["uid"]); ?>" name="hduid" />
			
			</form>
    <a data-interest="wish" class=" redbutt"  href="javascript:void(0)" onclick="dolove('<?php echo ($hd["id"]); ?>','ts')" rel="nofollow" ><span>我感兴趣</span></a>        
  
      <div class="loading"></div>
        </div>        
   
   <div class="event-spread">
    
      <ul class="inline-list">
          <li >
		  <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>&nbsp;</div>



</li>
 
      </ul>
    </div>
    </div>
</div>

<div class="related_info">

<!--活动详情-->
<div class="mod" id="link-report">
  <h2>活动详情</h2>   
    <div id="edesc_s" class="wr"><div id="mindetail" style="display: block;"><pre><?php echo ($hd["mindetail"]); ?></pre></div><div id="detail" style="display: none;"><pre><?php echo ($hd["detail"]); ?></pre></div><a href="javascript:void(0);" id="foldDescHook" onclick="dodetail()">展开>></a> 
    </div>
</div>




<div class="mod">
    <h2>给发起人留言</h2>
    <div class="indent">
        <span>
          
    <a class="redbutt  ll" href="" rel="nofollow"><span>第一个在本活动给发起人留言</span></a>

        </span>
        <div class="clear"></div>
    </div>
</div>


</div>
        </div>
        <div class="aside">

  <!-- 右边广告 -->
  <div id="dale_event_page_top_right"><iframe src="__APP__/Ad/ad3/ads/ad3" style="overflow: hidden; margin: 0px 0px 20px;" id="dale_event_page_top_right_frame" frameborder="0" height="250" scrolling="no" width="300"></iframe>
  </div>
<!--活动相关标签-->
  <div class="crow">
  <div class="mod col-sm-6 col-lg-12 col-xs-12">
    <h2>活动相关标签 &nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;·</h2>
    <ul class="aside-event-tags">
        <li><a href="#">舞剧</a>&nbsp;</li>
            · &nbsp;
        <li><a href="#">小美人鱼</a>&nbsp;</li>
            · &nbsp;
        <li><a href="#">永乐票务</a>&nbsp;</li>
    </ul>
  </div>
    <div id="dale_event_page_for_thinkpad">
    </div>


     

<!--活动成员-->
<div class="mod col-sm-6 col-md-12 col-xs-12">
    <h2>对此活动感兴趣成员(<a href="__URL__/gxq/event/<?php echo ($hd["id"]); ?>"><span id='a1'><?php echo ($hd["love"]); ?></span>人感兴趣</a>
            )</span></h2>
    <ul class="member_photo">  
	<?php if(is_array($lover)): foreach($lover as $key=>$vo): ?><li class="">
            <a href="__URL__/myhd/people/<?php echo ($vo["uid"]); ?>"><img src="__PUBLIC__/avatar/<?php echo ($vo["userdetail"]["image"]); ?>_30.jpg" alt="<?php echo ($vo["username"]); ?>" width="35"></a>
            
        </li><?php endforeach; endif; ?>
        
    </ul>
</div>


  </div>
  <!-- douban app begin -->
<div class="mobile-app-entrance block5 app-location">

    <a id="" class="entrance-link first-link" href="http://www.douban.com/mobile/location">
        <span class="app-icon icon-location"></span>
        <span class="main-title">聚活动客户端</span>
        <span class="sub-title">发现精彩活动，探索多彩生活</span>
    </a>
</div>

  <!-- douban app end -->
  
<!-- douban ad begin -->
<div id="dale_event_page_bottom_right"><iframe src="__APP__/Ad/ad4/ads/ad4" style="overflow: hidden; margin: 0px 0px 20px;" id="dale_event_page_bottom_right_frame" frameborder="0" height="250" scrolling="no" width="300"></iframe></div>

<!-- douban ad end -->


        </div>
        <div class="extra">
            
  
<!-- douban ad begin -->


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
    <a href="#">关于聚活动</a>
    · <a href="#">联系我们</a>   
    · <a href="#">帮助中心</a>
</span>
    </div>
  </div>
  </div>

</body>

</html>