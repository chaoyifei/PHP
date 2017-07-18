<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/18 0018
 * Time: 上午 10:11
 * while循环
 */
$i=1;
while ($i<=5)
{
    echo "the number is ". $i ."<br>";
    $i++;
}

// do ... while 循环

$i=1;
do
{
    $i++;
    echo "The number is ". $i."<br>";
}
while($i<=5);
?>