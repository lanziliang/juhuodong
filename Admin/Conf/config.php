<?php
return array(
	//'配置项'=>'配置值'
        
    //设置路由模式
    //'URL_MODEL'             =>0,
    
    
    /* 数据库设置 */
    'DB_TYPE'               => 'mysql',     // 数据库类型
    'DB_HOST'               => 'localhost', // 服务器地址
    'DB_NAME'               => 'juhuodong',          // 数据库名
    'DB_USER'               => 'root',      // 用户名
    'DB_PWD'                => '1234abcd',          // 密码
    'DB_PORT'               => '',        // 端口
    'DB_PREFIX'             => 'tp_',    // 数据库表前缀
    'DB_FIELDTYPE_CHECK'    => false,       // 是否进行字段类型检查
    'DB_FIELDS_CACHE'       => true,        // 启用字段缓存
    
    //修改模版引擎为smarty
    'TMPL_ENGINE_TYPE'		=>  'Smarty',     // 默认模板引擎
    
    //在页面底部显示日志信息
    'SHOW_PAGE_TRACE'   => true,   // 显示页面Trace信息
    
    
    'TMPL_ACTION_SUCCESS'   => './Admin/Tpl/dispatch_jump.tpl', // 默认成功跳转对应的模板文件
    'TMPL_ACTION_ERROR'     => './Admin/Tpl/dispatch_jump.tpl', // 默认错误跳转对应的模板文件
);
?>