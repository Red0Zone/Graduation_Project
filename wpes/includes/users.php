<h2 class="text-center">لائحة المستخدمين</h2>
<table class="table table-striped ">
            <tr class="text-center">
                <th class="text-center">#</th>
                <th class="text-center">اسم المستخدم</th>
                <th class="text-center">البريد الالكتروني</th>
                <th class="text-center">الجامعة</th>
                <th class="text-center">الكلية</th>
                <th class="text-center">القسم</th>
                <th class="text-center">البرنامج</th>
                <th class="text-center">مستوى التصريح</th>
                <th hidden="hidden" class="text-center">تغيير كلمة السر</th>
                <th class="text-center">حذف المستخدم</th>
            </tr>
       
        <?
        $level=$_SESSION['level'];
        $uni=$_SESSION['uni'];
        $result=mysql_query("SELECT *FROM users WHERE level >= $level ");
        $i=1;
        while($row=mysql_fetch_array($result)){
                       
                 echo'
                <tr class="text-center">
                    <td>'.$i.'</td>
                    <td>'.$row['username'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.getunibyid($row['uni']).'</td>
                    <td>'.getcolbyid($row['college']).'</td>
                    <td>'.getdepbyid($row['department']).'</td>
                    <td>'.getprobyid($row['program']).'</td>
                    <td>'.$row['level'].'</td>
                    <td hidden="hidden"><a href="change_password.php?user='.$row['id'].'"><img src="img/pass.png" width="15px" class="img-rounded"/></a></td>
                    <td><a href="delete_user.php?user='.$row['id'].'"><img src="img/delete.png" width="15px" class="img-rounded"/></a></td>
                </tr>
            ';    
                         $i++;
        }
        ?>
<div class="well well-sm">
    <a href="add_user.php" class="btn btn-primary btn-block">إضافة مستخدم</a>
</div>
