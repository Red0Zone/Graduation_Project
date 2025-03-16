<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
$id = $_GET["uni"];
$name=$_POST['name'];
    $country=$_POST['country'];
    $adress=$_POST['adress'];
    $phone=$_POST['phone'];
    $fax=$_POST['fax'];
    $email=$_POST['email'];
    
    $website=$_POST['website'];
    $logo=$_POST['logo'];
    $year=$_POST['year'];
    $studystart=$_POST['studystart'];
    $quality_name=$_POST['quality_name'];
    $quality_mail=$_POST['quality_mail'];
    $head_name=$_POST['head_name'];
    $head_mail=$_POST['head_mail'];
    $type1=$_POST['type'];
    $target_dir = "files/uni_logo/";
    $file=$_FILES["logo"]["name"];
    $statment1=mysql_query("SELECT *FROM university WHERE id='$id'");
if(!$file){
    
    while($row=mysql_fetch_array($statment1)){
        $target_file=$row['logo'];
                }
    }
else{
     while($row=mysql_fetch_array($statment1)){
        $short_name=$row['short_name'];
        $ext=pathinfo($file, PATHINFO_EXTENSION);
        $target_file = $target_dir.$short_name.'logo.'.$ext;
        move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file);
     }
    }
    


$statment=mysql_query("
                    UPDATE `university`
                    SET
                    `website` ='$website',
                    `logo` = '$target_file',
                    `year` = '$year',
                    `adress` = '$adress',
                    `phone` = '$phone',
                    `fax` = '$fax',
                    `email` = '$email',
                    `studystart` = '$studystart',
                    `type1` = '$type1',
                    `location` = '$location',
                    `type2` = '$type2',
                    `fund` = '$fund',
                    `quality_email` = '$quality_mail',
                    `quality_name` = '$quality_name',
                    `head_name` = '$head_name',
                    `head_email` = '$head_mail'
                    WHERE `id` = $id;
                      ");
if($statment){
    echo('<meta http-equiv="refresh" content="0; url=unishow.php?uni='.$id.'">');    
}
else{
    echo(mysql_error());    
}
?>
