<?php /* Smarty version Smarty-3.1.6, created on 2014-05-09 22:47:58
         compiled from "./Admin/Tpl\Huodong\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:298845366dd8415b1f6-02049185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee5b4ce6b7ec29212d584c5cd081e601f3dd222d' => 
    array (
      0 => './Admin/Tpl\\Huodong\\detail.html',
      1 => 1399646870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298845366dd8415b1f6-02049185',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5366dd842431a',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5366dd842431a')) {function content_5366dd842431a($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html lang="zh-CN" class="ua-windows ua-ff28">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
detail.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
        <h3>
            <span class="action-span"><a href="<?php echo @__GROUP__;?>
/Huodong/showlist">返回&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
            <span class="action-span1"><a href="#">当前位置是：活动管理-》活动详情</a> </span>
            <div style="clear:both"></div>
        </h3>
        
      
        <form action="__URL__/check/id/<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" method="post" enctype="multipart/form-data">
        <div id="wrapper">
            <div class="eventwrap">
                <div class="poster">
                    <a href="">
                        <img id="poster_img" itemprop="image" src="__PUBLIC__/Uploads/<?php echo $_smarty_tpl->tpl_vars['info']->value['image'];?>
" title="点击查看大图" height="260" width="175">
                    </a>   
                </div>
                <div id="event-info">
                    <div class="event-info">
                        <h2 itemprop="summary"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>

                        </h2>
                        <div class="event-detail">
                            <span class="pl">时间:&nbsp;&nbsp;</span>  
                            <ul class="calendar-strs ">     
                                <li class="calendar-str-item "><?php echo date('m月d日',$_smarty_tpl->tpl_vars['info']->value['hdtime']);?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['info']->value['hdstart'];?>
 - <?php echo $_smarty_tpl->tpl_vars['info']->value['hdend'];?>
</li>
                            </ul>
                            <time itemprop="startDate" datetime="2014-05-17T19:30:00"></time>
                            <time itemprop="endDate" datetime="2014-05-18T21:30:00"></time>
                        </div>
                        <div class="event-detail" itemprop="location" itemscope="" itemtype="http://data-vocabulary.org/Organization">
                            <span class="pl">地点:&nbsp;</span>
                            <span itemprop="address" itemscope="" itemtype="http://data-vocabulary.org/Address" class="micro-address">
                                <span itemprop="region" class="micro-address"><?php echo $_smarty_tpl->tpl_vars['info']->value['address'];?>
</span>

                            </span>
                            <span itemprop="geo" itemscope="" itemtype="http://data-vocabulary.org/Geo" class="micro-address">
                                <meta itemprop="latitude" content="24.473829">
                                <meta itemprop="longitude" content="118.189346">
                            </span>
                        </div>
                        <div class="event-detail">
                            <span class="pl">费用:&nbsp;&nbsp;</span><?php echo $_smarty_tpl->tpl_vars['info']->value['money'];?>

                        </div>
                        <div class="event-detail">
                            <span class="pl">类型:&nbsp;&nbsp;</span><a href="http://www.douban.com/location/xiamen/events/future-drama" itemprop="eventType"><?php echo $_smarty_tpl->tpl_vars['info']->value['type'];?>
</a>
                        </div>
                        <div class="event-detail" itemscope="" itemtype="http://data-vocabulary.org/Organization">

                            <span class="pl">发起人:</span>
                            <a href="http://site.douban.com/ylpw228/" target="_top" itemprop="name"><?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>
</a>
                        </div>
                        <div class="interest-attend pl">
                            <span class="num" id='a'><?php echo $_smarty_tpl->tpl_vars['info']->value['love'];?>
</span><span>人感兴趣</span><span id='ts'></span> 
                        </div>
                    </div>
                </div>
            </div>       




            <!--活动详情-->
            <div class="mod" id="link-report">
                <h2>活动详情</h2>   
                <div id="edesc_s" class="wr"><pre><?php echo $_smarty_tpl->tpl_vars['info']->value['detail'];?>
</pre></div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['info']->value['checked']==0){?>
            <input type="submit" value="通过审核"/>
            <?php }?>
        </div>
        </form>
    </body>
</html>
<?php }} ?>