<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
getpermbyusername($user);
$dep=$_SESSION['department'];
$level=$_SESSION['level'];
$col=$_SESSION['college'];
$uni=$_SESSION['uni'];
$pro=$_SESSION['program'];
include('includes/head.php');
include("includes/heading.php");
if($level==1){
   include("includes/result_admin.php");
}
elseif($level==3){
    include("includes/result_admin.php");   
}
elseif($level==4){
    include("includes/result_admin.php"); 
}
elseif($level==5){
	include("includes/result_admin.php"); 
}
elseif($level==2){
	echo $pro;
	include("proshowresult2.php"); 
}
elseif($level>5){
	?>
    <div class="container-fluid center"><h2 class="text-center">لائحة البرامج</h2></div>
 <?php if($level==1){ ?>
<div class="well well-sm">
    <a href="add_pro.php?uni=<?php echo($uni); ?>&col=<?php echo($col); ?>&dep=<?php echo($dep); ?>" class="btn btn-primary btn-block">إضافة برنامج</a>
</div>
<?php }?>
<div>
    <table class="table-striped  text-center table">
        <thead class="text-center">
            <tr class="text-center">
                <th class="text-center" width="10px">الرقم</th>
                <th class="text-center">اسم البرنامج</th>
                <th class="text-center" width="100px">المؤشرات الكمية</th>
                <th class="text-center" width="100px">المؤشرات النوعية</th>
                <th class="text-center" width="150px">تقرير التقويم الذاتي</th>
                <?php if($level==1){ ?><th class="text-center">حذف البرنامج</th><?php }?>
            </tr>
        </thead>
        <tbody class="text-center">
        <?php
        $statment2=mysql_query("SELECT *FROM programs WHERE dep='$dep'");
        $i=1;
        while($row=mysql_fetch_array($statment2)){
            echo("
                <tr>
                <td>".$i."</td>
                <td>".$row['name']."</td>
                <td><a href='qnt.php?pro=".$row['id']."' target='_top'><img src='img/edit.png' width='15px' class='img-rounded'/></a></td>
                <td><a href='qlt.php?pro=".$row['id']."' target='_top'><img src='img/edit.png' width='15px' class='img-rounded'/></a></td>
                <td><a href='rpt.php?pro=".$row['id']."' target='_top'><img src='img/edit.png' width='15px' class='img-rounded'/></a></td>
                ");
            if($level==1){
            echo("<td><a href='prodelete.php?pro=".$row['id']."' target='_top'><img src='img/delete.png' width='15px' class='img-rounded'/></a></td>");
            }
                echo("</tr>
                 ");
            $i++;
        }
        ?>
        </tbody>
    </table>
</div>
<?php
}
else{
     if(!$pro){
        echo'<meta http-equiv="refresh" content="0; url=main.php">';
     }
     else{
     ?>
    <div class="container-fluid center"><h2 class="text-center">لائحة البرامج</h2></div>
 <?php if($level==5){ ?>
<div class="well well-sm">
    <a href="add_pro.php?uni=<?php echo($uni); ?>&col=<?php echo($col); ?>&dep=<?php echo($dep); ?>" class="btn btn-primary btn-block">إضافة برنامج</a>
</div>
<?php }?>
<div>
    <table class="table-striped  text-center table">
        <thead class="text-center">
            <tr class="text-center">
                <th class="text-center" width="10px">الرقم</th>
                <th class="text-center">اسم البرنامج</th>
                <th class="text-center" width="100px">المؤشرات الكمية</th>
                <th class="text-center" width="100px">المؤشرات النوعية</th>
                <th class="text-center" width="150px">تقرير التقويم الذاتي</th>
                <?php if($level==5){ ?><th class="text-center">حذف البرنامج</th><?php }?>
            </tr>
        </thead>
        <tbody class="text-center">
        <?php
        $statment2=mysql_query("SELECT *FROM programs WHERE id='$pro'");
        $i=1;
        while($row=mysql_fetch_array($statment2)){
            echo("
                <tr>
                <td>".$i."</td>
                <td>".$row['name']."</td>
                <td><a href='qnt.php?pro=".$row['id']."' target='_top'><img src='img/edit.png' width='15px' class='img-rounded'/></a></td>
                <td><a href='qlt.php?pro=".$row['id']."' target='_top'><img src='img/edit.png' width='15px' class='img-rounded'/></a></td>
                <td><a href='rpt.php?pro=".$row['id']."' target='_top'><img src='img/edit.png' width='15px' class='img-rounded'/></a></td>
                ");
            if($level==5){
            echo("<td><a href='prodelete.php?pro=".$row['id']."' target='_top'><img src='img/delete.png' width='15px' class='img-rounded'/></a></td>");
            }
                echo("</tr>
                 ");
            $i++;
        }
        ?>
        </tbody>
    </table>
</div>
<?php
         
     }
}
//include('includes/programs.php');
include('includes/foot.php');
?>