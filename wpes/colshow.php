<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
include('includes/head.php');
include("includes/heading.php");
$level=$_SESSION['level'];
$col=$_SESSION['college'];
if($level>4){
    echo'<meta http-equiv="refresh" content="0; url=main.php">';
}
if(!$col){
    $col=$_GET['col'];
}
$statment=mysql_query("SELECT *From colleges WHERE id='$col'");
while($row=mysql_fetch_array($statment)){
    $name=$row['name'];
    $dean=$row['dean'];
    $website=$row['website'];
   
}
?>
<div class="container">
    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="update_college.php?col=<?php echo($col); ?>">
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" disabled name="name" value="<?php echo($name); ?>"/>
            </div>
            <label for="name" class="control-label col-sm-2">اسم الكلية :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" name="dean" value="<?php echo($dean); ?>"/>
            </div>
            <label for="short_name" class="control-label col-sm-2">اسم عميد الكلية : </label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="url"  name="website" value="<?php echo($website); ?>"/>
            </div>
            <label for="website"  class="control-label col-sm-2">صفحة الكلية الاكترونية :</label>
        </div>
        
        <div class="form-group">
            <input type="submit" formnovalidate value="تعديل البيانات" class="btn btn-block btn-primary"/>
        </div>
       
        
          
    </form>
</div>
<?php
include('includes/foot.php');
?>