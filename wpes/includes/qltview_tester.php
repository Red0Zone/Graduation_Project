<?php
$id=$_GET['pro'];
$pro=getprobyid($id);
?>
<div class="container-fluid">
    <div class="row">
    <h2 class="text-center">المؤشرات النوعية</h2>
    <h3 class="text-center">برنامج <?php echo($pro); ?></h3>   
    </div>    
    <div class="row" id="accordion">
        <div class="col-sm-10 panel">
          <?php
            $statment=mysql_query("SELECT *FROM domanins");
            while($row=mysql_fetch_array($statment)){
            ?>
            <div class="collapse in" id="<?php echo($row['id']); ?>">
            <h4 class="text-right"> <?php echo($row['domain_ar']); ?></h4>
            <div class="container-fluid">
                <form method="post" action="add_tester_response.php" target="_blank">
                    <input type="hidden" value="<?php echo($row['id']); ?>" name="dom"/>
                    <input type="hidden" value="<?php echo($id); ?>" name="pro"/>
                <table class="table table-striped">
                    <thead class="text-center">
                        <tr>
                        <th class="text-center" rowspan="2" width="20">الرقم</th>
                        <th class="text-center" rowspan="2">المؤشر</th>
                        <th class="text-center"  rowspan="2" width="100">الإستجابة</th>
                        <th class="text-center" rowspan="2" width="100">الأدلة</th>
                        <th class="text-center" rowspan="2" width="150">ملاحظات</th>
                        <th class="text-center" colspan="3" width="100">استجابة المقيم</th>
                        <th class="text-center" rowspan="2" width="150">ملاحظات المقيم</th>
                        </tr>
                         <tr>
                            <th class="text-center">نعم</th>
                            <th class="text-center">إلى حد ما</th>
                            <th class="text-center">لا</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                $domid=$row['id'];
                $i=1;
                $statment2=mysql_query("SELECT *FROM indicators Where domain='$domid'");
                while($row2=mysql_fetch_array($statment2)){
                    $ind=$row2['id'];
                    $x=getqltresponsevtester($ind, $id);
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                         <td>".$row2['text']."</td>
                         <td>".getqltresponse($row2['id'], $id)."</td>
                         <td width='102'>
                         <img class='img1' src='img/browse.png' onclick='openWin2(".$row2['id'].")' ></td>
                         <td class='text-center'><p  name='comment_".$row2['id']."'>".getqltcomment($row2['id'], $id)."</pٍ></td>
                         <td class='text-center'><input type='radio'");
                         if ($x==2){echo"checked";}
                         echo" value='2' name='response_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='radio'";
                         if ($x==1){echo"checked";}
                         echo" value='1' name='response_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='radio'";
                         if ($x==0){echo"checked";}
                         echo" value='0' name='response_".$row2['id']."' required/></td>
                         <td class='text-center'><textarea class='form-control' name='comment_".$row2['id']."'></textarea></td></tr>";
                    $i++;
                }
                ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">
                              <input class="btn btn-primary btn-block" type="submit" value="تثبيت"/>
                            </td>
                        </tr>    
                    </tfoot>
                </table>
                </form>
            </div>
            </div>
            <?php
            }
            ?>    
        </div>
        <div class="col-sm-2" >
            <nav class="btn-group-vertical text-right"  data-spy="affix">
            <?php
            $statment=mysql_query("SELECT *FROM domanins");
            while($row=mysql_fetch_array($statment)){
                echo("<a data-toggle='collapse' data-parent='#accordion' href='#".$row['id']."' class='btn btn-block btn-primary'>".$row['domain_ar']."</a>
                     ");   
            }
            ?>
            </nav>
        </div>
    </div>
</div>