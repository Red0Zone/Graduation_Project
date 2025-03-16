<?php
include('includes/function.php');
//check_session();
include("includes/config.php");
$areaid=$_GET['id'];
$result=mysql_query("SELECT *FROM files WHERE area_id=$areaid");
?>
<html style="overflow: auto;">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Language" content="en-us">
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <table border='yes'>
	    <tr><td></td><td>اسم الملف</td><td>الوصف</td><td>رابط الملف</td><td>حذف</td></tr>
	<?
	$i=1;
	while($row=mysql_fetch_array($result)){
	    echo("<tr><td>$i</td><td>".$row['name']."</td><td>".$row['descripe']."</td>
	    <td><a href='".$row['location']."' target='_blank'>تحميل</a></td>
	    <td><a href='delete_file.php?id=".$row['id']."'>حذف</a></td></tr>");
	    $i++;
	}
	?>
	</table>
    </body>
</html>