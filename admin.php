<?php
header("content-type:text/html;charset=utf-8");


//制作一个调试输出函数
function show_bug($msg,$color='red'){
    echo "<pre style='color:".$color."'>";
    var_dump($msg);
    echo "</pre>";
}


//把后台css,img,js,upload路径定义为常量，以便使用
define("SITE_URL","http://localhost/");
define("ADMIN_CSS_URL",SITE_URL."juhuodong/Public/admin/css/");
define("ADMIN_IMG_URL",SITE_URL."juhuodong/Public/admin/img/");
define("ADMIN_JS_URL",SITE_URL."juhuodong/Public/admin/js/");
define("ADMIN_UPLOAD_URL",SITE_URL."juhuodong/Public/admin/upload/");


define('APP_DEBUG',TRUE); // 开启调试模式
define('APP_NAME','Admin');  //应用名称
define('APP_PATH','./Admin/');//应用路径
require 'ThinkPHP/ThinkPHP.php';//应用核心文件

?>