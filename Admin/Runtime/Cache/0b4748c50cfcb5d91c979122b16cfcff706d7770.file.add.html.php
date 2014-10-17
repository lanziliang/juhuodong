<?php /* Smarty version Smarty-3.1.6, created on 2014-05-05 09:57:16
         compiled from "./Admin/Tpl\Auth\add.html" */ ?>
<?php /*%%SmartyHeaderCode:68785366effc080135-12547937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b4748c50cfcb5d91c979122b16cfcff706d7770' => 
    array (
      0 => './Admin/Tpl\\Auth\\add.html',
      1 => 1399178944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68785366effc080135-12547937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'authinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5366effc16c4c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5366effc16c4c')) {function content_5366effc16c4c($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'F:\\amp\\apache\\htdocs\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加权限</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
general.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
main.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <h1>
            <span class="action-span"><a href="<?php echo @__GROUP__;?>
/Auth/showlist">返回&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
            <span class="action-span1"><a href="#">当前位置是：权限管理-》添加权限信息</a> </span>
            <div style="clear:both"></div>
        </h1>

        <div></div>


        <form action="__SELF__" method="post" enctype="multipart/form-data" name="listForm">
            <div class="list-div" id="listDiv">
                <table cellpadding="3" cellspacing="1">
                    <tr>
                        <td align="center">权限名称</td>
                        <td><input type="text" name="auth_name" /></td>
                    </tr>
                    <tr>
                        <td align="center">父级权限</td>
                        <td>
                            <select name="auth_pid">
                                <option value="0">--请选择--</option>
                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['authinfo']->value),$_smarty_tpl);?>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">权限模块</td>
                        <td><input type="text" name="auth_c" /></td>
                    </tr>
                    <tr>
                        <td align="center">权限操作方法</td>
                        <td><input type="text" name="auth_a" /></td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" value="添加">
                        </td>
                    </tr>  
                </table>
            </div>
        </form>
    </body>
</html><?php }} ?>