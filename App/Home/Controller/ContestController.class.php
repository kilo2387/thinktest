<?php
/**
 * Created by IntelliJ IDEA.
 * User: aike
 * Date: 16/10/12
 * Time: 下午5:44
 */

namespace Home\Controller;
use Think\Controller;

class ContestController extends Controller
{
    public function updateAction()
    {
        if (IS_POST) {
            $user = M('User');
            $user->create();
            $user->save();
            $this->success('baocunwancheng');
        } else {
            $this->error('feifacaozuo');
        }
    }

    /**
     * @param $name 城市名
     */
    protected function city($name)
    {
        $name = substr($name,0,-6);
        echo '当前城市：'.$name;
    }

    /**
     * @param $name 城市名
     */
    public function _empty($name)
    {
        //把所有城市的操作解析到city方法
        $this->city($name);
    }
}
