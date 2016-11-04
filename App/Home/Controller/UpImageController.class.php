<?php
/**
 * Created by PhpStorm.
 * User: SEELE
 * Date: 2016/11/3
 * Time: 14:44
 */

namespace Home\Controller;
use Think\Controller;

class UpImageController extends Controller
{

    //处理文件上传
    public function uploadAction()
    {
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

//        $upload = new \Think\Upload();// 实例化上传类a
//        $upload->maxSize = 3145728 ;// 设置附件上传大小
//        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
//        $upload->savePath = './Public/Uploads/'; // 设置附件上传目录
//        // 上传文件
//        $info = $upload->upload();
//        if(!$info) {
//        // 上传错误提示错误信息
//            $this->error($upload->getError());
//        }else
//        {
//        // 上传成功
//            echo json_encode($info['file']['savepath'].$info['file']['savename']);
//        }
    }

    //加载上传插件

    public function indexAction()
    {

        $this->display();
    }
    public function form()
    {
        dump($_POST);
    }



}