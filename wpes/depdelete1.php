<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
include('includes/head.php');
$level=$_SESSION['level'];

    $dep=$_GET['dep'];

$statment=mysql_query("DELETE From departments WHERE id='$dep'");
if($statment){
    echo('<script>parent.location.reload();</script>');       
}
else{
    echo(mysql_error());    
}
?>
