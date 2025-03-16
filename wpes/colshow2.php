<?php
include("includes/head.php");
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");

$level=$_SESSION['level'];
$col=$_SESSION['college'];
if($level>2){
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
    
            <div class="col-sm-10">
            <h3 class="text-center"  name="name" ><?php echo($name); ?> </h3>
            </div>
            
   
    <form class="form-horizontal" >
        
        <div class="form-group">
            <div class="col-sm-10">
            <h3 class="form-control"  name="dean" ><?php echo($dean); ?> </h3>
            </div>
            <label for="short_name" class="control-label col-sm-2">اسم عميد الكلية : </label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <h3 class="form-control" type="url"  name="website" ><?php echo($website); ?> </h3>
            </div>
            <label for="website"  class="control-label col-sm-2">صفحة الكلية الاكترونية :</label>
        </div>
        
       
       
        
          
    </form>
</div>
<?php

?>