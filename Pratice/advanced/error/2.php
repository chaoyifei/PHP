<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/19 0019
 * Time: 下午 16:53
 */
// 错误处理函数
function customError($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "脚本结束";
    die();
}
//设置错误处理函数
set_error_handler("customError",E_USER_WARNING);
//触发错误
$test=2;
if($test>1){
    trigger_error("变量值必须小于1",E_USER_WARNING);
}
?>