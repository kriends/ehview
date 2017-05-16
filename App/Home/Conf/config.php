<?php
return array(

//数据库配置
'DB_TYPE'               =>'mysql',  
'DB_HOST'               =>'localhost',  
'DB_NAME'               =>'ehview',  
'DB_USER'               =>'root',  
'DB_PWD'                =>'123456',  
'DB_port'               =>'3306',  
'DB_PREFIX'             =>'eh_',  
'DB_DSN'                =>'mysql://root:123456@localhost:3306/ehview',  
'SHOW_PAGE_TRACE'       =>true,//开启页面Trace

'TMPL_L_DELIM'          =>  '{',  // 模板引擎普通标签开始标记
'TMPL_R_DELIM'          =>  '}',  // 模板引擎普通标签结束标记
'TAGLIB_BEGIN'          =>  '<',  // 标签库标签开始标记
'TAGLIB_END'            =>  '>',  // 标签库标签结束标记


//模板配置
'LAYOUT_ON'             =>false,    //开启模板(true)
'LAYOUT_NAME'           =>'layout', //默认模板名称

//路由配置
'URL_ROUTER_ON'         =>true,   //开启路由
'URL_ROUTER_RULES'      =>array(  //定义路由规则

	'article/:year\d/:month\d' => array('Article/article', 'status=1'),
    'article/:name'               => 'Article/article',
    'article/article/:id'       => '/article/:1',
	
),

);