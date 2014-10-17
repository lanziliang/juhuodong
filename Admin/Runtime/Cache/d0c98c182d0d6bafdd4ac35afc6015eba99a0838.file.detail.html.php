<?php /* Smarty version Smarty-3.1.6, created on 2014-06-14 11:10:03
         compiled from "./Admin/Tpl\User\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:8145539bbc53943f97-72349619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0c98c182d0d6bafdd4ac35afc6015eba99a0838' => 
    array (
      0 => './Admin/Tpl\\User\\detail.html',
      1 => 1402715399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8145539bbc53943f97-72349619',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_539bbc539b679',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539bbc539b679')) {function content_539bbc539b679($_smarty_tpl) {?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="bd">
            <img class="userface" width="150" alt="" src="./Public/avatar/<?php echo $_smarty_tpl->tpl_vars['info']->value['image'];?>
"></img>
            <div class="user-info">                常居: 福建厦门
               <br></br>
                <div class="pl">
                    邮箱：123@123.com 
                    <br></br>
                    2014-04-22加入 
                    <br></br>
                    <a id="tx" href="/index.php/Touxiang/index" style="display: inline;">
                        修改当前头像
                    </a>
                </div>
            </div>
            <div class="sep-line"></div>
            <div class="user-intro">
                <div id="edit_intro" class="j edtext pl">
                    <pre id="intro_display" style="display: inline;">
                热火 热火 我爱
                James 6
                wade 3
                bosh 1
                    </pre>
                </div>
            </div>
        </div>
    </body>
</html>
<?php }} ?>