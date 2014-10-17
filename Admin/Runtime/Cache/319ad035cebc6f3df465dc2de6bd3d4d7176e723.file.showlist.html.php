<?php /* Smarty version Smarty-3.1.6, created on 2014-05-13 15:16:35
         compiled from "./Admin/Tpl\Column\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:677753665edb1149f3-00579281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '319ad035cebc6f3df465dc2de6bd3d4d7176e723' => 
    array (
      0 => './Admin/Tpl\\Column\\showlist.html',
      1 => 1399965391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '677753665edb1149f3-00579281',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_53665edb1b0a2',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53665edb1b0a2')) {function content_53665edb1b0a2($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>栏目列表 </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
general.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
main.css" rel="stylesheet" type="text/css" />
        
        <script type="text/javascript">
            function show_confirm()
            {
                var r=confirm("确定要移除该栏目？");
                if (r==false)
                {
                  return false;
                }
            }
            
            function show_confirm1()
            {
                var r1=confirm("确定要移除该栏目及所有子栏目？");
                if (r1==false)
                {
                  return false;
                }
            }
        </script>
    </head>
    <body>

        <h1>
            <span class="action-span"><a href="__URL__/add">添加栏目</a></span>
            <span class="action-span1"><a href="#">当前位置是：栏目管理-》栏目列表</a> </span>
            <div style="clear:both"></div>
        </h1>
        <form method="post" action="" name="listForm">
            <div class="list-div" id="listDiv">

                <table width="100%" cellspacing="1" cellpadding="2" id="list-table">
                    <tr>
                        <th>栏目名称</th>
                        <th>操作</th>
                    </tr>

                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr align="center" class="0" id="0_1" id = 'tr_4'>
                        <td align="left" class="first-cell" style = 'padding-left="1"'>
                            <img src="<?php echo @ADMIN_IMG_URL;?>
menu_minus.gif" id="icon_0_1" width="9" height="9" border="0" style="margin-left:<?php echo $_smarty_tpl->tpl_vars['v']->value['lev'];?>
em" />
                            <span><a href="#" ><?php echo $_smarty_tpl->tpl_vars['v']->value['c_name'];?>
</a></span>
                        </td>
                        <td width="24%" align="center">
                            <a href="__URL__/edit/c_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['c_id'];?>
">编辑</a> |
                            <a href="__URL__/delete/c_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['c_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['p_id']==0){?> onclick="return show_confirm1();" <?php }else{ ?> onclick="return show_confirm();" <?php }?> title="移除">移除</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </form>


    </body>
</html><?php }} ?>