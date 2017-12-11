<?php
/**
 * 框架基类
 */

namespace core;

use app\controller\Index;
class main
{
	static public $classMap = [];  //已加载的类
    /**
     * 构造函数
     */
    public function __construct()
    {
        //构造函数
    }

    //框架运行函数
    static public function run()
    {
    	$index = new Index();
    	$index->index();
    }
    
    //自动加载类
    static public function load($class)
    {
    	if (isset($classMap[$class])) {
    		return true;
    	} else {
	    	$class = str_replace('\\', '/', $class);
	    	$file  = ROOT_PATH . '/' . $class . '.php';
	    	if (is_file($file)) {
	    		include $file;
	    		self::$classMap[$class] = $class;
	    	} else {
	    		return false;
	    	}
    	}
    }
}