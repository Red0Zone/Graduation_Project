<?php
$level=$_SESSION['level'];
$uni=$_SESSION['uni'];
if($level>1){
    $pagelink='unishow.php';
    $itemname='تعديل';
    
}
else{
    $pagelink='uniview.php';
    $itemname='عرض';
}
if($uni>0){
    echo'<meta http-equiv="refresh" content="0; url=unishow.php">';
}
else{
?>
<div class="container-fluid center"><h2 class="text-center">لائحة الجامعات</h2></div>
<div class="well well-sm">
    <?php
    if($level==1){
    ?>
     <a href="add_university.php" class="btn btn-primary btn-block">إضافة جامعة</a>
    <?php
    }
    ?>
   
</div>
<div>
    <table class="table-striped  text-center table">
        <thead class="text-center">
            <tr class="text-center">
                <th class="text-center" width="10px">الرقم</th>
                <th class="text-center">اسم الجامعة</th>
                <th class="text-center">الإختصار</th>
                <th class="text-center">الموقع الإلكتروني</th>
                <th class="text-center">سنة التأسيس</th>
                <th class="text-center">الشعار</th>
                <th class="text-center"><?php echo $itemname; ?></th>
                <th class="text-center">حذف</th>
            </tr>
        </thead>
        <tbody class="text-center">
        <?php
        $statment=mysql_query("SELECT *FROM university");
        $i=1;
        while($row=mysql_fetch_array($statment)){
            echo("
                <tr>
                <td>".$i."</td>
                <td>".$row['name']."</td>
                <td>".$row['short_name']."</td>
                <td><a href='http://".$row['website']."' target='_blank'>".$row['website']."</a></td>
                <td>".$row['year']."</td>
                <td><img src='".$row['logo']."' width='15px' class='img-rounded' alt='".$row['short_name']."'/></td>
                <td><a href='".$pagelink."?uni=".$row['id']."'><img src='img/edit.png' width='15px' class='img-rounded'/></a></td>
                <td><a href='unidelete.php?uni=".$row['id']."'><img src='img/delete.png' width='15px' class='img-rounded'/></a></td>
                </tr>
                 ");
            $i++;
        }
        ?>
        </tbody>
    </table>
</div>

<?php
}
?>