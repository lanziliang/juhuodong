<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN" class="ua-windows ua-ff28">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="renderer" content="webkit">
<title>创建聚活动</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/fabu.css" media="all">

<link rel="stylesheet" href="__PUBLIC__/Js/jquery.calendar/css/jquery.cxcalendar.css">
<script type="text/javascript" src="__PUBLIC__/Js/fabu.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
		<script src="__PUBLIC__/Js/jquery.calendar/js/jquery-1.4.4.min.js"></script> 
    <script src="__PUBLIC__/Js/jquery.calendar/js/jquery.cxcalendar.js"></script>
	<script>
	$(function(){
	
			$("#hdtime").cxCalendar({ 
			begin_year:2014, 
			end_year:2084, 
			type:"yyyy-mm-dd", 
			hyphen:"-", 
			wday:0 
			});
			$("#hdtime3").cxCalendar({ 
			begin_year:2014, 
			end_year:2084, 
			type:"yyyy-mm-dd", 
			hyphen:"-", 
			wday:0 
			});
			$("#hdtime4").cxCalendar({ 
			begin_year:2014, 
			end_year:2084, 
			type:"yyyy-mm-dd", 
			hyphen:"-", 
			wday:0 
			});
			$("#hdtime5").cxCalendar({ 
			begin_year:2014, 
			end_year:2084, 
			type:"yyyy-mm-dd", 
			hyphen:"-", 
			wday:0 
			});
			$("#hdtime6").cxCalendar({ 
			begin_year:2014, 
			end_year:2084, 
			type:"yyyy-mm-dd", 
			hyphen:"-", 
			wday:0 
			});
			});
			
	
	</script>
<script>

