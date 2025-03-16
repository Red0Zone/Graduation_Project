<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
$dom=$_POST['dom'];
$pro=$_POST['pro'];
$uni=$_SESSION['uni'];
$col=$_SESSION['college'];
$dep=$_SESSION['department'];
$statment=mysql_query("SELECT *FROM indicators Where domain='$dom'");
while($row=mysql_fetch_array($statment)){
    $indicator=$row['id'];
    $response=$_POST['response_'.$row['id']];
    $comment=$_POST['comment_'.$row['id']];
    addresponsetester($response, $uni, $col, $dep, $pro, $comment, $indicator, $dom);

}
  echo("<script>window.close();</script>");
?>