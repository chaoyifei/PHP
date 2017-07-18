<?php
/*
 * Created on 2017年7月17日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 *全局变量关键字
 *方法内使用全部变量需要加关键字global
 */
 
$x=5;
$y=10;


function myTest() 
{
	global $x,$y;
	$y=$x+$y;
	
}
myTest();
echo $y;
?>
