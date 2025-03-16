<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
$dep=$_GET['d'];
$statment=mysql_query("SELECT *FROM programs WHERE dep = $dep");
    echo'<option value="0" sellected>الرجاء اختيار البرنامج</option>';
while($row=mysql_fetch_array($statment)){
    echo'<option value="'.$row['id'].'">'.$row['name'].'</option>';
}
?>