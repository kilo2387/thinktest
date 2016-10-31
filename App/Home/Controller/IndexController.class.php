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
    }
    
}