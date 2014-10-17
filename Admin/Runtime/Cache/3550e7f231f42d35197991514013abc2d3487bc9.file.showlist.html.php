<?php /* Smarty version Smarty-3.1.6, created on 2014-05-09 23:46:56
         compiled from "./Admin/Tpl\User\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:308625366dc9bd3c357-06573684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3550e7f231f42d35197991514013abc2d3487bc9' => 
    array (
      0 => './Admin/Tpl\\User\\showlist.html',
      1 => 1399650413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308625366dc9bd3c357-06573684',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5366dc9be10b8',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'role_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5366dc9be10b8')) {function content_5366dc9be10b8($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>用户列表</title>
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
            <span class="action-span"><a href="__URL__/add">添加管理员</a></span>
            <span class="action-span1"><a href="#">当前位置是：权限管理-》管理员列表</a> </span>
            <div style="clear:both"></div>
        </h1>
        
        <div></div>
        <div class="list-div" id="listDiv">
            <table cellpadding="3" cellspacing="1">
                <tr>
                    <th>序号</th>
                    <th><a href="#">管理员名称</a></th>
                    <th><a href="#">角色</a></th>
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
                        <td align="center"><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</a></td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['role_info']->value[$_smarty_tpl->tpl_vars['v']->value['role_id']];?>
</td>
                    </tr>
                    <?php } ?>
                
            </table>
        </div>
    </body>
</html><?php }} ?>