<?php
$level=$_SESSION['level'];
//$uni=$_SESSION['uni'];

include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
include('includes/head.php');
//include("includes/heading.php");

$uni=$_GET['uni'];
$col=$_GET['c'];
$name=$_POST['name'];
$head=$_POST['head'];
$website=$_POST['website'];
if(!$name){
?>
<div class="container">
    <form class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" name="name" placeholder="ادخل اسم القسم"/>
            </div>
            <label for="name" class="control-label col-sm-2">القسم :</label>
        </div>
        
       
        <div class="form-group">
            <input type="submit" formnovalidate value="اضافة قسم" class="btn btn-block btn-primary"/>
        </div>         
    </form>
    <div class="container-fluid center"><h2 class="text-center">لائحة الأقسام</h2></div>
    <div>
    <table class="table-striped  text-center table">
        <thead class="text-center">
            <tr class="text-center">
                <th class="text-center" width="10px">الرقم</th>
                <th class="text-center">القسم</th>
                <th class="text-center">رئيس القسم</th>
                <th class="text-center">صفحة القسم</th>
                <th class="text-center">عرض</th>
                <th class="text-center">حذف</th>
            </tr>
        </thead>
        <tbody class="text-center">
        <?php
        $statment2=mysql_query("SELECT *FROM departments WHERE col='$col'");
        $i=1;
        while($row=mysql_fetch_array($statment2)){
            echo("
                <tr>
                <td>".$i."</td>
                <td>".$row['name']."</td>
                <td>".$row['head']."</td>
                <td><a href='http://".$row['website']."' target='_blank'>".$row['website']."</a></td>
                <td><a href='depshow2.php?dep=".$row['id']."'><img src='img/edit.png' width='15px' class='img-rounded'/></a></td>
                <td><a href='depdelete1.php?dep=".$row['id']."'><img src='img/delete.png' width='15px' class='img-rounded'/></a></td>
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
    $statment=mysql_query("INSERT INTO `departments`
(`uni`,
`col`,
`name`
)
VALUES
(
'$uni',
'$col',
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