<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/19 0019
 * Time: 下午 15:40
 * 注释：PHP 运行邮件函数需要一个已安装且正在运行的邮件系统(如：sendmail、postfix、qmail等)。
 * 所用的程序通过在 php.ini 文件中的配置设置进行定义。请在我们的 PHP Mail 参考手册 阅读更多内容。
 */
$to="451089603@qq.com";//邮件接收者
$subject="参数邮件";//邮件标题
$message="这是邮件内容";
$from="xxxx@xx.com";
$headers="From:".$from;//头部信息
mail($to,$subject,$message,$headers);
echo "邮件已发送";
?>

//PHP Mail 表单
<html>
<head>
    <meta charset="utf-8">
    <title>菜鸟教程(runoob.com)</title>
</head>
<body>
<?php
//防止E_mail注入
function spamcheck($field){
  //  filter_var()过滤e_mail
    //使用FILTER_SANITIZE_EMAIL
    $field=filter_var($field,FILTER_SANITIZE_EMAIL);
    //filter_var()过滤e-mail
    //使用FILTER_SANITIZE_EMAIL
    if(filter_var($field,FILTER_SANITIZE_EMAIL)){
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}
if(isset($_REQUEST['email'])){
    //如果接收到邮箱的参数则发送邮件
    $emailcheck=spamcheck($_REQUEST['email']);
    if ($emailcheck==FALSE)
    {
        echo "非法输入";
    }
    else {
        //发送邮件
        $email = $_REQUEST['email'];
        $subject = $_REQUEST['subject'];
        $message = $_REQUEST['message'];
        mail("xxxx@xx.com", $subject, $message, "From", $email);
        echo "邮件发送成功";
    }
}
else
{
    //如果没有邮箱参数则显示表单
    echo "<form method='post' action='mailform.php'>
	Email: <input name='email' type='text'><br>
	Subject: <input name='subject' type='text'><br>
	Message:<br>
	<textarea name='message' rows='15' cols='40'>
	</textarea><br>
	<input type='submit'>
	</form>";
}
?>
</body>
</html>

