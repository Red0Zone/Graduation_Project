<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
include('includes/head.php');
$level=$_SESSION['level'];

    $user=$_GET['user'];

$statment=mysql_query("DELETE From users WHERE id='$user'");
if($statment){
    echo('<meta http-equiv="refresh" content="0; url=users.php">');    
}
else{
    echo(mysql_error());    
}
?>
