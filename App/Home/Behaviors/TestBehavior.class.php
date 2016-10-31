<?php
/**
 * Created by IntelliJ IDEA.
 * User: aike
 * Date: 16/10/10
 * Time: 下午6:01
 */
namespace Home\Behaviors;

use Think\Behavior;

class TestBehavior extends Behavior
{
    //行为扩展的执行入口必须是run
    public function run(&$params)
    {
        if(C('TEST_PARAM'))
        {
            echo 'RUNTEST BEHAVIOR '.$params;
        }else{
            echo 'RUNTEST BEHAVIOR isn\'t define';
        }
    }
}
