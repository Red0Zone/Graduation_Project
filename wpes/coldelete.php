<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
include('includes/head.php');
$level=$_SESSION['level'];
$col=$_SESSION['college'];
if($level>2){
    echo'<meta http-equiv="refresh" content="0; url=main.php">';
}
if(!$col){
    $col=$_GET['col'];
}
$statment=mysql_query("DELETE FROM colleges WHERE id='$col'");
if($statment){
echo('<script>parent.location.reload();</script>');}
else{
    echo(mysql_error());    
}
?>
