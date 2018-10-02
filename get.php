<?php
/**
 * Created by PhpStorm.
 * API：采用了q.qlogo.cn的API
 * Date: 18-10-2
 * 作者：XSY（https://www.xsy.cool)
 */

$link = "https://q.qlogo.cn/headimg_dl?dst_uin={$_GET['qq']}&spec=640";

$qq = $_GET['qq'];

if ($qq != null)
{
    header("Location:$link"); // 302 跳转
}
else
{
    echo "QQ号呢？？？";
}

?>

