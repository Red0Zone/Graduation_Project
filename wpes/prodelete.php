<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
include('includes/head.php');
$level=$_SESSION['level'];

if($level>2){
    echo'<meta http-equiv="refresh" content="0; url=main.php">';
}
if(!$col){
    $pro=$_GET['pro'];
}
$statment=mysql_query("DELETE FROM programs WHERE id='$pro'");
if($statment){
      echo'<meta http-equiv="refresh" content="0; url=programs.php">';   
}
else{
    echo(mysql_error());    
}
?>
