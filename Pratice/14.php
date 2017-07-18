<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/18 0018
 * Time: 上午 10:34
 * 类，实例，对象
 */
class Site{
    //成员变量，类的变量使用var来声明，变量也可以初始化值
    var $url;
    var $title;
    //成员函数
    function setUrl($par){
        $this ->url=$par;
    }
    function getUrl(){
        echo $this->url.PHP_EOL;
    }
    function setTitle($par){
        $this->title=$par;
    }
    function getTitle(){
        echo $this->title.PHP_EOL;
    }
}
$runboob=new Site;
$taobao=new Site;
$google=new Site;
//调用成员函数，设置标题和URL
$runboob->setTitle("菜鸟教程");
$taobao->setTitle("淘宝");
$google->setTitle("google搜索");

$runboob->setUrl( 'www.runoob.com' );
$taobao->setUrl( 'www.taobao.com' );
$google->setUrl( 'www.google.com' );

//调用成员函数，获取获取标题和URL；
$runboob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runboob->getUrl();
$taobao->getUrl();
$google->getUrl();


//构造函数
//构造函数 ，是一种特殊的方法。主要用来在创建对象时初始化对象， 即为对象成员变量赋初始值，总与new运算符一起使用在创建对象的语句中。
function __construct($par1,$par2){
    $this->url=$par1;
    $this->title=$par2;
}


//实例

$runboob = new Site('www.runoob.com', '菜鸟教程');
$taobao = new Site('www.taobao.com', '淘宝');
$google = new Site('www.google.com', 'Google 搜索');

// 调用成员函数，获取标题和URL
$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runoob->getUrl();
$taobao->getUrl();
$google->getUrl();
?>