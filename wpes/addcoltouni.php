<?php
$level=$_SESSION['level'];
//$uni=$_SESSION['uni'];
if($level>1){
    echo'<meta http-equiv="refresh" content="0; url=main.php">';
}
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
include('includes/head.php');
//include("includes/heading.php");
$uni=$_GET['u'];
$name=$_POST['name'];
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
            <input type="submit" formnovalidate value="إضافة كلية" class="btn btn-block btn-primary"/>
        </div>
       
        
          
    </form>
    <div class="container-fluid center"><h2 class="text-center">لائحة الكليات</h2></div>
    <div>
    <table class="table-striped  text-center table">
        <thead class="text-center">
            <tr class="text-center">
                <th class="text-center" width="10px">الرقم</th>
                <th class="text-center">الكلية</th>
                <th class="text-center">العميد</th>
                <th class="text-center">صفحة الكلية</th>
                <th class="text-center">تعديل</th>
                <th class="text-center">حذف</th>
            </tr>
        </thead>
        <tbody class="text-center">
        <?php
        $statment2=mysql_query("SELECT *FROM colleges WHERE uni='$uni'");
        $i=1;
        while($row=mysql_fetch_array($statment2)){
            echo("
                <tr>
                <td>".$i."</td>
                <td>".$row['name']."</td>
                <td>".$row['dean']."</td>
                <td><a href='http://".$row['website']."' target='_blank'>".$row['website']."</a></td>
                <td><a href='colshow.php?col=".$row['id']."'><img src='img/edit.png' width='15px' class='img-rounded'/></a></td>
                <td><a href='coldelete.php?col=".$row['id']."'><img src='img/delete.png' width='15px' class='img-rounded'/></a></td>
                </tr>
                 ");
            $i++;
        }
        ?>
        </tbody>
    </table>
    </div>
</div>

<?php
}
else{
    $statment=mysql_query("INSERT INTO `colleges`
(`uni`,
`name`)
VALUES
(
'$uni',
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