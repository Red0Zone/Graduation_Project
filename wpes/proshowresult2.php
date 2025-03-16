<?php

if(!$pro){
$pro=$_GET['pro'];
}
$statment=mysql_query("SELECT *FROM programs WHERE id=$pro");
while($row=mysql_fetch_array($statment)){
    echo '<div class=" container-fluid center" style="text-align:center;">
            <h2 class="text-center">نتائج المؤشرات النوعية</h2>
            <h2 class="text-center">برنامج '.$row['name'].'</h2>
          </div>';
}
?>
<div class="container" style="text-align: center;">
    <table dir="rtl" class="table table-hover">
        <thead class="center" style="text-align: center;">
            <tr>
                <th align="center">#</th>
                <th align="center">المحور</th>
                <th align="center">وزن المحور</th>
                <th align="center">علامة المحور</th>
                <th align="center">العلامة الموزونة</th>
            </tr>    
        </thead>
        <tbody>
            <?php
                $i=0;
                $statment2=mysql_query("SELECT *FROM domanins");
                while($row2=mysql_fetch_array($statment2)){
                $i++;
                echo'<tr><td>'.$i.'</td>
                <td>'.$row2['domain_ar'].'</td>
                <td>'.getdomweight($row2['id']).'</td>
                <td>'.getdomscore($row2['id'],$pro).'</td>
                <td>'.getdomwscore($row2['id'],$pro).'</td></tr>';
                }
                
            ?>
        </tbody>
        <tfoot>
            
        </tfoot>
    </table>
</div>