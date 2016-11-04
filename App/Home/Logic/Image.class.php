<?php
/**
 * Created by PhpStorm.
 * User: SEELE
 * Date: 2016/11/4
 * Time: 15:35
 */

/**
 * 我自己写的图片上传保存的类^_^
 * version1.0 实现了图片的接收和保存
 */
namespace Home\Logic;
class Image{
    public $hight = '';
    public $width = '';
    public $size = '';
    public $path = '';
    public function upload(){

    }

    public function save(){
        //这个是ThinkPHP的公共文件目录
        $source_path =  substr($_SERVER['SCRIPT_FILENAME'],0 ,-9);
        $storeFolder = C('UPLOAD_PATH');

        $ret = ['status'=>0, 'msg'=>'', 'data'=> ''];
        if(isset($_FILES['file']['name'])) {
            $tempFile = $_FILES['file']['tmp_name'];          //3
            $targetFile =  $source_path . $storeFolder. time() .'_'.$_FILES['file']['name'];  //5
            echo $targetFile;
            if(move_uploaded_file($tempFile,$targetFile)){
                $ret['status'] = 1;
                $ret['msg'] = '上传图片成功';
                $ret['data'] = $targetFile;
            }
            $ret = json_encode($ret);
            echo $ret;
        }
    }



}