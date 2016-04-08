<?php
return array(
	//'配置项'=>'配置值'
	'URL_MODEL'=>2,//设置url模式为重写模式
	'DB_TYPE'=>'mysql',
	'DB_HOST'=>'localhost',
	'DB_USER'=>'root',
	'DB_PWD'=>'root',
	'DB_PORT'=>3306,
	'DB_NAME'=>'software_1',
	'DB_PREFIX'=>'cy_',//设置数据库表前缀
	'DB_RW_SEPARATE'=>true,
	'SHOW_PAGE_TRACE'=>true,//开启Think调试工具
	'URL_HTML_SUFFIX'=>'html',//设置伪静态的后缀名
	'URL_DENY_SUFFIX' => 'pdf|ico|png|gif|jpg'//禁止访问这类后缀的文件
);