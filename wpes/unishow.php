<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
include('includes/head.php');
include("includes/heading.php");
$level=$_SESSION['level'];
$uni=$_SESSION['uni'];

if(!$uni){
    $uni=$_GET['uni'];
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
if($level!=3){
   echo'<meta http-equiv="refresh" content="0; url=uniview.php?uni='.$uni.'">';
}
else{
?>
<div class="container">
    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="update_university.php?uni=<?php echo($uni); ?>">
        
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" disabled name="country" value="<?php echo($country); ?>"/>
            </div>
            <label for="name" class="control-label col-sm-2">الدولة :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" disabled name="name" value="<?php echo($name); ?>"/>
            </div>
            <label for="name" class="control-label col-sm-2">اسم الجامعة :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" disabled name="short_name" value="<?php echo($short_name); ?>"/>
            </div>
            <label for="short_name" class="control-label col-sm-2">الإسم المختصر للجامعة : </label>
        </div>
         <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" name="head_name" value="<?php echo($head_name); ?>"/>
            </div>
            <label for="name" class="control-label col-sm-2">اسم رئيس الجامعة :</label>
        </div>
          <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" name="head_mail" value="<?php echo($head_mail); ?>"/>
            </div>
            <label for="name" class="control-label col-sm-2">بريد رئيس الجامعة الإلكتروني :</label>
        </div>
           <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" name="quality_name" value="<?php echo($quality_name); ?>"/>
            </div>
            <label for="name" class="control-label col-sm-2">اسم مسؤول الجودة والاعتماد في الجامعة :</label>
        </div>
            <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" name="quality_mail" value="<?php echo($quality_mail); ?>"/>
            </div>
            <label for="name" class="control-label col-sm-2">بريد مسؤول الجودة والإعتماد في الجامعة الإلكتروني :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" name="adress" value="<?php echo($adress); ?>"/>
            </div>
            <label for="name" class="control-label col-sm-2">العنوان الكامل للجامعة :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" name="phone" value="<?php echo($phone); ?>"/>
            </div>
            <label for="name" class="control-label col-sm-2">رقم الهاتف :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" name="fax" value="<?php echo($fax); ?>"/>
            </div>
            <label for="name" class="control-label col-sm-2">رقم الفاكس :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" name="email" value="<?php echo($email); ?>"/>
            </div>
            <label for="name" class="control-label col-sm-2">البريد الإلكتروني :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="url"  name="website" value="<?php echo($website); ?>"/>
            </div>
            <label for="website"  class="control-label col-sm-2">موقع الجامعة الإلكتروني :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <select name="type" class="form-control">
                <option value="<?php echo($type); ?>" selected="selected"><?php echo($type); ?></option>
                <option value="حكومية">حكومية</option>
                <option value="جامعة عامة">جامعة عامة</option>
                <option value="أهلية أو خاصة ">أهلية أو خاصة </option>
                <option value="تابعة لجامعة الدول العربية ">تابعة لجامعة الدول العربية </option>
                <option value="جامعة عربية في قطر غير عربي ">جامعة عربية في قطر غير عربي </option>
                <option value="جامعة أجنبية مشتركة في قطرعربي ">جامعة أجنبية مشتركة في قطرعربي </option>
                <option value="أخرى">أخرى</option>
            </select>
            </div>
            <label for="website"  class="control-label col-sm-2">نوع المؤسسة :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-2"><img class="img-thumbnail" src="<?php echo($logo); ?>"/></div>
            <div class="col-sm-6">
            <input class="form-control" type="file" name="logo" />
            </div>
            <label for="logo" class="control-label col-sm-2">شعار الجامعة :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="number" step="1" max="2100" min="1950"name="year" value="<?php echo($year); ?>"/>
            </div>
            <label for="year" class="control-label col-sm-2">سنة التأسيس :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="number" step="1" max="2100" min="1950"name="studystart" value="<?php echo($studystart); ?>"/>
            </div>
            <label for="year" class="control-label col-sm-2">سنة بدء الدراسة فيها :</label>
        </div>
        <div class="form-group">
            <input type="submit" formnovalidate value="تعديل البيانات" class="btn btn-block btn-primary"/>
        </div>
       
        
          
    </form>
</div>
<?php
}
include('includes/foot.php');
?>