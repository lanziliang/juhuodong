<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>欢迎登陆聚活动</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/login.css" />
<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
<script type="text/javascript"> 
	$(function(){ 
		$('#email').bind({ 
		focus:function(){ 
		if (this.value == this.defaultValue){ 
			this.value=""; 
		} 
		}, 
		blur:function(){ 
		if (this.value == ""){ 
			this.value = this.defaultValue; 
		} 
	} 
	}); 
	}) 
</script> 

</head>
<body>
<div class="wrapper">
<div id="header">

<a href="__APP__/Index/index" >
<img src="__PUBLIC__/Images/logo.png" />
</a>

</div>
<div id="content">
<h1>登录聚活动</h1>
<div class="article">
<form id="lzform" name="lzform" method="post" action="__URL__/doLogin" onsubmit="">
<input name="source" type="hidden" value="simple"/>
<div class="item">
<label>帐号</label>
<input id="email" name="email" type="text" class="basic-input" maxlength="60"  value="邮箱/手机号" tabindex="1"/>
</div>
<div class="item">
<label>密码</label>
<input id="password" name="password" type="password" class="basic-input" maxlength="20" tabindex="2"/>
</div>
<div class="item">
<label>&nbsp;</label>
<p class="remember">
<input type="checkbox" id="remember" name="remember" tabindex="4"/>
<label for="remember" class="remember">下次自动登录</label>
| <a href="">忘记密码了</a>
</p>
</div>
<div class="item">
<label>&nbsp;</label>
<input type="submit" value="登录" name="user_login" class="btn-submit" tabindex="5"/>
</div>
</form>
</div>
<ul id="side-nav" class="aside">
<li>&gt;&nbsp;还没有聚活动帐号？<a rel="nofollow" href="__APP__/Register/register">立即注册</a></li>
</ul>
</div>
<div id="footer">
<span id="icp" class="fleft gray-link">
&copy; 2005－2014 douban.com, all rights reserved
</span>
<span class="fright">
<a href="http://www.douban.com/about">关于聚活动</a>
· <a href="http://www.douban.com/about?topic=contactus">联系我们</a>
· <a href="http://www.douban.com/help/">帮助中心</a>
</span>
</div> 
</body>
</html>