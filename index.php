<?php

// +----------------------------------------------------------------------
// | ThinkPHP通用后台管理系统
// +----------------------------------------------------------------------
// | Copyright (c) 2013 www.4u4v.net All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 水木清华 <admin@4u4v.net>
// +----------------------------------------------------------------------

/**
 * 单一入口模式
 */
 
//error_reporting(0);
@set_time_limit(300);
//@ini_set("memory_limit",'-1');
define('APP_DEBUG', true);				//是否开启调试模式
require("./core/Conf/define.php");
require(THINK_PATH."/ThinkPHP.php");	//加载框架入口文件