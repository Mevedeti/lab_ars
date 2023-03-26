<?php include ("db_connect.php") ?> 
<!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="content-type" content="text/html; charset=windows-1251" />
            <title>ВАЗ-2107</title>
            <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <table width="800" border="1" align="center" cellpadding="0" cellspacing="0" class="table-border">
        <tr>
            <td>
                <!-- Интернет-магазин "Модный угол", разработчик - Беликов Максим Дмитриевич -->
                <img src ="images/header.jpg" />
</td>
</tr>

<tr>
    <td>
    <table width="800" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td width="180" valign="top" class="left-column">
                <!-- <меню> -->
                <?php include("menu.php"); ?>
</td>
<td width="620" valign="top" >
    <!-- <контент> -->
    <?php
$sql = "SELECT * FROM articles";
$result = mysql_query($sql);
while ($myrow = mysql_fetch_array($result))  {
    ?>
<table width="100%" class = "article">
    <tr>
        <td width="250">
            <p><a href="article.php?id=<?php echo $myrow["id"]?>"><?php echo $myrow["title"]?></a></p>
            <p>Дата создания:<br><b><?php echo $myrow["date_created"]?></b></p>
            <p>Автор:<br><b><?php echo $myrow["author"]?></b></p>
</td>
<td>
    <?php echo $myrow["description"]?>
</td>
</tr>
</table>
<?php } ?>    
    <!-- <конец контента> -->
            </td>
</tr>
</table>
</td>
</tr>
<tr>
    <td>
     <!-- подвал сайта: информация о правах на копирование, email:  разработчика - Mevedeti11@gmail.com -->
     <img src = "images/footer.jpg" />   
</td>
</tr>
</table>
</body>
</html>
<!-- <hkghgkj> -->