<?php
/**
 * Created by PhpStorm.
 * User: SEELE
 * Date: 2016/11/3
 * Time: 14:44
 */

namespace Home\Controller;
use Home\Logic\Image;
use Think\Controller;

class UpImageController extends Controller
{


    /**
     * 处理文件上传
     * class Image 图片上传的封装类(未完整)
     */
    public function uploadAction()
    {
        if($_FILES){
            $up_model = new Image();
            $up_model->save();
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

    public function headPhotoAction(){

        if(IS_POST){
            $head_model = new Image();
            $head_model->save();
        }
        $this->display();
    }
}