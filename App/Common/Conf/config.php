<?php
return array(
    /**
     * 数据库设置
     */
    'DB_TYPE'               =>  'Mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'test',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
	//'配置项'=>'配置值'
    'URL_MODEL'             =>  2,          //URL模式
    'SESSION_AUTO_START'    =>  True,       //SESSION是否开启

    /**
     * 模块化设计
     */
    'DEFAULT_MODULE'        =>  'Home',     //默认模块
    'MODULE_ALLOW_LIST'     =>  array('Home','Admin'),  //允许的模块
    //'LOAD_EXT_CONFIG'       =>  'user,db',    //扩展配置,默认情况下设置的参数会并入项目中
    'MODULE_DENY_LIST'      =>  array('Common','Runtime','Api'),    // 设置禁止访问的模块列表,一般只用于内部访问的
    //'MULTI_MODULE'          =>  false,  //关闭多模块访问
    //'URL_PATHINFO_DEPR'=>'-',   // 更改PATHINFO参数分隔符
    /* 注册新的命名空间 */
    'AUTOLOAD_NAMESPACE'    => array(
                                    'My'     => THINK_PATH.'My',
                                    'One'    => THINK_PATH.'One',
                                ),

    'URL_ROUTER_ON'   => true,    //开启路由
    'ACTION_SUFFIX'         =>  'Action', // 操作方法后缀

    //'URL_PARAMS_BIND'       =>  false,    //关闭参数绑定功能,仅对PATHINFO地址有效
    'URL_HTML_SUFFIX'       =>  'html',     //设置静态后缀
    //'URL_HTML_SUFFIX'       =>  'html|shtml|xml',

   // 'URL_CASE_INSENSITIVE' =>false,
    'VAR_ADDON'     =>  'plugin',   //定义插件控制器
    //'ACTION_BIND_CLASS'     =>  true,   //操作绑定到类

























);