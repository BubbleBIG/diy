<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        .time {

        }
    </style>
</head>
<body>


<span style="font-family:Comic Sans MS;font-size:10px;"></span><?php
    include("conn.php");
    ?>
    <table  width="300" border="1" align="center" cellpadding="5" cellspacing="1" >
<?php
$sql = "SELECT * FROM message order by mdate desc";
$query = mysql_query($sql);
while($row = mysql_fetch_array($query)){
    ?>



    <tr>
  <td bgColor=""><?= $row['message'],'<br>','<br>'?></td>
  </tr>

    <td style="text-align:right;"><big><?= $row['mname']?></big>    <sub>
    <?= $row['mdate']?></sub></td>

    <?php
}
?>
</table>
    </div>
</body>
</html>