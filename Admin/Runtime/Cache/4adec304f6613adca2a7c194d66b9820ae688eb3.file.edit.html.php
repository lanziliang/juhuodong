<?php /* Smarty version Smarty-3.1.6, created on 2014-05-05 12:50:53
         compiled from "./Admin/Tpl\Column\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:14100536718ad1ba0c9-75993556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4adec304f6613adca2a7c194d66b9820ae688eb3' => 
    array (
      0 => './Admin/Tpl\\Column\\edit.html',
      1 => 1399265448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14100536718ad1ba0c9-75993556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c_name' => 0,
    'c_info' => 0,
    'p_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_536718ad26872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536718ad26872')) {function content_536718ad26872($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'F:\\amp\\apache\\htdocs\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>栏目列表 </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
general.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <h1>
            <span class="action-span"><a href="__URL__/showlist">返回</a></span>
            <span class="action-span1"><a href="#">当前位置是：栏目管理-》添加栏目</a> </span>
            <div style="clear:both"></div>
        </h1>

        <div class="main-div">
            <form action="__SELF__" method="post" name="theForm" enctype="multipart/form-data">
                <table width="100%" id="general-table">
                    <tr>
                        <td class="label">栏目名称:</td>
                        <td>
                            <input type='text' name='c_name' maxlength="20" value='<?php echo $_smarty_tpl->tpl_vars['c_name']->value;?>
' size='27' /> <font color="red">*</font>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">上级栏目:</td>
                        <td>
                            <select name="p_id">
                                <option value="0">--请选择--</option>
                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['c_info']->value,'selected'=>$_smarty_tpl->tpl_vars['p_id']->value),$_smarty_tpl);?>

                            </select>
                        </td>
                    </tr>

                </table>
                <div class="button-div">
                    <input type="submit" value=" 确定 " />
                    <input type="reset" value=" 重置 " />
                </div>
            </form>
        </div>

        <div id="footer">
            共执行 3 个查询，用时 0.021687 秒，Gzip 已禁用，内存占用 2.081 MB<br />
            版权所有 &copy; 2005-2010 上海商派网络科技有限公司，并保留所有权利。</div>

    </body>
</html><?php }} ?>