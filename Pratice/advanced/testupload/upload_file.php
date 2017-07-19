<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/18 0018
 * Time: 下午 22:49
 * 上传文件
 */

//允许上传的图片后缀
$alloweExts=array("gif","jpeg","jpg","png");
$temp=explode(".",$_FILES["file"]["name"]);
$extension=end($temp);  //获取文件后缀名
if((($_FILES["file"]["type"]=="image/gif")
||($_FILES["file"]["type"]=="image/jpeg")
||($_FILES["file"]["type"]=="image/jpg")
||($_FILES["file"]["type"]=="image/pjeng")
||($_FILES["file"]["type"]=="image/x-png")
||($_FILES["file"]["type"]=="image/gpng"))
&&($_FILES["file"]["size"]<204800) &&in_array($extension,$alloweExts))
{
    if ($_FILES["file"]["error"] > 0) {
        echo "错误：" . $_FILES["file"]["error"] . "<br>";

    } else
        {
        echo "上传文件名为：" . $_FILES["file"]["name"] . "<br>";
        echo "文件类型：" . $_FILES["file"]["type"];
        echo "文件大小：" . ($_FILES["file"]["size"] / 1024) . "KB<br>";
        echo "文件临时存储位置：" . $_FILES["file"]["tmp_name"] . "<br>";
        //上传文件存储
        //判断当前目录下upload的文件是否存在
        //如果没有upload目录，则需要创建，upload目录权限为777
        if (file_exists("upload/" . $_FILES["file"]["name"]))
        {
            echo $_FILES["file"]["name"] . "文件已经存在";
        }
        else
            {
            //如果upload不存在该文件则将文件上传到upload目录下
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
            echo "文件存储在：" . "upload/" . $_FILES["file"]["name"];
            }
    }
}
else
{
    echo "文件格式非法";
}
?>