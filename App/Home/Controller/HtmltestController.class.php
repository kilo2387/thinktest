<?php
/**
 * Created by IntelliJ IDEA.
 * User: aike
 * Date: 16/10/12
 * Time: 上午9:00
 */

namespace Home\Controller;
use Think\Controller;

class HtmltestController extends Controller
{
    public function testArrayAction($id = '', $year='', $month='', $day='')
    {
        echo 'id是:'.$id;
        echo "<br>今年是:".$year.'年'.$month.'月'.$day.'日';
        $this->display('testarray');
    }

    /**
     * @param string $name
     * @param string $age
     */
    public function testRouteAction($name='', $age='')
    {
        echo $name.'今年'.$age.'岁';
    }
    /**
     *
     */
    public function routeLinkAction()
    {
        //redirect(U('home/contest/test'));
        echo U('html/2016/10').'<br>';
        echo U('Blog/read@blog.thinkphp.cn','id=1',true,false);die();
        $this->redirect(U('html/2016/10/1'));
    }


}