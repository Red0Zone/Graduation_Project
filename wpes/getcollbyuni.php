<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
$uni=$_GET['u'];
$statment=mysql_query("SELECT *FROM colleges WHERE uni=$uni");
    echo'<option value="0" sellected>الرجاء اختيار الكلية</option>';
while($row=mysql_fetch_array($statment)){
    echo'<option value="'.$row['id'].'">'.$row['name'].'</option>';
}
?>