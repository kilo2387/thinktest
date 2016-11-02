<?php
/**
 * Created by PhpStorm.
 * User: SEELE
 * Date: 2016/11/2
 * Time: 10:59
 */
namespace Home\Controller;
use Think\Controller;
/**
 * memcached的使用
 */
class MemTestController extends Controller
{
    public function readAction()
    {
        echo time();
    }
}