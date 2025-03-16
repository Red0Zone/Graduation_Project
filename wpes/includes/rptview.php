<?php
$id=$_GET['pro'];
$id2=$_GET['id2'];
$pro=getprobyid($id);
$domid=$_GET['dom'];
if(!$domid){
        $domid=1;
}
if(!$id2){
        $id2=1;
}
?>
<script>
        tinymce.init({selector:'textarea'});
</script>
<div class="container-fluid">
    <div class="row">
    <h1 class="text-center">تقير التقويم الذاتي</h1>
    <h2 class="text-center">برنامج <?php echo($pro); ?><h2> 
    </div>    
    <div class="row">
        <div class="col-sm-10">
          <?php
            $statment=mysql_query("SELECT *FROM domanins where id=$domid");
            while($row=mysql_fetch_array($statment)){
            ?>
            <div id="<?php echo($row['id']); ?>">
            <h2 class="text-right"> <?php echo($row['domain_ar']); ?></h2>
            <div class="container-fluid">
                <form method="post" action="add_report_response.php" target="_blank">
                    <input type="hidden" value="<?php echo($row['id']); ?>" name="dom"/>
                    <input type="hidden" value="<?php echo($id); ?>" name="pro"/>
                <h3>
                    عليك الإجابة عن الفقرات الآتية لكل متطلب، مرفقاً الشواهد والأدلة اللازمة، وموضحاً مدى توافرها وتحقيق البرنامج لها، وموضحاً نقاط القوة والضعف وأساليب تحسينها، في المكان المخصص لذلك: 
                </h3>
                <ol>
                <?php
                $domid=$row['id'];
                $i=1;
                $statment2=mysql_query("SELECT *FROM report Where dom='$domid' AND id=$id2");
                $numed=mysql_num_rows($statment2);
                if($numed==0){
                         $id2=getfirstidrptbydom($domid);
                         $statment2=mysql_query("SELECT *FROM report Where dom='$domid' AND id=$id2");
                }
                ?>
                <input type="hidden" value="<?php echo($id2); ?>" name="ind"/>
                <?php
                while($row2=mysql_fetch_array($statment2)){
                    echo("<h3>".$id2.". ".$row2['result']."</h3>");
                    echo("<h4>مدى تحقق المتطلب:</h4>");
                    echo("<div name='text'>"."<h4>".getarearesult($id2, $id)."</h4>"."</div>");
                    echo("<h4>نقاط القوة:</h4>");
                    echo("<div name='strng'>"."<h4>".getareastrng($id2, $id)."</h4>"."</div>");
                    echo("<h4>مواطن الضعف:</h4>");
                    echo("<div name='weak'>"."<h4>".getareaweak($id2, $id)."</h4>"."</div>");
                    echo("<h4>أساليب تحسين نقاط القوة:</h4>");
                    echo("<div name='impstrng'>"."<h4>".getareaimpstrng($id2, $id)."</h4>"."</div>");
                    echo("<h4>أساليب معالجة مواطن الضعف:</h4>");
                    echo("<div name='impweak'>"."<h4>".getareaimpweak($id2, $id)."</h4>"."</div>");
                    $i++;
                }
                ?>
                </ol>
                    
                    
                               
                            
                </form>
                </br>
                </br>
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
                echo("<a href='rpt.php?pro=".$id."&&dom=".$row['id']."' class='btn btn-block btn-primary'>".$row['domain_ar']."</a>
                     ");   
            }
            ?>
            </nav>
        </div>
    </div>
</div>
<div class="text-center">
        <ul class="pagination text-center pagination-lg">
        <?php
                $statment3=mysql_query("SELECT *FROM report Where dom='$domid'");
                $z=1;
                while($row3=mysql_fetch_array($statment3)){
                        echo'<li><a href="rpt.php?pro='.$id.'&&dom='.$domid.'&&id2='.$row3['id'].'">'.$z.'</a></li>';
                        $z++;
                }
        ?>
        </ul>
</div>
