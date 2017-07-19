<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/19 0019
 * Time: 下午 15:10
 * PHP session 变量用于存储关于用户会话（session）的信息，或者更改用户会话（session）的设置。
 * Session 变量存储单一用户的信息，并且对于应用程序中的所有页面都是可用的。
 */

//存储session变量
session_start();
//存储session数据
$_SESSION['views']=1;
?>
<html>
<head>
    <meta charset="utf-8">
    <title>菜鸟教程(runoob.com)</title>
</head>
<body>
<?php
//检索session数据
    echo "浏览量：".$_SESSION['views'];
?>
</body>
</html>>






