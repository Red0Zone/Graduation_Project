<?php
$level=$_SESSION['level'];
$uni=$_SESSION['uni'];
if($level>1){
    echo'<meta http-equiv="refresh" content="0; url=main.php">';
}
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
include('includes/head.php');
include("includes/heading.php");
    $name=$_POST['name'];
    $country=$_POST['country'];
    $adress=$_POST['adress'];
    $phone=$_POST['phone'];
    $fax=$_POST['fax'];
    $email=$_POST['email'];
    $short_name=$_POST['short_name'];
    $website=$_POST['website'];
    $logo=$_POST['logo'];
    $year=$_POST['year'];
    $studystart=$_POST['studystart'];
    $type1=$_POST['type1'];
    $quality_name=$_POST['quality_name'];
    $quality_mail=$_POST['quality_mail'];
    $head_name=$_POST['head_name'];
    $head_mail=$_POST['head_mail'];
if(!$name){
?>
<div class="container">
    <form class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" name="country" placeholder="الدولة"/>
            </div>
            <label for="name" class="control-label col-sm-2">الدولة :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" name="name" placeholder="ادخل اسم الجامعة"/>
            </div>
            <label for="name" class="control-label col-sm-2">اسم الجامعة :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" name="short_name" placeholder="اسم الجامعة المختصر"/>
            </div>
            <label for="short_name" class="control-label col-sm-2">الإسم المختصر للجامعة : </label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="file" name="logo" />
            </div>
            <label for="logo" class="control-label col-sm-2">شعار الجامعة :</label>
        </div>
        <div class="form-group">
            <input type="submit" formnovalidate value="إضافة جامعة" class="btn btn-block btn-primary"/>
        </div>
       
        
          
    </form>
</div>
<?php
}
else{
    $target_dir = "files/uni_logo/";
    $file=$_FILES["logo"]["name"];
    $ext=pathinfo($file, PATHINFO_EXTENSION);
    $target_file = $target_dir.$short_name.'logo.'.$ext;
    move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file); 
    

    $statment=mysql_query("INSERT INTO `university`
(`name`,
`short_name`,
`logo`,
`country`
)
VALUES
('$name',
'$short_name',
'$target_file',
'$country'
)");
if($statment){
     echo('<meta http-equiv="refresh" content="0; url=uni.php">');    
}
else{
    echo(mysql_error());    
}
}
echo("<br/>");
include('includes/foot.php');
?>