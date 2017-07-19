<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/19 0019
 * Time: 下午 17:01
 * 通过 E-Mail 发送错误消息
 */
//错误处理函数
function customError($errno,$errstr){
    echo "<b>Error:</b> [$errno] $errstr<br>";
	echo "已通知网站管理员";
	error_log("Error: [$errno] $errstr",1,
        "someone@example.com","From: webmaster@example.com");
}
//设置错误处理函数
set_error_handler("customError",E_USER_WARNING);

//  触发错误
$test=2;
if ($test>1){
    trigger_error("变量值必须小于1",E_USER_WARNING);
}