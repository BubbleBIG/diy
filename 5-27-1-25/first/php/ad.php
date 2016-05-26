<?php
//header("Content-Type:text/html;charset=utf-8");
//if (!empty($_POST['btn'])) {
//    $title = $_POST['title'];
//    $content = $_POST['blog'];
//    $tag = $_POST['tag'];
//}
//include('conn.php');
//
//$date = date("Y-m-d H:i:s");
//$sql = "INSERT INTO `content`( `title`, `content`, `createdate`, `tag`) VALUES ('$title','$content','$date','$tag')";
//if(mysql_query($sql,$conn)){
//    echo '提交成功，即将跳转.....';
//    header("refresh:1;url=../index.html");
//} else {
//    echo '抱歉！添加数据失败：',mysql_error(),'<br />';
//    echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
//}
header("Content-Type:text/html;charset=utf-8");

$visi = $_POST['title'];
$mess = $_POST['blog'];
$tag =$_POST['tag'];

include('conn.php');

//写入数据
$date = date("Y-m-d H:i:s");
$sql = "INSERT INTO content(title,content,createdate,tag)VALUES('$visi','$mess',
'$date','$tag')";
if(mysql_query($sql,$conn)){
    echo '提交成功，即将跳转.....';
    header("refresh:1;url=../index.html");
} else {
    echo '抱歉！添加数据失败：', mysql_error(), '<br />';
    echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
}
?>

