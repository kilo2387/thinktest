<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="EdieLei" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport">
    <title>HTML5 图片上传预览</title>
    <style>
        #photo{ width:100px; height:100px; margin:auto; margin-top:100px; background:#0cc; border-radius:100px;}
        #photo img{ width:100px; height:100px; border-radius:50px;}
    </style>
    <script src="/Public/js/jquery.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $('#img').change(function() {
                var file = this.files[0];
                var r = new FileReader();
                r.readAsDataURL(file);
                $(r).load(function() {
                    $('#photo').html('<img src="' + this.result + '" alt="" />');
                })
            })
        })

//       $(function () {
//           $('#sub_btn').click(function () {
//
//               $.ajax({
//                   type: 'post',
//                   data: $('#headForm').serialize(),
//                   url: 'headphoto',
//                   success: function (ret) {
//                       if (ret['status'] == 1) {
//                           alert('OK');
//                       } else {
//                           alert('no!!');
//                       }
//                   }
//               });
//           });
//       });

        function saveReport() {
// jquery 表单提交
            $("#headForm").ajaxSubmit(function(message) {
// 对于表单提交成功后处理，message为提交页面saveReport.htm的返回内容
            });

            return false; // 必须返回false，否则表单会自己再做一次提交操作，并且页面跳转
        }
    </script>
</head>
<body>
<h3>HTML5 图片上传预览</h3>
    <form id="headForm" action="headphoto" method="post" onsubmit="return saveReport();" enctype="multipart/form-data">
        <input id="img" type="file" accept="image/*" name="file"/>
        <div id="photo"></div>
        <input type="submit" value="上传头像" id="sub_btn"/>
    </form>
</body>
</html>