<?php
/*
*  框架起始文件
*/

//定义基本信息
define('ROOT_PATH', realpath('./'));
define('CORE', ROOT_PATH.'/core');
define('APP', ROOT_PATH.'/app');
//引入关键文件
include CORE.'/function.php';
include CORE.'/main.php';
//自动注册类
spl_autoload_register('\core\main::load');
//启动框架
\core\main::run();