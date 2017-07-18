<?php
/*
 * Created on 2017年7月17日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 *全局变量可以存储在一个$GLOBALS[index]数组中
 */
$x=5;
$y=10;

function myTest() {
	$GLOBALS['y']=$GLOBALS['X']+$GLOBALS['y'];
	
} 
myTest();
echo $y;
?>
