<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
$id = $_GET["col"];
//$name=$_POST['name'];
$dean=$_POST['dean'];
$website=$_POST['website'];

$statment=mysql_query("
                    UPDATE `colleges`
                    SET
                    `dean` = '$dean',
                    `website` ='$website'
                    WHERE `id` = $id;
                      ");
if($statment){
    echo('<meta http-equiv="refresh" content="0; url=colshow.php?col='.$id.'">');    
}
else{
    echo(mysql_error());    
}
?>
