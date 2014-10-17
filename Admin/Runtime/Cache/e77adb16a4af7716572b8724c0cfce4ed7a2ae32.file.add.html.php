<?php /* Smarty version Smarty-3.1.6, created on 2014-05-13 16:38:55
         compiled from "./Admin/Tpl\User\add.html" */ ?>
<?php /*%%SmartyHeaderCode:100765371da1fd017b3-24069134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e77adb16a4af7716572b8724c0cfce4ed7a2ae32' => 
    array (
      0 => './Admin/Tpl\\User\\add.html',
      1 => 1399179063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100765371da1fd017b3-24069134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'role_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5371da1fdf14c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5371da1fdf14c')) {function content_5371da1fdf14c($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'F:\\amp\\apache\\htdocs\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加管理员</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
general.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
main.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <h1>
            <span class="action-span"><a href="<?php echo @__GROUP__;?>
/User/showlist">返回&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
            <span class="action-span1"><a href="#">当前位置是：权限管理-》添加管理员</a> </span>
            <div style="clear:both"></div>
        </h1>

        
        <div></div>

      
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                <div class="list-div" id="listDiv">
            <table cellpadding="3" cellspacing="1">
                <tr>
                    <td align="center">管理员名称</td>
                    <td><input type="text" name="username" /></td>
                </tr>
                <tr>
                    <td align="center">角色</td>
                    <td>
                        <select name="role_id">
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['role_info']->value,'selected'=>2),$_smarty_tpl);?>

                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>