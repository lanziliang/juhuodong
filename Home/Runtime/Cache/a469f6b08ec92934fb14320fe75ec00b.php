<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>留言</title>
	</head>
	<body>
		<form action="__URL__/doContent" method="post">
			您好，<?php echo ($name); ?> 请在下面写下您对<?php echo ($toname); ?>的留言 <br/>  
			<input name="toid" value='<?php echo ($toid); ?>' type="hidden" />
			<input name="fromid" value='<?php echo ($fromid); ?>' type="hidden" />
			留言内容：<textarea type='text' name='content'></textarea><br/>
			<input type='submit' value="发送留言" />
		</form>
	</body>
</html>