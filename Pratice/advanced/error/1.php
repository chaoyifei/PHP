<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/19 0019
 * Time: 下午 16:21
 *
 * 错误处理
 */
//基本的错误处理：使用die()函数
if(!file_exists("welcome.txt")){
    die("文件不存在");
}
else
{
    $file=fopen("welcome.txt","r");
}

//创建自定义的错误处理器：

function customError($errno,$errstr){
    echo "<b>Error:</b> [$errno] $errstr<br>";
    //echo "脚本结束";
    //die();
    set_error_handler("customError");
    //触发错误
    echo ($test);
}
//