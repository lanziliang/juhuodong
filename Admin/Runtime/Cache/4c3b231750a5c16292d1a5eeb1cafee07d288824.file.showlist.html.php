<?php /* Smarty version Smarty-3.1.6, created on 2014-05-05 10:15:58
         compiled from "./Admin/Tpl\Huodong\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:186075366dd7fdb05c3-78832921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c3b231750a5c16292d1a5eeb1cafee07d288824' => 
    array (
      0 => './Admin/Tpl\\Huodong\\showlist.html',
      1 => 1399256156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186075366dd7fdb05c3-78832921',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5366dd7fe8994',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'page_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5366dd7fe8994')) {function content_5366dd7fe8994($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>活动列表 </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
general.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
main.css" rel="stylesheet" type="text/css" />
        
        <script type="text/javascript">
            function show_confirm()
            {
                var r=confirm("确定要将该活动放入回收站？");
                if (r==false)
                {
                  return false;
                }
            }
        </script>
    </head>
    <body>
        <h1>
            <span class="action-span1"><a href="#">当前位置是：活动管理-》活动列表</a> </span>
            <div style="clear:both"></div>
        </h1>

        <form method="post" action="" name="listForm" >
            <div class="list-div" id="listDiv">
                <table cellpadding="3" cellspacing="1">
                    <tr>
                        <th>序号</th>
                        <th>活动标题</th>
                        <th>活动时间</th>
                        <th>活动地点</th>
                        <th>类型</th>
                        <th>发布时间</th>
                        <th>状态</th>
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
                    <tr>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
                        <td align="center"><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['v']->value['hdtime']);?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['address'];?>
</td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
</td>
                        <td align="center"><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['v']->value['time']);?>
</td>
                        <td align="center"><?php if ($_smarty_tpl->tpl_vars['v']->value['checked']==0){?>未审核<?php }else{ ?>已审核<?php }?></td>
                        <td align="center">
                            <a href="__URL__/detail/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="right" title="详情"><img src="<?php echo @ADMIN_IMG_URL;?>
icon_view.gif" width="16" height="16" border="0" /></a>
                            <a href="__URL__/trash/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" onclick="return show_confirm();" title="回收站"><img src="<?php echo @ADMIN_IMG_URL;?>
icon_trash.gif" width="16" height="16" border="0"/></a>
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
        </form>
    </body>
</html><?php }} ?>