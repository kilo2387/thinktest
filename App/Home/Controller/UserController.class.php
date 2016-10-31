<?php
/**
 * Created by PhpStorm.
 * User: zheng
 * Date: 2016-10-17
 * Time: 16:16
 */
namespace Home\Controller;
use Home\Model\UserModel;
use Think\Controller;
class UserController extends Controller
{
    public function readAction()
    {
        $user = M('User');
        $result = $user->_sql();
        var_dump($result);

        /**
         * 三种实例化方式
         * @$connection 两种格式
         * 1：DSN格式  --> 'mysql://root:1234@localhost/demo'
         * 2：数组格式
         */
        $connection = array(
            'db_type' => 'mysql',
            'db_host' => '127.0.0.1,192.168.0.250,192.168.0.251',
            'db_user' => 'root',
            'db_pwd' => '',
            'db_port' => 3306,
            'db_name' => 'test',
            'db_charset' => 'utf8',
            //如果需要的话可以传入更多参数，包括数据的部署模式和调试模式
            'db_rw_separate' => true,
            'db_debug' => true,
            //PS1：如果设置了db_debug参数，那么数据库调试模式就不再受APP_DEBUG常量的影响
            //PS2：这些配置也可以写到config文件里面，直接使用配置数组的键就行了
        );
        $user = new \Home\Model\UserModel();
        $new = new \Home\Model\NewModel('模型名','数据表前缀',$connection);

        $model = D('Home/User');
        //实例化Extend扩展命名空间下的Info模型，跨模块实例化模式类的时候不支持
        $extend = D('Extend://Editor/Info');
        //M方法性能更高，支持跨库操作
        $model = M('db_name.User','think_');

        $model = M();   //or new Model();
        $model->query('SELECT*FROM think_user WHERE status = 1');
    }
}