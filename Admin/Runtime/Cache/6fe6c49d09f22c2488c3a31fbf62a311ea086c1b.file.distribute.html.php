<?php /* Smarty version Smarty-3.1.6, created on 2014-05-05 10:46:16
         compiled from "./Admin/Tpl\Role\distribute.html" */ ?>
<?php /*%%SmartyHeaderCode:101245366fb78b16367-65795036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fe6c49d09f22c2488c3a31fbf62a311ea086c1b' => 
    array (
      0 => './Admin/Tpl\\Role\\distribute.html',
      1 => 1398827646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101245366fb78b16367-65795036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'role_name' => 0,
    'p_auth' => 0,
    'v' => 0,
    'role_auth_ids' => 0,
    's_auth' => 0,
    'vv' => 0,
    't_auth' => 0,
    'vvv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5366fb78d6874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5366fb78d6874')) {function content_5366fb78d6874($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加分配权限</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
        <style>
            
            li {list-style-type:none;}
            
        </style>
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：分配权限管理-》添加分配权限信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__GROUP__;?>
/Role/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <h4>当前角色：<?php echo $_smarty_tpl->tpl_vars['role_name']->value;?>
</h4>
            <form action="__SELF__" method="post" enctype="multipart/form-data">
            <ul>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['p_auth']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
<input type="checkbox" name="auth_name[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['auth_id'],$_smarty_tpl->tpl_vars['role_auth_ids']->value)){?>checked<?php }?> /></li>
                <li>
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['s_auth']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['vv']->value['auth_pid']==$_smarty_tpl->tpl_vars['v']->value['auth_id']){?>
                        <li><?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_name'];?>
<input type="checkbox" name="auth_name[]" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['vv']->value['auth_id'],$_smarty_tpl->tpl_vars['role_auth_ids']->value)){?>checked<?php }?> /></li>
                        <li>
                            <ul>
                                <?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_smarty_tpl->tpl_vars['kkk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['t_auth']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value){
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
 $_smarty_tpl->tpl_vars['kkk']->value = $_smarty_tpl->tpl_vars['vvv']->key;
?>
                                <?php if ($_smarty_tpl->tpl_vars['vvv']->value['auth_pid']==$_smarty_tpl->tpl_vars['vv']->value['auth_id']){?>
                                <li><?php echo $_smarty_tpl->tpl_vars['vvv']->value['auth_name'];?>
<input type="checkbox" name="auth_name[]" value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['auth_id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['vvv']->value['auth_id'],$_smarty_tpl->tpl_vars['role_auth_ids']->value)){?>checked<?php }?> /></li>
                                <?php }?>
                                <?php } ?>
                            </ul>
                        </li>
                        <?php }?>
                        <?php } ?>
                    </ul>
                </li>
                <?php } ?>
            </ul>
            <input type="submit" value="分配权限">
            </form>
        </div>
    </body>
</html><?php }} ?>