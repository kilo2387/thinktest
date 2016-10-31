<?php
/**
 * Created by IntelliJ IDEA.
 * User: aike
 * Date: 16/10/10
 * Time: 下午3:29
 */
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
echo 'admin.php入口'.'<br>';
//define('BIND_MODULE', 'Admin');
//define('BIND_CONTROLLER','Index'); // 绑定Index控制器到当前入口文件
define('APP_PATH', '../App/');
require '../Frame/ThinkPHP.php';