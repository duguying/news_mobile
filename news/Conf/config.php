<?php
return array(
	//'配置项'=>'配置值'
	'WWW_PATH'=>preg_replace('/[\w|.]*$/i', '', $_SERVER['SCRIPT_NAME']),//网站根目录，必须开启
);
