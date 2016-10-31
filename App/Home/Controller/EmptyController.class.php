<?php
/**
 * Created by PhpStorm.
 * User: zheng
 * Date: 2016-10-17
 * Time: 14:56
 */
namespace Home\Controller;
use Think\Controller;

class EmptyController extends Controller
{
    public function indexAction()
    {
        $cityName = CONTROLLER_NAME;
        $this->city($cityName);
    }
    /**
     * 注意city方法本身是prot
     */
    protected function city($name)
    {
        echo '当前城市：'.$name;
    }
}