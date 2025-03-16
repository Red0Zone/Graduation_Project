<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
$id = $_GET["dep"];

$head=$_POST['head'];
$website=$_POST['website'];

$statment=mysql_query("
                    UPDATE `departments`
                    SET
                    
                    `head` = '$head',
                    `website` ='$website'
                    WHERE `id` = $id;
                      ");
if($statment){
    echo('<meta http-equiv="refresh" content="0; url=depshow.php?dep='.$id.'">');    
}
else{
    echo(mysql_error());    
}
?>
