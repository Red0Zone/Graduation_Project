<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
$coll=$_GET['col'];
$statment=mysql_query("SELECT *FROM departments WHERE col = $coll");
    echo'<option value="0" sellected>الرجاء اختيار القسم</option>';
while($row=mysql_fetch_array($statment)){
    echo'<option value="'.$row['id'].'">'.$row['name'].'</option>';
}
?>