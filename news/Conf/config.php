<?php
return array(
	//'配置项'=>'配置值'
	'WWW_PATH'=>preg_replace('/[\w|.]*$/i', '', $_SERVER['SCRIPT_NAME']),//网站根目录，必须开启
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'newstest', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => 'lijun', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => 'dede_', // 数据库表前缀，请勿改动
	'IMG_BASE'	=> 'http://news.yangtzeu.edu.cn',//图片基路径，可以为磁盘路径或网络路径，使用磁盘路径最好
	'IMG_SCALE'	=>'true',//图片缩略开关
);
