<?php
header("Content-Type:text/html;charset=utf-8");

$visi = $_POST['vis'];
$mess = $_POST['mes'];


include('conn.php');
//检测用户名是否已经存在

//写入数据
$date = date("Y-m-d H:i:s");
$sql = "INSERT INTO message(mname,message,mdate)VALUES('$visi','$mess',
'$date')";
if(mysql_query($sql,$conn)){
    echo '提交成功，即将跳转.....';

header("refresh:1;url=../index.html");
} else {
    echo '抱歉！添加数据失败：',mysql_error(),'<br />';
    echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
}
?>

