<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/19 0019
 * Time: 下午 15:25
 */
//在下面的实例中，我们创建了一个简单的 page-view 计数器
session_start();
if(isset($_SESSION['views']))
{
    $_SESSION['views']=$_SESSION['views']+1;
}
else
{
    $_SESSION['views']=1;

}
echo "浏览量：".$_SESSION['views'];
?>


<?php
//如果您希望删除某些 session 数据，可以使用 unset() 或 session_destroy() 函数。

//unset()函数用于释放指定session变量

session_start();
if(isset($_SESSION['views'])){
    unset($_SESSION['views']);
}
?>