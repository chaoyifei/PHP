<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/18 0018
 * Time: 下午 21:19
 * 多维数组
 */
//二维数组
$cars=array(
    array('a',2,3),
    array('b',3,4),
    array('c',3,4)
);

//实例
$sites=array(
    "runoob"=>array(
        "菜鸟教程",
        "http://www.runoob.com"
    ),
    "goole"=>array(
        "google 搜索",
        "http://www.google.com"
    ),
    "taobao"=>array(
        "淘宝",
        "http://www.taobao.com"
    )
);

print("<pre>");//格式化输出数组
print_r($sites);
print("</pre>");


echo $sites['runoob'][0].'地址为：'.$sites['runoob'][1];
?>
