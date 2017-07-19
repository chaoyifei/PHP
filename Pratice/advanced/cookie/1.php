<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/19 0019
 * Time: 下午 14:33
 * PHP Cookie
 * cookie 常用于识别用户。cookie 是一种服务器留在用户计算机上的小文件。
 * 每当同一台计算机通过浏览器请求页面时，这台计算机将会发送 cookie。
 * 通过 PHP，您能够创建并取回 cookie 的值。
 */
//setcookie()函数用于设置cookie,且setcookie()函数必须位于<html>标签之前

//实例1：创建名为"user","cookie"，并为它赋值"runboob"

setcookie("user","runboob",time()+3600);

//<html>


//实例2：通过另一种方式设置cookie的过期时间

$expire=time()+60*60*24*30;
setcookie("user","runoob",$expire);

//<html>

//取回cookie的值放在页面上
//输出cookie值
echo $_COOKIE["user"];

//查看cookie值
print_r($_COOKIE);

?>
//下边实例中，我们使用isset()函数来确认是否已经设置了cookie
/*<html>
 *<head>
 *<meta charset="utf-8">
 *<title>菜鸟教程(runoob.com)</title>
 * </head>
 *<body>
 */

<?php
if (isset($_COOKIE["user"])){
    echo "欢迎".$_COOKIE["user"]."!<br>";
}
else
{
    echo "普通访客！<br>";
}
?>

