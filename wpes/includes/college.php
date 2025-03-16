<?php

if($level>3){
    echo'<meta http-equiv="refresh" content="0; url=main.php">';
}
if($col>0){
    echo'<meta http-equiv="refresh" content="0; url=colshow.php">';
}
else{
    $uni=$_SESSION['uni'];
    if(!$uni){
        ?>
       <div class="jumbotron text-center">
        <form method="post" class="form-inline" >
            <select name="uni" class="form-control">
                <option disabled>اختر الجامعة</option>
                <?php
                $statment=mysql_query("SELECT *FROM university");
                while($row=mysql_fetch_array($statment)){
                    echo("<option value=".$row['id'].">".$row['name']."</option>");
                }
                ?>
            </select>
            <input type="submit" class="btn btn-primary" value="اعرض الكليات"/>
        </form>
       </div>
        <?php
    }
    else{
?>

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
                <td><a href='coldelete1.php?col=".$row['id']."'><img src='img/delete.png' width='15px' class='img-rounded'/></a></td>
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
}
?>
