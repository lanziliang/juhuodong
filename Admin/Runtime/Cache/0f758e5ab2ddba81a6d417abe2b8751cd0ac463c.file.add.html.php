<?php /* Smarty version Smarty-3.1.6, created on 2014-05-05 12:34:04
         compiled from "./Admin/Tpl\Column\add.html" */ ?>
<?php /*%%SmartyHeaderCode:11538536709aa68f830-12101440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f758e5ab2ddba81a6d417abe2b8751cd0ac463c' => 
    array (
      0 => './Admin/Tpl\\Column\\add.html',
      1 => 1399264377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11538536709aa68f830-12101440',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_536709aa7b353',
  'variables' => 
  array (
    'c_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536709aa7b353')) {function content_536709aa7b353($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'F:\\amp\\apache\\htdocs\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\function.html_options.php';
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
                            <input type='text' name='c_name' maxlength="20" value='' size='27' /> <font color="red">*</font>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">上级栏目:</td>
                        <td>
                            <select name="p_id">
                                <option value="0">--请选择--</option>
                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['c_info']->value),$_smarty_tpl);?>

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