<?php /* Smarty version Smarty-3.1.6, created on 2014-06-14 10:53:55
         compiled from "./Admin/Tpl\User\blacklist.html" */ ?>
<?php /*%%SmartyHeaderCode:451536cec84c60588-21392312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd071e209981f765344e2d2329523f0de292e151c' => 
    array (
      0 => './Admin/Tpl\\User\\blacklist.html',
      1 => 1402714403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '451536cec84c60588-21392312',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_536cec84cd151',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'hdnumber' => 0,
    'page_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536cec84cd151')) {function content_536cec84cd151($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
            <span class="action-span1"><a href="#">当前位置是：用户中心-》黑名单</a> </span>
            <div style="clear:both"></div>
        </h1>
        
        <div></div>
        <div class="list-div" id="listDiv">
            <table cellpadding="3" cellspacing="1">
                <tr class="header">
                    <th>序号</th>
                    <th>用户名</th>
                    <th>邮箱</th>
                    <th>发起活动数</th>
                    <th>注册时间</th>
                    <th>操作</th>
                </tr>
            
                
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
                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td>
                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['hdnumber']->value[$_smarty_tpl->tpl_vars['v']->value['id']];?>
</td>
                    <td align="center"><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['v']->value['time']);?>
</a></td>
                    <td align="center">
                        <a href="__URL__/resume/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" >移出黑名单</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
            
            <table id="page-table" cellspacing="0">
                <tr>
                    <td align="center" nowrap="true">
                        <?php echo $_smarty_tpl->tpl_vars['page_list']->value;?>

                    </td>
                </tr>
            </table>
        </div>
    </body>
</html><?php }} ?>