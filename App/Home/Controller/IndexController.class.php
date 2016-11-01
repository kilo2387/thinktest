<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function indexAction(){
        echo "what is this version";
    }

    public function shuchuAction($id='',$page='')
    {
        echo $page.'hello'.$id;


        /**
         * [模块@][控制器:][操作]支持跨模块 模板主题、可以和theme方法配合
         * 直接输出完整的模板文件名（包括模板后缀）
         */
        $this->theme('default')->display('shuchu');//动态输出改变模板主题
    }
    public function showAction()
    {
        //echo '$thsdgk;k;';
        //echo T('Public/menu');


        $name = 'jieguangyao';

        $this->assign('name',$name);
        $this->display();
        //fetch返回模板的字符串
        //$content = $this->display();

    }
    
}