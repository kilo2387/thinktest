<?php
/**
 * 每个模块会自动加载自己的配置文件（位于Application/当前模块名/Conf/config.php）。
 */
return array(
	//'配置项'=>'配置值'
    /**
     * 路由表达式 => 路由地址和传入参数 or array('路由表达式','路由地址','传入参数')
     * 路由表示式:在URL中显示出来的规则
     * 路由地址和传入参数:后面元素值部分是实际的URL地址和参数
     * 路由表达式中如果以 : 开头,表示动态变量,否则为静态地址
     * 格式2
     */
    'URL_ROUTE_RULES'      => array(
                                'news/:year/:month/:day' => array('News/archive', 'status=1'),
                                'news/:id'               => 'News/read',
                                'news/read/:id'          => '/news/:1',
                                'my'                     => 'htmltest/testArray',
                                'get/:id'                => 'htmltest/testArray',
                                //html/2016/10/12   ->  htmltest/testArray?year=2016&month=10&day=12
                                'html/:year/:month/:day' => 'htmltest/testArray',
                                //':name\d/:age' 这样name只能写数字了,否则访问不到
                                //加个[]表示可选的参数
                                'select/:name/[:age\d]'  => 'htmltest/testRoute',
                                //':name/:age|md5'         => 'htmltest/testRoute',
                                'hom/:name^htmltest'     => 'htmltest/testRoute',
                                'all/:cate$'             => 'htmltest/testRoute',
                            ),
    //'URL_CASE_INSENSITIVE' => true,
);