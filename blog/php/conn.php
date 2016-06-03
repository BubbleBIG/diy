<?php
$conn = @mysql_connect("localhost","root","");
if (!$conn) {
    die('mysql is fail to connect :' .mysql_error());
}
mysql_select_db('myblog',$conn);
//字符转换，读库
mysql_query("set character set 'utf8'");
//写库
mysql_query("set names 'utf8'");
?>