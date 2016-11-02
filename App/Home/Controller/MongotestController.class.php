<?php
/**
 * Created by PhpStorm.
 * User: SEELE
 * Date: 2016/11/2
 * Time: 10:22
 */

namespace Home\Controller;
use Think\Controller;
use Think\Db\Driver\Mongo;
use Think\Model\MongoModel;

class MongotestController extends Controller
{
    public function indexAction(){
        echo "what is this version";
    }
    public function insertAction()
    {
        /**
         * class MongoModel 是mongodb的工具类
         * class Mongo 是mongodb的接口
         */
//        $mongoModel = new MongoModel();
//        $mongoDB = $mongoModel->db = 'test';
//        $mongoDB = new Mongo();

        $m = new \MongoClient(); # 连接默认主机和端口为：mongodb:#localhost:27017
        $db = $m->test; # 获取名称为 "test" 的数据库
        $collection = $db->createCollection("runoob");
        $document = array(
            "title" => "MongoDB",
            "description" => "database",
            "likes" => 100,
            "url" => "http:#www.runoob.com/mongodb/",
            "by", "菜鸟教程"
        );
        $result = $collection->insert($document);
        var_dump($result);
        echo "数据插入成功";


    }

    public function readAction()
    {
        $m = new \MongoClient(); # 连接默认主机和端口为：mongodb:#localhost:27017
        $db = $m->test; # 获取名称为 "test" 的数据库
        $collection = $db->createCollection("runoob");
        $cursor = $collection->find();

        // 迭代显示文档标题
        foreach ($cursor as $document) {
//            var_dump($document);
            echo $document[0] . "\n";
        }


    }
}