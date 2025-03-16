<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
include('includes/head.php');
include("includes/heading.php");
login($username, $password);
if(!$_SESSION['username']){
    include('includes/login_form.php');
    echo mysql_error();
    echo($_SESSION['error']);
}
else{
    echo mysql_error();
    echo'<meta http-equiv="refresh" content="0; url=main.php">';
}

include('includes/foot.php');
?>