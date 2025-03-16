<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
include('includes/head.php');
$level=$_SESSION['level'];

    $user=$_GET['user'];

$statment=mysql_query("DELETE From users WHERE id='$dep'");
if($statment){
    echo('<script>location.reload();</script>');       
}
else{
    echo(mysql_error());    
}
?>
