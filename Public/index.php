<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
echo 'index.php入口'.'<br>';
// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false 调试模式下Runtime/logs下会有操作信息记录
define('APP_DEBUG',True);

// 定义应用目录
define('APP_PATH','../App/');

//定义应用运行时目录
define('RUNTIME_PATH', '../Runtime/');

//定义安全文件
define('DIR_SECURE_FILENAME', 'secure.html');
//define('BUILD_DIR_SECURE', false); //不生成安全文件

define('THINK_PATH', realpath('../Frame').'/');
// 引入ThinkPHP入口文件
require THINK_PATH . 'ThinkPHP.php';

//require './Frame/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单

//define('STORAGE_TYPE', '存储类型默认为file');
//define('APP_MODE', '应用模式默认为common');
//define('CONF_EXT','.ini');     //配置文件的后缀名
//define('APP_STATUS','office_config');    //配置状态配置
//define('COMMON_PATH', './Common');    //重新定义公共模块的位置
/**
 * define('BIND_MODULE','Admin'); 绑定Admin模块到当前入口文件,自动生成目录
 * define('BIND_CONTROLLER_LIST','Index,User,Menu'); 批量生成控制器
 * define('BIND_MODEL_LIST','User,Menu'); 批量生成模型
 */

//$id = $_GET['id'];
//echo $id;
//array();
//json;
//xml;