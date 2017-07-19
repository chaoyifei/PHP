<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/18 0018
 * Time: 下午 22:22
 * PHP文件处理
 */
$file=fopen("a.txt","r");

$file=fopen("a.txt","r") or exit("Unable to open file!");

//关闭文件
$file=fopen("test.txt","r");

fclose($file);


//检测文件末尾,在循环遍历未知长度的数据时，feof() 函数很有用
if (feof($file)) echo "文件结尾";


//逐行读取文件

$file=fopen("a.txt","r") or exit("文件无法打开");
//读取文件每一行，直到文件结尾
while (!feof($file))
{
    echo fgets($file)."<br>";

}
fclose($file);

//逐字符读取文件
$file=fopen("a.txt","r") or exit("文件无法打开");
while (!feof($file))
{
    echo fgetc($file);

}
fclose($file);


