<?php
$level=$_SESSION['level'];
$col=$_SESSION['college'];
$uni=$_SESSION['uni'];
$dep=$_SESSION['department'];
if($level>4){
    echo'<meta http-equiv="refresh" content="0; url=main.php">';
}
if($dep>0){
    echo'<meta http-equiv="refresh" content="0; url=depshow.php">';
}
else{
     
?>
<div class="container-fluid center"><h2 class="text-center">لائحة الأقسام</h2></div>

<div>
    <table class="table-striped  text-center table">
        <thead class="text-center">
            <tr class="text-center">
                <th class="text-center" width="10px">الرقم</th>
                <th class="text-center">القسم</th>
                <th class="text-center">رئيس القسم</th>
                <th class="text-center">صفحة القسم</th>
                <th class="text-center">تعديل</th>
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
                <td><a href='depshow.php?dep=".$row['id']."'><img src='img/edit.png' width='15px' class='img-rounded'/></a></td>
                <td><a href='depdelete.php?dep=".$row['id']."'><img src='img/delete.png' width='15px' class='img-rounded'/></a></td>
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
