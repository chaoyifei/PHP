<?php
/*
 * Created on 2017年7月17日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 *常量
 *设置常量，使用 define() 函数，函数语法如下
 *bool define ( string $name , mixed $value [, bool $case_insensitive = false ] )
 *name：必选参数，常量名称，即标志符。
 *value：必选参数，常量的值。
 *ase_insensitive ：可选参数，如果设置为 TRUE，该常量则大小写不敏感。默认是大小写敏感的。
 *
 */
 define("GREETING","欢迎访问");//默认对大小写不敏感
 echo GREETING;
 echo '<br>';
 echo greeting;
 
 
 //不区分大小写的常量
 
 define("GREETING","欢迎访问"，true);
 echo greeting;
 
 //常量是全局的 
 
 define("GREETING","欢迎访问");
 function myTest() {
 	echo GREETING;
	
}
myTest();
 
?>
