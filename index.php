<?php
/*
*  入口文件
*/

//是否启用调试模式
define('DEBUG', true);
if (DEBUG) {
	ini_set('display_error', 'On');
} else {
	ini_set('display_error', 'Off');
}

//引入框架起始文件
require './core/start.php';