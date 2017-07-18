<?php
/*
 * Created on 2017年7月17日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 *条件语句
 *
 */
 $t=date("H");
 if ( $t<20 ) {
	echo "Have a good day";
}
else {
	echo "Have a good nignt";
}


if ( $t<"10" ) {
	echo "Have a good moring";
}
elseif ( $t<"20") {
	echo "Have a good day";
}
else {
	echo "Have a good night";
}

//switch语句
switch (n)
{
	case label1:
		break;
	case label2:
		break;
	case label3:
		break;
	default:
		//如果n不等于以上，此处代码将被执行

}



?>
