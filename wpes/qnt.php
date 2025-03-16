<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
getpermbyusername($user);
$level=$_SESSION['level'];
$pro=$_GET['pro'];
include('includes/head.php');
include("includes/heading.php");
if($level==5){
include('includes/qnt.php');   
}
else{
include('includes/qnt_view.php');    
}

include('includes/foot.php');
?>