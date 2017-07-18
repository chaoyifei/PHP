<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/18 0018
 * Time: 上午 9:15
 *数组
 */
//创建数组,自动分配ID键值
$cars=array("1","2","3");
//获取数组的长度
echo count($cars);
//遍历数值数组
$arrlength=count($cars);
for ($x=0;$x<$arrlength;$x++)
{
    echo $cars[$x];
}
//并联数组
$age=array("a"=>"1","b"=>"2","c"=>"3");
echo "a is".$age["a"]."years old";
//遍历关联数组
foreach ($age as $x=>$x_value)
{
    echo "key=".$x.",value=".$x_value;
}
?>