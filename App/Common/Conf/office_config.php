<?php
/**
 * Created by IntelliJ IDEA.
 * User: aike
 * Date: 16/10/10
 * Time: 上午11:54
 */

/**
 * 每个应用都可以在不同的情况下设置自己的状态（或者称之为应用场景），
 * 并且加载不同的配置文件。
 * 举个例子，你需要在公司和家里分别设置不同的数据库测试环境。
 * 那么可以这样处理，在公司环境中，
 * 我们在入口文件中定义：define('APP_STATUS','office_config');
 */