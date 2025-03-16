<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
getpermbyusername($user);
$level=$_SESSION['level'];
include('includes/head.php');
include("includes/heading.php");
if($level==5){
include('includes/rptshow.php');    
}
else{
include('includes/rptview.php');    
}

include('includes/foot.php');
?>