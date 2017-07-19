<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/19 0019
 * Time: 下午 20:56
 *异常的基本使用
 */
//创建一个有异常处理的函数
function checkNum($number)
{
    if($number>1){
        throw  new Exception("Value must be 1 or below");
    }
    return true;
}
//触发异常
checkNum(2);
?>

<?php
//Try、throw 和 catch

//创建一个有异常的处理函数
function checkNum1($number)
{
    if($number>1){
        throw new Exception("变量值必须小于等于1");
    }
    return true;
}
//在try块触发
try{
    checkNum1(2);
    //如果抛出异常，以下文本输出
    echo '如果输出该内容，说明$number变量';
}
//捕获异常
catch (Exception $e)
{
    echo 'Message:'.$e->getMessage();
}
?>

<?php
//创建一个自定义的 Exception 类

class customException extends Exception
{
    public function errorMessage(){
        //错误信息
        $errorMsg='错误行号'.$this->getLine().'in'.$this->getFile()
            .':<b>'.$this->getMessage().'</b>不是一个合法的E—Mail地址';
        return $errorMsg;
    }
}
$email="xxxx@xx.com";

try
{
    //检测邮箱

    try {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE) {
            //如果是个不合法的邮箱地址，抛出异常
            throw new customException($email);

    }
    }
    catch (customException $e){
        echo $e->errorMessage();
    }
}