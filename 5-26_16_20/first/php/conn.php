<?php
$conn = @mysql_connect("localhost","root","");
if (!$conn){
    die("连接数据库失败：" . mysql_error());
}
mysql_select_db("test", $conn);
//字符转换，读库
mysql_query("set character set 'utf8'");
//写库
mysql_query("set names 'utf8'");
/**
 * Created by PhpStorm.
 * User: Bubble
 * Date: 2016-05-23
 * Time: 23:58
 */
?>