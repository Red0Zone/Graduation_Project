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
$uni=$_GET['uni'];
$col=$_GET['col'];
$dep=$_GET['dep'];
$name=$_POST['name'];

if(!$name){
?>
<div class="container">
    <form class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" name="name" placeholder="ادخل اسم البرنامج"/>
            </div>
            <label for="name" class="control-label col-sm-2">البرنامج :</label>
        </div>
               
        <div class="form-group">
            <input type="submit" formnovalidate value="اضافة برنامج" class="btn btn-block btn-primary"/>
        </div>
       
        
          
    </form>
</div>
<?php
}
else{
    $statment=mysql_query("INSERT INTO `programs`
(`uni`,
`col`,
`dep`,
`name`)
VALUES
(
'$uni',
'$col',
'$dep',
'$name'
)");
if($statment){
     echo('<script>parent.location.reload();</script>');    
}
else{
    echo(mysql_error());    
}
}
include('includes/foot.php');
?>