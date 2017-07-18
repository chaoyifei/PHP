<?php
/*
 * Created on 2017年7月17日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 *局部变量与全局变量
 */
 header("Content-type: text/html; charset=UTF-8"); 
 $x=5;//全局变量
 function mytest()
  {
  	$y=10;//局部变量
  	echo "<p>测试函数内部变量：<p>";
  	echo "变量x为：$x";
  	echo "<br>";
  	echo "变量y为：$y";
	
}
mytest();
echo "<p>测试函数外变量:<p>"; 
echo "变量 x 为: $x"; 
echo "<br>"; 
echo "变量 y 为: $y";
?>
