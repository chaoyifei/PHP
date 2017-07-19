<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/19 0019
 * Time: 下午 21:55
 *
 * 重新抛出异常
 * 脚本应该对用户隐藏系统错误。对程序员来说，系统错误也许很重要，但是用户对它们并不感兴趣。
 * 为了让用户更容易使用，您可以再次抛出带有对用户比较友好的消息的异常：
 */
class customException extends Exception
{
    public function errorMessage()
    {
        //错误信息
        $errorMsg=$this->getMessage().'不是一个合法的E—Mail地址';
        return $errorMsg;
    }
}
$email="xxxx@xx.com";
try{
    try{
        //检测xx是否在邮箱地址中
        if (strpos($email,"xx")!==FALSE)
        {
            //如果是个不合法的邮箱地址，抛出异常
            throw new Exception($email);
        }

    }
    catch (Exception $e)
    {
        //重新抛出异常
        throw new customException($email);
    }
}
catch (customException $e)
{
    //显示自定义信息
    echo $e->errorMessage();
}