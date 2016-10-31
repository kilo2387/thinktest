<?php
/**
 * Created by PhpStorm.
 * User: zheng
 * Date: 2016-10-17
 * Time: 16:06
 */
namespace Home\Model;
use Think\Model;
class UserModel extends Model
{
    /**
     * @var string
     * tableName会转换大小写，trueTableName不区分大小写
     */
    protected $tableName = '';  //设置表名
    protected $tablePrefix = '';    //设置表前缀
    protected $trueTableName = '';  //全表名
    protected $dbName = '';     //数据库名
}