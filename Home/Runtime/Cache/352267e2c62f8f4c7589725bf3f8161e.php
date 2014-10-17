<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>注册聚活动账号</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/register.css" />
<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>

<script type="text/javascript">


//
			$(function(){
			var error=new Array();
			$('input[name="username"]').blur(function(){
				var name=$(this).val();
				if(name.length<4)
				{
				if(name.length==0)
				{
					$('#umessage1').remove();
						$('#umessage2').remove();
					$('input[name="username"]').after('<font id="umessage1" style="color:red">用户名不能为空！</font> ');
				}else{
				$('#umessage1').remove();
						$('#umessage2').remove();
					$('input[name="username"]').after('<font id="umessage1" style="color:red">用户名长度不能小于4</font> ');
				}
				}
				else{
				$.get('__URL__/checkName',{'username':name},function(data){
						if(data=='不允许'){
						error['username']=1;
						$('#umessage1').remove();
						$('#umessage2').remove();
						$('input[name="username"]').after('<font id="umessage1" style="color:red"> 该用户名已经被注册！</font> ');
						}else{
							error['username']=0;
							$('#umessage1').remove();
							$('#umessage2').remove();
							$('input[name="username"]').after('<font id="umessage2" style="color:#3FA156"> 恭喜您，该用户名可以注册！</font>');
						}
						});}
			});
			$('input[name="email"]').blur(function(){
				var email=$(this).val();
				if(email.length==0)
				{
					$('#umessage3').remove();
						$('#umessage4').remove();
						$('input[name="email"]').after('<font id="umessage3" style="color:red"> Email不能为空！</font> ');
				}else{
				
				var regm = /^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;//验证Mail的正则表达式,^[a-zA-Z0-9_-]:开头必须为字母,下划线,数字,
				
						if(!email.match(regm)){
						error['email']=1;
						$('#umessage3').remove();
						$('#umessage4').remove();
						$('input[name="email"]').after('<font id="umessage3" style="color:red"> Email格式不正确！</font> ');
						}else{
							error['email']=0;
							$('#umessage3').remove();
							$('#umessage4').remove();
							//$('input[name="email"]').after('<font id="umessage4" style="color:#3FA156">此邮箱可以注册！</font>');
						
						$.get('__URL__/checkEmail',{'email':email},function(data){
						if(data=='不允许'){
						error['username']=1;
						$('#umessage3').remove();
						$('#umessage4').remove();
						$('input[name="email"]').after('<font id="umessage3" style="color:red"> 该Email已经被注册！</font> ');
						}else{
							error['username']=0;
							$('#umessage3').remove();
							$('#umessage4').remove();
							$('input[name="email"]').after('<font id="umessage4" style="color:#3FA156"> 恭喜您，该用户名可以注册！</font>');
						}
						});}
						}
			});
			$('input[name="password"]').blur(function(){
				$('#umessagep').remove();
						
			});
			
			$('input[name="repassword"]').blur(function(){
				var p1=$(this).val();
				var p2=$('#password').val();
						if(p1!=p2){
						error['password']=1;
						$('#umessage5').remove();
						$('#umessage6').remove();
						$('input[name="repassword"]').after('<font id="umessage5" style="color:red"> 两次输入密码不一致！</font> ');
						}else{
							error['password']=0;
							$('#umessage5').remove();
							$('#umessage6').remove();
							$('input[name="repassword"]').after('<font id="umessage6" style="color:#3FA156"></font>');
						}
						
			});
		});
	</script>
	
	<script>
	function testpass(password,username)
{

 var score = 0;
 if (password.length < 4 ) { return -4; }
 if (typeof(username) != 'undefined' && password.toLowerCase() == username.toLowerCase()){return -2}
 score += password.length * 4;
 score += ( repeat(1,password).length - password.length ) * 1;
 score += ( repeat(2,password).length - password.length ) * 1;
 score += ( repeat(3,password).length - password.length ) * 1;
 score += ( repeat(4,password).length - password.length ) * 1;
 if (password.match(/(.*[0-9].*[0-9].*[0-9])/)){ score += 5;}
 if (password.match(/(.*[!,@,#,$,%,^,&,*,?,_,~].*[!,@,#,$,%,^,&,*,?,_,~])/)){ score += 5 ;}
 if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)){ score += 10;}
 if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)){ score += 15;}
 if (password.match(/([!,@,#,$,%,^,&,*,?,_,~])/) && password.match(/([0-9])/)){ score += 15;}
 if (password.match(/([!,@,#,$,%,^,&,*,?,_,~])/) && password.match(/([a-zA-Z])/)){score += 15;}
 if (password.match(/^w+$/) || password.match(/^d+$/) ){ score -= 10;}
 if ( score < 0 ){score = 0;}
 if ( score > 100 ){ score = 100;}
 return score;
 
 function repeat(len,str)
 {
  var res = ""; 
  for (var i = 0; i < str.length; i++ ) 
  { 
   var repeated = true; 
   for (var j = 0, max = str.length - i - len; j < len && j < max; j++)
   {
    repeated = repeated && (str.charAt(j + i) == str.charAt(j + i + len)); 
   } 
   if (j < len) repeated = false;
   if (repeated) { 
    i += len - 1; 
    repeated = false; 
   } 
   else 
   {
    res += str.charAt(i); 
   }
  } 
  return res; 
 }
}
function checkpass(pass)
{
	$('#umessagep').remove();
    var username = document.getElementById('name').value;
	
    var score = testpass(pass.value,username);
    var password_label = document.getElementById('password_label');
    if(score == -4)
    {
	$('#umessagep').remove();
        password_label.innerHTML = '密码太短';
    }
    else if(score == -2)
    {
	$('#umessagep').remove();
        password_label.innerHTML = '密码不能与用户名相同';
    }
    else
    {
	
       
        var text = score < 34 ? '弱' : (score < 68 ? '一般' : '很好');
        
			if(text=='弱')
		{
			password_label.innerHTML ='' ;
			$('#umessagep').remove();
			$('input[name="password"]').after('<image id="umessagep" src="__PUBLIC__/Images/r.gif" />');
		}else if(text=='一般')
		{
			password_label.innerHTML ='' ;
			$('#umessagep').remove();
			$('input[name="password"]').after('<image id="umessagep" src="__PUBLIC__/Images/z.gif" />');
		}else{
			password_label.innerHTML ='' ;
			$('#umessagep').remove();
			$('input[name="password"]').after('<image id="umessagep" src="__PUBLIC__/Images/q.gif" />');
		}
        //password_label.innerHTML = "<span style='width:"+width+";display:block;overflow:hidden;height:20px;line-height:20px;background:"+color+";'>"+text+"</span>";
    }
}
	</script>
</head>
<body>
<div id="wrapper">
<div id="header">
<div class="site-nav single-nav">
<div class="site-nav-logo">
<a href="__APP__/Index/index">
<img src="__PUBLIC__/Images/logo.png" alt="聚活动">
</a>
</div>
</div>
</div>
<div id="content">
<h1>欢迎加入聚活动</h1>
<div class="grid-16-8 clearfix">
<div class="article">
<form name="lzform" method="post" action="__URL__/doReg">

<div class="item extra-tips">
<label>邮箱</label>
<input id="email" name="email" type="text" class="basic-input" maxlength="60"  tabindex="1" value=""/>
</div>
<div class="item extra-tips">
<label>密码</label>
<input id="password" name="password" type="password" class="basic-input" onkeyup="javascript:checkpass(this)" tabindex="2" maxlength="20"/><span id="password_label" style="color:red;"></span>
</div>
<div class="item extra-tips">
<label>确认密码</label>
<input id="password" name="repassword" type="password" class="basic-input" tabindex="2" maxlength="20"/>
</div>
<div class="item extra-tips">
<label>名号</label>
<input id="name" name="username" type="text"
class="basic-input" maxlength="15" tabindex="3" value=""/>
</div>

<div class="suggestion">
<span class="tips">第一印象很重要，起个响亮的名号吧</span>
</div>
<div class="item captcha-item">
<label>验证码</label>
<p><img src='__APP__/Public/code/' onclick="this.src=this.src+'?'+Math.random()" class="captcha-img"/><span class="tips">看不清？点击图片更换下一张</span></p>
<input type="text" name="code" class="basic-input captcha" id="captcha" tabindex="4" maxlength="10"/>

<span class="validate-error" id="frm_error"></span>
</div>
<div class="item">
<p class="agreement">
<label for="agreement" class="agreement-label">
<input type="checkbox" id="agreement" name="form_agreement" tabindex="5"
/>
我已经认真阅读并同意聚活动的《<a target="_blank" href="/about?policy=agreement">使用协议</a>》。
</label>
</p>
</div>
<div class="item-submit">
<label>&nbsp;</label>
<input type="submit" value="注册" id="button" class="btn-submit enabled " tabindex="6" title="阅读并同意聚活动的《使用协议》方可注册。"/>
</div>
</form>
</div>
<div class="aside">
<p class="pl">&gt;&nbsp;已经拥有聚活动帐号? <a rel="nofollow" href="__APP__/Login/login">直接登录</a></p>
</div>
<div class="extra">
</div>
</div>
</div>
<div id="footer">
<span id="icp" class="fleft gray-link">
&copy; 2005－2014 douban.com, all rights reserved
</span>
<span class="fright">
<a href="#">关于聚活动</a>
· <a href="#">联系我们</a>
· <a href="#">帮助中心</a>
</span>
</div>
</div>  
</body>
</html>