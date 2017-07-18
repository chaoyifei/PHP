<?php
/*
 * Created on 2017年7月17日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 *数据类型
 */
 //整型  var_dump()函数返回变量的数据类型
 $x=5985;
 var_dump($x);
 //数组
 $cars=array("volvo","BMW","toyota");
  var_dump($cars);
  //对象
  class Car {
	function Car($color="green") {
		$this->color=$color;
	}
	function what_color() {
		return $this->color;
	
  }
}

//NULL空值

$x=null;
var_dump($x);
?>
