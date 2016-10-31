<?php
/**
 * Created by IntelliJ IDEA.
 * User: aike
 * Date: 16/10/10
 * Time: 下午2:07
 */

namespace Home\Controller;
use Think\Controller;
//use Home\Logic;
//


class ConfigController extends Controller
{
    /**
     * C方法读取配置
     */
    public function getConfig()
    {
        //因为配置参数是全局有效的,因此C方法可以在任何地方读取任何配置即使某个参数已经生效过期了
        $model = C('URL_MODEL');
        $conf = C('MODULE_ALLOW_LIST.1');
        var_dump($conf);
    }

    /**
     * C方法动态配置
     */
    public function activeConfigAction()
    {
        C('DATA_CACHE_TIME',60);
        $conf = C('DATA_CACHE_TIME');
        var_dump($conf);
    }

    /**
     * 自定义的行为Behavior
     * @行为绑定:绑定到tags.php里面,然后可以自定义Listen
     * @执行顺序:先系统,后应用绑定的..Listen的可以插入中间
     * @单独执行:B()方法可以触发一个行为
     */
    public function testBehavior(){
        \Think\Hook::listen('my_tag');
        //B('Home\Behavior\TestBehavior');
    }

    /**
     * 手动import其他类库
     */
    public function testNamesAuth()
    {
        //echo THINK_PATH.'Org\Util\Arr.class.php';
        //echo C('Org\Util\Arr');
        import("Org.Util.Arr");
        import("Org.Util.Test");
        $authModel = new \Arr();

        $testModel = new \Test();
        echo $testModel->etest().'<br>';

        echo $authModel->test();
    }


}