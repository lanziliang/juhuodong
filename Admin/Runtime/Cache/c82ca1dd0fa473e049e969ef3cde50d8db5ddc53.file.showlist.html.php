<?php /* Smarty version Smarty-3.1.6, created on 2014-05-05 10:14:43
         compiled from "./Admin/Tpl\Role\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:84415366f4134a4658-13704598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c82ca1dd0fa473e049e969ef3cde50d8db5ddc53' => 
    array (
      0 => './Admin/Tpl\\Role\\showlist.html',
      1 => 1399179218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84415366f4134a4658-13704598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5366f41355c55',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5366f41355c55')) {function content_5366f41355c55($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>角色列表</title>
        <link href="<?php echo @ADMIN_CSS_URL;?>
general.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <style>
            
            .tr_color{background-color: #9F88FF}
            
        </style>

        <h1>
            <span class="action-span"><a href="__URL__/add">添加角色&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
            <span class="action-span1"><a href="#">当前位置是：权限管理-》角色列表</a> </span>
            <div style="clear:both"></div>
        </h1>

        <div class="list-div" id="listDiv">
            <table cellpadding="3" cellspacing="1">
                <tr>
                    <th>序号</th>
                    <th><a href="#">角色名称</a></th>
                    <th><a href="#">操作</a></th>
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
                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['role_name'];?>
</a></td>
                    <td align="center"><a href="__URL__/distribute/role_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
">分配权限</a></td>
                </tr>
                <?php } ?>
                    
            </table>
        </div>
    </body>
</html><?php }} ?>