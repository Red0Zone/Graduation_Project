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
$uni=$_GET['uni'];
$name=$_POST['name'];
$dean=$_POST['dean'];
$website=$_POST['website'];
if(!$name){
?>
<div class="container">
    <form class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" name="name" placeholder="ادخل اسم الكلية"/>
            </div>
            <label for="name" class="control-label col-sm-2">اسم الكلية :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" name="dean" placeholder="اسم عميد الكلية"/>
            </div>
            <label for="dean" class="control-label col-sm-2">اسم عميد الكلية : </label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="url"  name="website" placeholder="www.someuniversity.edu"/>
            </div>
            <label for="website"  class="control-label col-sm-2">صفحة الكلية الالكترونية :</label>
        </div>
       
        <div class="form-group">
            <input type="submit" formnovalidate value="إضافة كلية" class="btn btn-block btn-primary"/>
        </div>
       
        
          
    </form>
</div>
<?php
}
else{
    $statment=mysql_query("INSERT INTO `colleges`
(`uni`,
`name`,
`dean`,
`website`)
VALUES
(
'$uni',
'$name',
'$dean',
'$website')");
if($statment){
     echo('<meta http-equiv="refresh" content="0; url=college.php">');    
}
else{
    echo(mysql_error());    
}
}
include('includes/foot.php');
?>