<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript" src=""></script>
    <script src="/Public/dropzone/dist/dropzone.js"></script>
    <link rel="stylesheet" href="/Public/dropzone/dist/dropzone.css">
    <script src="/Public/js/jquery.min.js"></script>
</head>
<body>
<div id="dropz" class="dropzone"></div>

</body>
</html>
<script>
    Dropzone.autoDiscover = false;
    var dropz = new Dropzone("#dropz",{
        url : 'upload',
        maxFiles : 10,
        maxFilesize : 512,
        acceptedFiles : ".jpg"
    });


</script>