$(function(){
var a=document.getElementById ("title");
var b=document.getElementById ("street_address");
var c=document.getElementById ("desc");
$('input[name="title"]').blur(function(){
if(a.value=='')
				{
					$('#umessage1').remove();
					
					$('input[name="title"]').after('<font id="umessage1" style="color:red">请输入活动标题</font> ');
				}else{
				$('#umessage1').remove();
						
					
				}
});
$('textarea[name="detail"]').blur(function(){
if(c.value=='')
				{
					$('#umessage4').remove();
					
					$('textarea[name="detail"]').after('<font id="umessage4" style="color:red">请写下活动详情</font> ');
				}else{
				$('#umessage4').remove();
						
					
				}
});
$('input[name="address"]').blur(function(){
if(b.value=='')
				{
					$('#umessage2').remove();
					$('#umessage3').remove();
					$('input[name="address"]').after('<font id="umessage2" style="color:red">请输入活动地址</font> ');
				}else{
				$('#umessage2').remove();
						$('#umessage3').remove();
					
				}
});
$('input[name="address"]').focus(function(){
        
					$('#umessage3').remove();
					$('#umessage2').remove();
					$('input[name="address"]').after('<font id="umessage3" style="color:gray">详细地址</font> ');
				
});
$('input[name="tags"]').focus(function(){
        
					
					$('#umessage5').remove();
					$('input[name="tags"]').after('<font id="umessage5" style="color:gray">多个标签用空格区分</font> ');
				
});
$('input[name="tags"]').blur(function(){

				
					
					$('#umessage5').remove();
					
				
});
$('input[name="money1"]').blur(function(){

				if(this.value==''){
					
					$('#umessage7').remove();
					$('#addFeeHook').after('<font id="umessage7" style="color:red">请填写价格</font> ');
					
					
					}else{
					if(isNaN(this.value)){
					$('#umessage7').remove();
					$('#addFeeHook').after('<font id="umessage7" style="color:red">价格必须是数字</font> ');
					
					}else{
					
					
					$('#umessage7').remove();
					
					}
					
					}
					
				
});
	$('input[name="money2"]').blur(function(){

				if(this.value==''){
					
					$('#umessage7').remove();
					$('#addFeeHook').after('<font id="umessage7" style="color:red">请填写价格</font> ');
					
					
					}else{
					if(isNaN(this.value)){
					$('#umessage7').remove();
					$('#addFeeHook').after('<font id="umessage7" style="color:red">价格必须是数字</font> ');
					
					}else{
					$('#umessage7').remove();
					
					}
					
					}
					
				
});	
	$('input[name="money3"]').blur(function(){

				if(this.value==''){
					
					$('#umessage7').remove();
					$('#addFeeHook').after('<font id="umessage7" style="color:red">请填写价格</font> ');
					
					
					}else{
					if(isNaN(this.value)){
					$('#umessage7').remove();
					$('#addFeeHook').after('<font id="umessage7" style="color:red">价格必须是数字</font> ');
					
					}else{
					$('#umessage7').remove();
					
					}
					
					}
					
				
});		
$('input[name="money4"]').blur(function(){

				if(this.value==''){
					
					$('#umessage7').remove();
					$('#addFeeHook').after('<font id="umessage7" style="color:red">请填写价格</font> ');
					
					
					}else{
					if(isNaN(this.value)){
					$('#umessage7').remove();
					$('#addFeeHook').after('<font id="umessage7" style="color:red">价格必须是数字</font> ');
					
					}else{
					$('#umessage7').remove();
					
					}
					
					}
					
				
});
$('input[name="money5"]').blur(function(){

				if(this.value==''){
					
					$('#umessage7').remove();
					$('#addFeeHook').after('<font id="umessage7" style="color:red">请填写价格</font> ');
					
					
					}else{
					if(isNaN(this.value)){
					$('#umessage7').remove();
					$('#addFeeHook').after('<font id="umessage7" style="color:red">价格必须是数字</font> ');
					
					}else{
					$('#umessage7').remove();
					
					}
					
					}
					
				
});
$('input[name="money6"]').blur(function(){

				if(this.value==''){
					
					$('#umessage7').remove();
					$('#addFeeHook').after('<font id="umessage7" style="color:red">请填写价格</font> ');
					
					
					}else{
					if(isNaN(this.value)){
					$('#umessage7').remove();
					$('#addFeeHook').after('<font id="umessage7" style="color:red">价格必须是数字</font> ');
					
					}else{
					$('#umessage7').remove();
					
					}
					
					}
					
				
});
$('input[name="money7"]').blur(function(){

				if(this.value==''){
					
					$('#umessage7').remove();
					$('#addFeeHook').after('<font id="umessage7" style="color:red">请填写价格</font> ');
					
					
					}else{
					if(isNaN(this.value)){
					$('#umessage7').remove();
					$('#addFeeHook').after('<font id="umessage7" style="color:red">价格必须是数字</font> ');
					
					}else{
					$('#umessage7').remove();
					
					}
					
					}
					
				
});
$('input[name="money8"]').blur(function(){

				if(this.value==''){
					
					$('#umessage7').remove();
					$('#addFeeHook').after('<font id="umessage7" style="color:red">请填写价格</font> ');
					
					
					}else{
					if(isNaN(this.value)){
					$('#umessage7').remove();
					$('#addFeeHook').after('<font id="umessage7" style="color:red">价格必须是数字</font> ');
					
					}else{
					$('#umessage7').remove();
					
					}
					
					}
					
				
});
		$('input[name="money9"]').blur(function(){

				if(this.value==''){
					
					$('#umessage7').remove();
					$('#addFeeHook').after('<font id="umessage7" style="color:red">请填写价格</font> ');
					
					
					}else{
					if(isNaN(this.value)){
					$('#umessage7').remove();
					$('#addFeeHook').after('<font id="umessage7" style="color:red">价格必须是数字</font> ');
					
					}else{
					$('#umessage7').remove();
					
					}
					
					}
					
				
});
		});
</script>
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

<style>


#hdtime,#hdtime2,#hdtime3,#hdtime4,#hdtime5,#hdtime6{background:url(__PUBLIC__/Js/jquery.calendar/img/cxcalendar.png) no-repeat right center;cursor:pointer;}
</style>

