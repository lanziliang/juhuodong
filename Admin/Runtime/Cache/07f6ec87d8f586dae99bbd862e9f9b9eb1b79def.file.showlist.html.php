<?php /* Smarty version Smarty-3.1.6, created on 2014-05-05 10:01:17
         compiled from "./Admin/Tpl\Auth\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1835366e6b8d98261-00467781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07f6ec87d8f586dae99bbd862e9f9b9eb1b79def' => 
    array (
      0 => './Admin/Tpl\\Auth\\showlist.html',
      1 => 1399255274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1835366e6b8d98261-00467781',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5366e6b8e6d47',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5366e6b8e6d47')) {function content_5366e6b8e6d47($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>权限列表 </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
general.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        
        <h1>
            <span class="action-span"><a href="__URL__/add">添加权限&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
            <span class="action-span1"><a href="#">当前位置是：权限管理-》权限列表</a> </span>
            <div style="clear:both"></div>
        </h1>
        
        
        
        <div class="list-div" id="listDiv">
            <table cellpadding="3" cellspacing="1">
                <tr>
                    <th>序号</th>
                    <th><a href="#">权限名称</a></th>
                    <th><a href="#">父级id</a></th>
                    <th><a href="#">模块</a></th>
                    <th><a href="#">操作方法</a></th>
                    <th><a href="#">全路径</a></th>
                    <th><a href="#">级别</a></th>
                  <tr>
               
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
                    <tr id="product1">
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</td>
                        <td align="left" class="first-cell" style = 'padding-left="1"'>
                            <img src="<?php echo @ADMIN_IMG_URL;?>
menu_minus.gif" id="icon_0_1" width="9" height="9" border="0" style="margin-left:<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_level'];?>
em" />
                            <a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</a>
                        </td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_pid'];?>
</td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_c'];?>
</td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_a'];?>
</td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_path'];?>
</td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_level'];?>
</td>
                    </tr>
                    <?php } ?>
            </table>
        </div>
    </body>
</html><?php }} ?>