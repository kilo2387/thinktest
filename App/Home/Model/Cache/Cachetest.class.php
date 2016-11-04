<?php
/**
 * Created by PhpStorm.
 * User: SEELE
 * Date: 2016/11/3
 * Time: 10:59
 */

namespace Home\Model\Cache;
use Think\Cache\Driver\Memcache;
use Think\Cache;

/**
 * Class Cachetest  Memcache的扩展类
 * @package Home\Model\Cache
 */
class Cachetest extends Memcache
//class Cachetest extends Cache
{

    /**
     * 架构函数
     * @param array $options 缓存参数
     * @access public
     */
    function __construct($options=array()) {
        if ( !extension_loaded('memcache') ) {
            E(L('_NOT_SUPPORT_').':memcache');
        }

        $options = array_merge(array (
            'host'        =>  C('MEMCACHE_HOST') ? : '127.0.0.1',
            'port'        =>  C('MEMCACHE_PORT') ? : 11211,
            'timeout'     =>  C('DATA_CACHE_TIMEOUT') ? : false,
            'persistent'  =>  false,
        ),$options);

        $this->options      =   $options;
        $this->options['expire'] =  isset($options['expire'])?  $options['expire']  :   C('DATA_CACHE_TIME');
        $this->options['prefix'] =  isset($options['prefix'])?  $options['prefix']  :   C('DATA_CACHE_PREFIX');
        $this->options['length'] =  isset($options['length'])?  $options['length']  :   0;
        $func               =   $options['persistent'] ? 'pconnect' : 'connect';
        $this->handler      =   new \Memcache;
        $options['timeout'] === false ?
            $this->handler->$func($options['host'], $options['port']) :
            $this->handler->$func($options['host'], $options['port'], $options['timeout']);
    }
    /**
     * 读取缓存
     * @param $name string 缓存key
     * @return mixed
     */
//    public function get($name)
//    {
//
//    }

    /**
     * 写入(修改)
     * @param $name string 缓存变量名
     * @param $value mixed $vlaue 存储数据
     * @param null $expire int 有效时间
     * @return boolean
     */
//    public function set($name, $value, $expire = null)
//    {
//
//    }

    /**
     * 删除缓存
     * @param $name
     * $return boolean
     */
//    public function rm($name)
//    {
//
//    }

    /**
     * 清除缓存
     * @return boolean
     */
//    public function clear()
//    {
//
//
//    }
}