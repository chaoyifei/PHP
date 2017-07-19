<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/19 0019
 * Time: 下午 21:39
 * 异常
 */
//多个异常
class customException extends Exception
{
    public function errorMessage()
    {
        //错误信息
        $errorMsg='错误行号'.$this->getLine().'in'.$this->getFile()
        .':<b>'.$this->getMessage().'</b>不是一个合法的E—Mail';
        return $errorMsg;
    }
}
$email="xxxxx@xx.com";

try
{
    //检测邮箱
    if(filter_var($email,FILTER_VALIDATE_EMAIL)==FALSE)
    {
        //如果是个不合法邮箱地址，抛出异常
        throw new customException($email);
    }
    //检测xx是否在邮箱地址中
    if (strpos($email,"xx")!==FALSE){
        throw new Exception("email是邮箱");
    }
}
catch (customException $e)
{
    echo $e->errorMessage();
}
catch (Exception $e){
    echo $e->getMessage();
}