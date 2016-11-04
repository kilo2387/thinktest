<?php
/**
 * Created by PhpStorm.
 * User: SEELE
 * Date: 2016/11/2
 * Time: 10:59
 */
namespace Home\Controller;
use Home\Model\Cache\Cachetest;
use Think\Controller;
/**
 * memcached的使用
 */
class MemTestController extends Controller
{
    public function readAction()
    {
        /**
            S(array(
                    'type'=>'memcache',
                    'host'=>'192.168.1.10',
                    'port'=>'11211',
                    'prefix'=>'think',
                    'expire'=>60)
            );
         */
        //S('test','hello memcache');
        //可以在config文件配置
        $memModel = new Cachetest(array(
                'type'=>'memcache',
                'host'=>'localhost',
                'port'=>'11211',
                'prefix'=>'think',
                'expire'=>0)
        );
        //$memValue = $memModel->set('name', 'uyupp');
        if($memModel) {
            echo $memModel->get('name'); //输出hello memcache表示成功
            //$memModel->rm('name');
        }else{
            echo '没有name这个值';
        }
    }
}