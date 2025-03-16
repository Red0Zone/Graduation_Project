<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
include('includes/head.php');
include("includes/heading.php");
$level=$_SESSION['level'];
$dep=$_SESSION['department'];
if($level>5){
    echo'<meta http-equiv="refresh" content="0; url=main.php">';
}
if(!$dep){
    $dep=$_GET['dep'];
}
$statment=mysql_query("SELECT *From departments WHERE id='$dep'");
while($row=mysql_fetch_array($statment)){
    $name=$row['name'];
    $head=$row['head'];
    $website=$row['website'];
   
}
?>
<div class="container">
    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="update_dep.php?dep=<?php echo($dep); ?>">
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" disabled type="text" name="name" value="<?php echo($name); ?>"/>
            </div>
            <label for="name" class="control-label col-sm-2">القسم :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" name="head" value="<?php echo($head); ?>"/>
            </div>
            <label for="head" class="control-label col-sm-2">رئيس القسم : </label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="url"  name="website" value="<?php echo($website); ?>"/>
            </div>
            <label for="website"  class="control-label col-sm-2">الصفحة الالكترونية للقسم :</label>
        </div>
        
        <div class="form-group">
            <input type="submit" formnovalidate value="تعديل البيانات" class="btn btn-block btn-primary"/>
        </div>
       
        
          
    </form>
</div>
<?php
include('includes/foot.php');
?>