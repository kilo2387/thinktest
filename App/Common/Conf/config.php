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

    //'DEFAULT_V_LAYER'   =>  'Template',     //设置默认的视图层名称
    //'TMPL_TEMPLATE_SUFFIX'  =>  '.tpl',     //设置模板文件的默认后缀
    //'VIEW_PATH'     =>  './Theme/',     //单独定义某个模块的视图目录
    //同时定义了TMPL_PATH常量和VIEW_PATH设置参数，那么以当前模块的VIEW_PATH参数设置优先
    //'DEFAULT_THEME'     =>  'default',      //设置默认的模板主题
    //设置的模板主题，需要在视图目录下面创建对应的主题目录
    //'TMPL_FILE_DEPR'    =>  '_',     //模板目录结构 user/read.html -> user_read.html
    'TMPL_LOAD_DEFAULTTHEME'    =>  true,   //开启差异主题设置

   //'TMPL_L_DELIM'      =>  '{',   //模板的左标签
   //'TMPL_R_DELIM'      =>  '}',   //模板的右标签





























);