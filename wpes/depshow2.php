<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
include('includes/head.php');
$level=$_SESSION['level'];
$dep=$_SESSION['college'];
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
    <div class="col-sm-10">
           <h2 class="text-center"  name="name" ><?php echo($name); ?> </h2>
            </div>
           
    <form class="form-horizontal" >
        
        <div class="form-group">
            <div class="col-sm-10">
           <h3 class="form-control"  name="head" ><?php echo($head); ?> </h3>
            </div>
            <label for="head" class="control-label col-sm-2">رئيس القسم : </label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
           <h3 class="form-control"  name="website" ><?php echo($website); ?> </h3>
            </div>
            <label for="website"  class="control-label col-sm-2">الصفحة الالكترونية للقسم :</label>
        </div>
        
        
       
        
          
    </form>
</div>
<?php
//include('includes/foot.php');
?>