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
<table  width="600" border="1" align="center" cellpadding="5" cellspacing="1" >
    <?php
    $sql = "SELECT * FROM content order by createdate desc";
    $query = mysql_query($sql);
    while($row = mysql_fetch_array($query)){
        ?>


        <td style="text-align:right;"><big><?= $row['title']?></big>    <sub>
                <?= $row['createdate']?></sub></td>
        <tr>
            <td bgColor=""><?= $row['content'],'<br>','<br>'?></td>
        </tr>



        <?php
    }
    ?>
</table>
</div>
</body>
</html>