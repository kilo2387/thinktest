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
    public function upload()
    {
        $upload = new \Think\Upload();// 实例化上传类a
        $upload->maxSize = 3145728 ;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath = './Public/Uploads/'; // 设置附件上传目录
        // 上传文件
        $info = $upload->upload();
        if(!$info) {
        // 上传错误提示错误信息
            $this->error($upload->getError());
        }else
        {
        // 上传成功
            echo json_encode($info['file']['savepath'].$info['file']['savename']);
        }
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

    public function upAction($browse_button='upload_file', $size = 2)
    {
        $upload_url = C('upload_url');
        $size = (int)$size.'mb';
echo '464';
        $html = <<<Eof
<script type="text/javascript" src="/public/plupload/plupload.full.min.js"></script>
<script type="text/javascript" src="/public/plupload/i18n/zh_CN.js"></script>
<script language="javascript">
//实例化一个plupload上传对象
var uploader = new plupload.Uploader({
browse_button : '$browse_button' //触发文件选择对话框的按钮，为那个元素id
url : '$upload_url' //服务器端的上传页面地址
flash_swf_url : '/public/plupload/Moxie.swf' //swf文件，当需要使用swf方式进行上传时需要配置该参数
silverlight_xap_url : '/public/plupload/Moxie.xap' //silverlight文件，当需要使用silverlight方式进行上传时需要配置该参数
filters : {
max_file_size : '$size'
mime_types: [
{title : "Image files" extensions : "jpggifpng"}
]
}
init: {
//选择文件
FilesAdded: function(upfiles){
layer.load();//提示加载效果
uploader.start();
}
//单个文件上传完成
FileUploaded: function(upfileresult){
layer.closeAll('loading');//关闭加载效果
show_upload($.parseJSON(result.response));//成功回调函数
}
//全部文件上传完成
UploadComplete: function(upfiles){
layer.closeAll('loading');//关闭加载效果
}
//返回错误
Error: function(uperr){
layer.closeAll('loading');//关闭加载效果
layer.msg(err.message);
}
}
});
uploader.init();
</script>
Eof;
        echo $html;
    }

}