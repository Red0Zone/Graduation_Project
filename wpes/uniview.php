<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
include('includes/head.php');
include("includes/heading.php");
$level=$_SESSION['level'];
$uni=$_GET['uni'];
if(!$uni){
    $uni=$_SESSION['uni'];
}
$statment=mysql_query("SELECT *From university WHERE id='$uni'");
while($row=mysql_fetch_array($statment)){
    $name=$row['name'];
    $country=$row['country'];
    $adress=$row['adress'];
    $phone=$row['phone'];
    $fax=$row['fax'];
    $email=$row['email'];
    $short_name=$row['short_name'];
    $website=$row['website'];
    $logo=$row['logo'];
    $year=$row['year'];
    $type=$row['type1'];
    $studystart=$row['studystart'];
    $quality_name=$row['quality_name'];
    $quality_mail=$row['quality_email'];
    $head_name=$row['head_name'];
    $head_mail=$row['head_email'];
}
    ?>
     

<div class="container">
    <div class="text-center">
            <div class="col-sm-10">
            <h2  name="name" ><?php echo($name);?> </h2>
            </div>
        </div>
    <form class="form-horizontal">
        
        <div class="form-group">
            <div class="col-sm-10">
            <h3 class="form-control"><?php echo($country); ?></h3>
            </div>
            <label for="name" class="control-label col-sm-2">الدولة :</label>
        </div>
        
        <div class="form-group">
            <div class="col-sm-10">
            <h3 class="form-control"name="short_name" ><?php echo($short_name);?> </h3>
            </div>
            <label for="short_name" class="control-label col-sm-2">الإسم المختصر للجامعة : </label>
        </div>
         <div class="form-group">
            <div class="col-sm-10">
            <h3 class="form-control"name="head_name" ><?php echo($head_name);?> </h3>
            </div>
            <label for="name" class="control-label col-sm-2">اسم رئيس الجامعة :</label>
        </div>
          <div class="form-group">
            <div class="col-sm-10">
            <h3 class="form-control"name="head_mail" ><?php echo($head_mail);?> </h3>
            </div>
            <label for="name" class="control-label col-sm-2">بريد رئيس الجامعة الإلكتروني :</label>
        </div>
           <div class="form-group">
            <div class="col-sm-10">
            <h3 class="form-control"name="quality_name" ><?php echo($quality_name);?> </h3>
            </div>
            <label for="name" class="control-label col-sm-2">اسم مسؤول الجودة والاعتماد في الجامعة :</label>
        </div>
            <div class="form-group">
            <div class="col-sm-10">
            <h3 class="form-control"name="quality_mail" ><?php echo($quality_mail);?> </h3>
            </div>
            <label for="name" class="control-label col-sm-2">بريد مسؤول الجودة والإعتماد في الجامعة الإلكتروني :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <h3 class="form-control"name="adress" ><?php echo($adress);?> </h3>
            </div>
            <label for="name" class="control-label col-sm-2">العنوان الكامل للجامعة :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <h3 class="form-control"name="phone" ><?php echo($phone);?> </h3>
            </div>
            <label for="name" class="control-label col-sm-2">رقم الهاتف :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <h3 class="form-control"name="fax" ><?php echo($fax);?> </h3>
            </div>
            <label for="name" class="control-label col-sm-2">رقم الفاكس :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <h3 class="form-control"name="email" ><?php echo($email);?> </h3>
            </div>
            <label for="name" class="control-label col-sm-2">البريد الإلكتروني :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <h3 class="form-control"  name="website" ><?php echo($website);?> </h3>
            </div>
            <label for="website"  class="control-label col-sm-2">موقع الجامعة الإلكتروني :</label>
        </div>
        <div class="form-group">

            <div class="col-sm-10">
            <h3 class="form-control" ><?php echo($type);?> </h3>
            </div>
    
            <label for="website"  class="control-label col-sm-2">نوع المؤسسة :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-8"></div>
            <div class="col-sm-2"><img class="img-thumbnail" src="<?php echo($logo);?>"/></div>
            <label for="logo" class="control-label col-sm-2">شعار الجامعة :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <h3 class="form-control" name="year" ><?php echo($year);?> </h3>
            </div>
            <label for="year" class="control-label col-sm-2">سنة التأسيس :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <h3 class="form-control" name="studystart" ><?php echo($studystart);?> </h3>
            </div>
            <label for="year" class="control-label col-sm-2">سنة بدء الدراسة فيها :</label>
        </div>
        
       
        
          
    </form>
</div>
        <br>
<br>
<?php

include('includes/foot.php');
?>