<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
include('includes/head.php');

$level=$_SESSION['level'];
$uni=$_SESSION['uni'];
if($level>1){
    echo'<meta http-equiv="refresh" content="0; url=main.php">';
}
if(!$uni){
    $uni=$_GET['uni'];
}
$statment=mysql_query("DELETE FROM university WHERE id='$uni'");
if($statment){
     echo'<meta http-equiv="refresh" content="0; url=uni.php">';    
}
else{
    echo(mysql_error());    
}
?>