</head>
<body>
<!--头部欢迎你，某某某-->
<div id="db-global-nav" class="global-nav">
  <div class="bd">
    <div class="top-nav-info"> <span class="perf-metric"><!-- _performtips_ --></span>
      <ul>
       <li class="nav-user-account">
       <div><a id="h"  href="__APP__/Index/myhd/people/<?php echo ($uid); ?>" class="bn-more"><?php echo ($name); ?>的账号</a><a id="t"  href="__APP__/Login/doLogout">退出</a></div>
       
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
      <div class="nav-logo"><img src="__PUBLIC__/Images/home_logo.png" onclick="javascript:window.location.href='__APP__/Index/index'" style="cursor:pointer" /> </div>
      <div class="nav-items nav-logged-in">
        <ul>
          <li>
        <a href="__APP__/Index/fenlei/fl/all">本地活动</a>
    </li>
     
    <li>
        <a  href="__APP__/Index/myhd/people/<?php echo ($uid); ?>">我的活动</a>
    </li>
	<li><a href="__APP__/Index/mydetail/people/<?php echo ($uid); ?>">我的主页</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="wrapper" class="fwrap">
  <div id="content">
    <h1>创建聚活动</h1>
	
    <div class="grid-free clearfix">
      <div class="article">
        <div class="nav-step"> <span >填写活动信息</span></div>
        <form id="eform" name="lzform" action="__URL__/doFabu" method="post" enctype="multipart/form-data" >
        <div id="number1" style="display:block">
          <div style="display: none;">
            <input name="ck" value="l2n8" type="hidden">
          </div>
          <input name="extend_params" value="{}" type="hidden">
          <div class="row">
            <label for="type" class="field">活动分类<em class="man">*</em></label>
            <div class="item has-error">
              <select id="type" class="basic-input" name="type" onChange="change(this)">
                <option value="00">请选择</option>
				<?php if(is_array($type)): foreach($type as $key=>$vo): ?><option value="<?php echo ($vo["c_id"]); ?>"><?php echo ($vo["c_name"]); ?></option><?php endforeach; endif; ?>
              </select>
              <select id="subtype_12" class="basic-input hide" name="type2" onChange="spa(this)">
                <option value="0">请选择</option>
                <?php if(is_array($type12)): foreach($type12 as $key=>$vo): ?><option value="<?php echo ($vo["c_id"]); ?>"><?php echo ($vo["c_name"]); ?></option><?php endforeach; endif; ?>
              </select>
              <select id="subtype_1" class="basic-input hide" name="type3" onChange="spa(this)">
                <option value="0">请选择</option>
				<?php if(is_array($type1)): foreach($type1 as $key=>$vo): ?><option value="<?php echo ($vo["c_id"]); ?>"><?php echo ($vo["c_name"]); ?></option><?php endforeach; endif; ?>
              </select>
              <select id="subtype_7" class="basic-input hide" name="type4" onChange="spa(this)">
                <option value="0">请选择</option>
                <?php if(is_array($type7)): foreach($type7 as $key=>$vo): ?><option value="<?php echo ($vo["c_id"]); ?>"><?php echo ($vo["c_name"]); ?></option><?php endforeach; endif; ?>
              </select>
              <select id="subtype_23" class="basic-input hide" name="type5" onChange="spa(this)">
                <option value="0">请选择</option>
                <?php if(is_array($type23)): foreach($type23 as $key=>$vo): ?><option value="<?php echo ($vo["c_id"]); ?>"><?php echo ($vo["c_name"]); ?></option><?php endforeach; endif; ?>
              </select>
              <select id="subtype" class="basic-input hide" name="subtype">
              </select>
              <span style="display: inline;" class="validate-error">请选择活动类型</span></div>
          </div>
          <div class="row row-title">
            <label for="title" class="field">活动标题<em class="man">*</em></label>
            <div class="item">
              <input id="title" value="" class="basic-input " maxlength="70" name="title" size="64" type="text">
            </div>
          </div>
          
		  <div class="row" id="eventTimeHook">
            <label for="time" class="field">活动时间<em class="man">*</em></label>
            <div class="item">
              <select id="repeat_type" name="repeat_type" class="basic-input" onChange="typechange(this)">
                <option value="0" selected="">当天结束</option>
                <option value="1">连续多天</option>
                <option value="2">每周举行</option>
              </select>
              
            </div>
            <div> 
              <!--当天结束-->
              <div style="display:block;" id="evnetDateOnedayHook" class="item inner-back hide">
                <!--<input placeholder="活动日期" class="basic-input event_calendar hasDatepicker" id="one_begin_day" size="12" value="" type="text"  readonly>-->
                <input  id="hdtime" name="hdtime" type="text" class="basic-input event_calendar hasDatepicker"  readonly>
               
                <select  id="hdstart" name="hdstart" class="basic-input editable-select" style="width: 110px;">
                  <option value="开始时间" selected="">开始时间</option>
                  <option value="08:00">08:00</option>
                  <option value="08:30">08:30</option>
                  <option value="09:00">09:00</option>
                  <option value="09:30">09:30</option>
                  <option value="10:00">10:00</option>
                  <option value="10:30">10:30</option>
                  <option value="11:00">11:00</option>
                  <option value="11:30">11:30</option>
                  <option value="12:00">12:00</option>
                  <option value="12:30">12:30</option>
                  <option value="13:00">13:00</option>
                  <option value="13:30">13:30</option>
                  <option value="14:00">14:00</option>
                  <option value="14:30">14:30</option>
                  <option value="15:00">15:00</option>
                  <option value="15:30">15:30</option>
                  <option value="16:00">16:00</option>
                  <option value="16:30">16:30</option>
                  <option value="17:00">17:00</option>
                  <option value="17:30">17:30</option>
                  <option value="18:00">18:00</option>
                  <option value="18:30">18:30</option>
                  <option value="19:00">19:00</option>
                  <option value="19:30">19:30</option>
                  <option value="20:00">20:00</option>
                  <option value="20:30">20:30</option>
                  <option value="21:00">21:00</option>
                  <option value="21:30">21:30</option>
                  <option value="22:00">22:00</option>
                  <option value="22:30">22:30</option>
                  <option value="23:00">23:00</option>
                  <option value="23:30">23:30</option>
                 
                </select>
                 <select  id="hdebd" name="hdend" class="basic-input editable-select" style="width: 110px;">
                  <option value="结束时间" selected="">结束时间</option>
                  <option value="08:00">08:00</option>
                  <option value="08:30">08:30</option>
                  <option value="09:00">09:00</option>
                  <option value="09:30">09:30</option>
                  <option value="10:00">10:00</option>
                  <option value="10:30">10:30</option>
                  <option value="11:00">11:00</option>
                  <option value="11:30">11:30</option>
                  <option value="12:00">12:00</option>
                  <option value="12:30">12:30</option>
                  <option value="13:00">13:00</option>
                  <option value="13:30">13:30</option>
                  <option value="14:00">14:00</option>
                  <option value="14:30">14:30</option>
                  <option value="15:00">15:00</option>
                  <option value="15:30">15:30</option>
                  <option value="16:00">16:00</option>
                  <option value="16:30">16:30</option>
                  <option value="17:00">17:00</option>
                  <option value="17:30">17:30</option>
                  <option value="18:00">18:00</option>
                  <option value="18:30">18:30</option>
                  <option value="19:00">19:00</option>
                  <option value="19:30">19:30</option>
                  <option value="20:00">20:00</option>
                  <option value="20:30">20:30</option>
                  <option value="21:00">21:00</option>
                  <option value="21:30">21:30</option>
                  <option value="22:00">22:00</option>
                  <option value="22:30">22:30</option>
                  <option value="23:00">23:00</option>
                  <option value="23:30">23:30</option>
                 
                </select>
              </div>
              <!--连续多天-->
              <div style="" id="eventDateContinueHook" class="item inner-back hide">
                <div class="con_item">
                  <label for="week_start_day" class="inner">起止日期</label>
                  <div class="inner-item">
                    <input  id="hdtime3" name="hdtime3" type="text" class="basic-input event_calendar hasDatepicker"  readonly>
                    至&nbsp;&nbsp;
                    <input  id="hdtime4" name="hdtime4" type="text" class="basic-input event_calendar hasDatepicker"  readonly>
                  </div>
                </div>
                <div class="con_item">
                  <label for="week_start_time" class="inner">活动时间</label>
                  <div class="inner-item"> 
                   
                    <select  id="hdstart2" name="hdstart2" class="basic-input editable-select" style="width: 110px;">
                  <option value="开始时间" selected="">开始时间</option>
                  <option value="08:00">08:00</option>
                  <option value="08:30">08:30</option>
                  <option value="09:00">09:00</option>
                  <option value="09:30">09:30</option>
                  <option value="10:00">10:00</option>
                  <option value="10:30">10:30</option>
                  <option value="11:00">11:00</option>
                  <option value="11:30">11:30</option>
                  <option value="12:00">12:00</option>
                  <option value="12:30">12:30</option>
                  <option value="13:00">13:00</option>
                  <option value="13:30">13:30</option>
                  <option value="14:00">14:00</option>
                  <option value="14:30">14:30</option>
                  <option value="15:00">15:00</option>
                  <option value="15:30">15:30</option>
                  <option value="16:00">16:00</option>
                  <option value="16:30">16:30</option>
                  <option value="17:00">17:00</option>
                  <option value="17:30">17:30</option>
                  <option value="18:00">18:00</option>
                  <option value="18:30">18:30</option>
                  <option value="19:00">19:00</option>
                  <option value="19:30">19:30</option>
                  <option value="20:00">20:00</option>
                  <option value="20:30">20:30</option>
                  <option value="21:00">21:00</option>
                  <option value="21:30">21:30</option>
                  <option value="22:00">22:00</option>
                  <option value="22:30">22:30</option>
                  <option value="23:00">23:00</option>
                  <option value="23:30">23:30</option>
                 
                </select>
                    至  &nbsp;
                    <select  id="hdebd2" name="hdend2" class="basic-input editable-select" style="width: 110px;">
                  <option value="结束时间" selected="">结束时间</option>
                  <option value="08:00">08:00</option>
                  <option value="08:30">08:30</option>
                  <option value="09:00">09:00</option>
                  <option value="09:30">09:30</option>
                  <option value="10:00">10:00</option>
                  <option value="10:30">10:30</option>
                  <option value="11:00">11:00</option>
                  <option value="11:30">11:30</option>
                  <option value="12:00">12:00</option>
                  <option value="12:30">12:30</option>
                  <option value="13:00">13:00</option>
                  <option value="13:30">13:30</option>
                  <option value="14:00">14:00</option>
                  <option value="14:30">14:30</option>
                  <option value="15:00">15:00</option>
                  <option value="15:30">15:30</option>
                  <option value="16:00">16:00</option>
                  <option value="16:30">16:30</option>
                  <option value="17:00">17:00</option>
                  <option value="17:30">17:30</option>
                  <option value="18:00">18:00</option>
                  <option value="18:30">18:30</option>
                  <option value="19:00">19:00</option>
                  <option value="19:30">19:30</option>
                  <option value="20:00">20:00</option>
                  <option value="20:30">20:30</option>
                  <option value="21:00">21:00</option>
                  <option value="21:30">21:30</option>
                  <option value="22:00">22:00</option>
                  <option value="22:30">22:30</option>
                  <option value="23:00">23:00</option>
                  <option value="23:30">23:30</option>
                 
                </select>
                  </div>
                </div>
                
              </div>
              <!--每周举行-->
              <div style="" id="eventDateWeekHook" class="item inner-back hide">
                <div class="con_item">
                  <label for="" class="inner"> 活动频率 </label>
                  <div class="inner-item week-label">
                    <label for="week_mon"> 一
                      <input name="week_mon" id="week_mon" type="checkbox">
                    </label>
                    <label for="week_tue"> 二
                      <input name="week_tue" id="week_tue" type="checkbox">
                    </label>
                    <label for="week_wed"> 三
                      <input name="week_wed" id="week_wed" type="checkbox">
                    </label>
                    <label for="week_thu"> 四
                      <input name="week_thu" id="week_thu" type="checkbox">
                    </label>
                    <label for="week_fri"> 五
                      <input name="week_fri" id="week_fri" type="checkbox">
                    </label>
                    <label for="week_sat"> 六
                      <input name="week_sat" id="week_sat" type="checkbox">
                    </label>
                    <label for="week_sun"> 日
                      <input name="week_sun" id="week_sun" type="checkbox">
                    </label>
                  </div>
                </div>
                <div class="con_item">
                  <label for="week_start_day" class="inner"> 起止日期 </label>
                  <div class="inner-item">
                    <input  id="hdtime5" name="hdtime5" type="text" class="basic-input event_calendar hasDatepicker"  readonly>
                    至&nbsp;&nbsp;
                     <input  id="hdtime6" name="hdtime6" type="text" class="basic-input event_calendar hasDatepicker"  readonly>
                  </div>
                </div>
                <div class="con_item">
                  <label for="week_start_time" class="inner"> 活动时间 </label>
                  <div class="inner-item"> 
                    
                    <select  id="hdstart3" name="hdstart3" class="basic-input editable-select" style="width: 110px;">
                  <option value="结束时间" selected="">结束时间</option>
                  <option value="08:00">08:00</option>
                  <option value="08:30">08:30</option>
                  <option value="09:00">09:00</option>
                  <option value="09:30">09:30</option>
                  <option value="10:00">10:00</option>
                  <option value="10:30">10:30</option>
                  <option value="11:00">11:00</option>
                  <option value="11:30">11:30</option>
                  <option value="12:00">12:00</option>
                  <option value="12:30">12:30</option>
                  <option value="13:00">13:00</option>
                  <option value="13:30">13:30</option>
                  <option value="14:00">14:00</option>
                  <option value="14:30">14:30</option>
                  <option value="15:00">15:00</option>
                  <option value="15:30">15:30</option>
                  <option value="16:00">16:00</option>
                  <option value="16:30">16:30</option>
                  <option value="17:00">17:00</option>
                  <option value="17:30">17:30</option>
                  <option value="18:00">18:00</option>
                  <option value="18:30">18:30</option>
                  <option value="19:00">19:00</option>
                  <option value="19:30">19:30</option>
                  <option value="20:00">20:00</option>
                  <option value="20:30">20:30</option>
                  <option value="21:00">21:00</option>
                  <option value="21:30">21:30</option>
                  <option value="22:00">22:00</option>
                  <option value="22:30">22:30</option>
                  <option value="23:00">23:00</option>
                  <option value="23:30">23:30</option>
                 
                </select>
                    至 &nbsp;
                    <select  id="hdebd3" name="hdend3" class="basic-input editable-select" style="width: 110px;">
                  <option value="结束时间" selected="">结束时间</option>
                  <option value="08:00">08:00</option>
                  <option value="08:30">08:30</option>
                  <option value="09:00">09:00</option>
                  <option value="09:30">09:30</option>
                  <option value="10:00">10:00</option>
                  <option value="10:30">10:30</option>
                  <option value="11:00">11:00</option>
                  <option value="11:30">11:30</option>
                  <option value="12:00">12:00</option>
                  <option value="12:30">12:30</option>
                  <option value="13:00">13:00</option>
                  <option value="13:30">13:30</option>
                  <option value="14:00">14:00</option>
                  <option value="14:30">14:30</option>
                  <option value="15:00">15:00</option>
                  <option value="15:30">15:30</option>
                  <option value="16:00">16:00</option>
                  <option value="16:30">16:30</option>
                  <option value="17:00">17:00</option>
                  <option value="17:30">17:30</option>
                  <option value="18:00">18:00</option>
                  <option value="18:30">18:30</option>
                  <option value="19:00">19:00</option>
                  <option value="19:30">19:30</option>
                  <option value="20:00">20:00</option>
                  <option value="20:30">20:30</option>
                  <option value="21:00">21:00</option>
                  <option value="21:30">21:30</option>
                  <option value="22:00">22:00</option>
                  <option value="22:30">22:30</option>
                  <option value="23:00">23:00</option>
                  <option value="23:30">23:30</option>
                 
                </select>
                  </div>
                </div>
                
              </div>
              <!--自定义-->
              <div style="" id="eventDateIntermHook" class="item inner-back hide">
                <div class="con_item">
                  <label for="" class="inner"> 举办时间 </label>
                  <div class="inner-item interm-item">
                    <input value="" class="basic-input event_calendar interm_day" size="12" type="text">
                    <input class="editableHook" data-class="intermBeginTime" data-start="true" type="hidden">
                    至&nbsp;&nbsp;
                    <input class="editableHook" data-class="intermEndTime" type="hidden">
                  </div>
                  <div class="inner-item interm-item">
                    <input value="" class="basic-input event_calendar interm_day" size="12" type="text">
                    <input class="editableHook" data-class="intermBeginTime" data-start="true" type="hidden">
                    至&nbsp;&nbsp;
                    <input class="editableHook" data-class="intermEndTime" type="hidden">
                  </div>
                  <div class="inner-item"> <a href="#" id="addEventDaysHook">添加时间</a> </div>
                </div>
               
              </div>
            </div>
          </div>
          <div class="row" id="pageAddressHook">
            <label class="field" for="page_address"> 活动地点<em class="man">*</em> </label>
            <div class="item page-address">
              <input id="loc_id" name="loc_id" value="118201" type="hidden">
              <div class="all-address-field">
                <div id="events-new-address" class="item">
                  <div class="item street-address">
                    <input class="basic-input" id="street_address" name="address" size="56" placeholder="详细地址" value="" maxlength="100" type="text">
                  </div>
                  <div id="new-map-card" class="map-card"> </div>
                </div>
              </div>
            </div>
            <div class="item"> </div>
          </div>
          <div class="row">
            <label class="field" for="desc">活动详情<em class="man">*</em></label>
            <div class="item desc">
              <textarea class="basic-input" id="desc" name="detail" rows="10" cols="54" max_length="4000"></textarea>
            </div>
            <div class="item" id="insertLinkItemHook">
              <input name="linkpage" id="linkpage" value="" type="hidden">
            </div>
          </div>
          
          <div class="row" id="activeFeeHook">
            <label class="field" for="fee">活动费用</label>
            <div class="item fee">
              <label class="no-need-fee">
                <input name="fee" class="fee-value" checked="checked" value="0" type="radio" onClick="free()">
                免费 </label>
              <label>
                <input name="fee" class="fee-value" value="1" type="radio" onClick="activefee()">
                收费 </label>
              <input name="fee_detail" id="fee_detail" value="" type="hidden">
            </div>
            <div style="" id="active_fee" class="item inner-back hide">
              <div class="con_item" > <span>名称 </span><span class="pl">（如：预售票等）</span> <span style="margin-left: 15px;">费用（元）</span> </div>
              <div class="con_item fee_item" >
                <input value="" class="basic-input fee-name" name='fy1' maxlength="15" placeholder="选填" type="text">
                <input value="" class="basic-input fee-num" name='money1' maxlength="6" type="text">
              </div>
              <div class="con_item fee_item hide" style="display: none;" >
                <input class="basic-input fee-name" name='fy2' type="text" maxlength="15" value="" placeholder="选填">
               <input class="basic-input fee-num" name='money2' type="text" maxlength="6" value=""><span onclick="scfy(0)"  style="cursor:pointer;color:blue">x</span>
                </div>
              <div class="con_item fee_item hide" style="display: none;">
                <input class="basic-input fee-name" name='fy3' type="text" maxlength="15" value="" placeholder="选填">
                <input class="basic-input fee-num" name='money3' type="text" maxlength="6" value=""><span onclick="scfy(1)"  style="cursor:pointer;color:blue">x</span>
                </div>
              <div class="con_item fee_item hide" style="display: none;">
                <input class="basic-input fee-name" name='fy4' type="text" maxlength="15" value="" placeholder="选填">
                <input class="basic-input fee-num" name='money4' type="text" maxlength="6" value=""><span onclick="scfy(2)"  style="cursor:pointer;color:blue">x</span>
                </div>
              <div class="con_item fee_item hide" style="display: none;">
                <input class="basic-input fee-name" name='fy5' type="text" maxlength="15" value="" placeholder="选填">
                <input class="basic-input fee-num" name='money5' type="text" maxlength="6" value=""><span onclick="scfy(3)"  style="cursor:pointer;color:blue">x</span>       
                </div>
              <div class="con_item fee_item hide" style="display: none;">
                <input class="basic-input fee-name" name='fy6' type="text" maxlength="15" value="" placeholder="选填">
                <input class="basic-input fee-num" name='money6' type="text" maxlength="6" value=""><span onclick="scfy(4)"  style="cursor:pointer;color:blue">x</span>
                </div>
              <div class="con_item fee_item hide" style="display: none;">
                <input class="basic-input fee-name" name='fy7' type="text" maxlength="15" value="" placeholder="选填">
                <input class="basic-input fee-num" name='money7' type="text" maxlength="6" value=""><span onclick="scfy(5)"  style="cursor:pointer;color:blue">x</span>
               </div>
              <div class="con_item fee_item hide" style="display: none;">
                <input class="basic-input fee-name" name='fy8' type="text" maxlength="15" value="" placeholder="选填">
                <input class="basic-input fee-num" name='money8' type="text" maxlength="6" value=""><span onclick="scfy(6)"  style="cursor:pointer;color:blue">x</span>
                 </div>
              <div class="con_item fee_item hide" style="display: none;">
                <input class="basic-input fee-name" name='fy9' type="text" maxlength="15" value="" placeholder="选填">
                <input class="basic-input fee-num" name='money9' type="text" maxlength="6" value=""><span onclick="scfy(7)"  style="cursor:pointer;color:blue">x</span>
                </div>
			
              <a id="addFeeHook" class="lnk-flat" onClick="tjfy()"  >添加费用</a> 
            	</div>
          </div>
         
          <div class="row">
            <label class="field" for="label">活动标签<em class="man">*</em></label>
            <div class="item">
              <input id="tags" name="tags" class="basic-input" size="50" value="">
            </div>
            <div class="item" id="tagsContainer"> </div>
          </div>
          <div class="row">
        
            <label class="field">&nbsp;活动图片</label>
            <span class="pl">你可以上传JPG、JPEG、GIF、PNG或BMP文件。</span>
           <input type='file' name='image'>
            
        
    </div>
          <div class="row footer">
            <div class="item">
              <input class="loc-btn"  value="发布活动" type="submit">
           </div>
          </div>
          </div>
         
        </form>
      </div>
      
	  
	  
      <div class="aside" id="side1" style="display:block">
        <h2>什么是合适的聚活动？</h2>
        <ol class="pl">
          <li>有能最终确定的活动起止日期</li>
          <li>具备现实中能集体参与的活动地点</li>
          <li>是多人在现实中能碰面的活动</li>
        </ol>
        
        <br>
        <h2>如何才能让你的活动更吸引人？</h2>
        <ol class="pl">
          <li>标题简单明了 </li>
          <li>活动内容和特点介绍详细</li>
          <li>活动海报吸引人眼球 </li>
        </ol>
        <p class="pl"> 更重要的是，邀请好友们都来参与！</p>
		</br>
		<h2>添加活动图片让你的活动更吸引人！</h2>
    <p class="pl">用一张适合的图片代表你的活动，即使你没有专业的设计师。</p>
    <p class="pl">高宽比为3:2的图片会得到最完整的显示。</p>
      </div>
      
  </div>
  <div id="footer">
    <div class="hidden-sm"> <span id="icp" class="fleft gray-link"> © 2005－2014 juhuodong.com, all rights reserved </span> <span class="fright"> <a href="http://www.douban.com/about">关于豆瓣</a> </span> </div>
  </div>
</div>


</body>
</html>