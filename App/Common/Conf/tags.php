<?php
/**
 * Created by IntelliJ IDEA.
 * User: aike
 * Date: 16/10/11
 * Time: 上午8:52
 */
/**
 * 行为标签配置页
 * $key:标签(位),包括系统标签和应用中自己定义的标签.
 * $value:行为类(可以有多个按顺序触发),包括系统的行为和自己定义的行为
 * @自己定义的标签要Listen才可以触发:添加My_tag标签侦听
 * \Think\Hook::listen('my_tag', $params);
 * @$params 必须一个引用传递的参数,所以一定是一变量(数组)
 */
return array(
    'my_tag' => array('Home\Behaviors\TestBehavior'),
);