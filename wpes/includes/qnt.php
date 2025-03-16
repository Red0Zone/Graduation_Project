<?php
$id=$_GET['pro'];
$pro=getprobyid($id);
?>
<div class="container-fluid">
    <div class="row">
    <h2 class="text-center">المؤشرات الكمية</h2>
    <h3 class="text-center">برنامج <?php echo($pro); ?></h3>   
    </div>    
    <div class="row" id="accordion">
        <div class="col-sm-10 panel-group panel"  >
          <?php
            $statment=mysql_query("SELECT *FROM qnt_areas");
            while($row=mysql_fetch_array($statment)){
                $num=$row['id'];
            ?>
            <div class="collapse in" id="<?php echo($row['id']); ?>">
            <h4 class="text-right"> <?php echo($row['text_ar']); ?></h4>
            <div class="container-fluid">
                <form method="post" action="add_qntresponse.php?d=<?php echo $num; ?>" target="_blank">
                    <input type="hidden" value="<?php echo($row['id']); ?>" name="area"/>
                    <input type="hidden" value="<?php echo($id); ?>" name="pro"/>
                <table class="table table-striped">
                    <thead class="text-center">
                    <?php
                        $statment3=mysql_query("SELECT *FROM qnt_headers WHERE num=$num");
                        if($num==2){
                            echo("<tr><th></th>");
                            
                            while($row3=mysql_fetch_array($statment3)){
                                echo('<th class="text-center">'.$row3['text'].'</th>');
                        }
                        echo("</tr>");
                        
                        
                    ?>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                $statment2=mysql_query("SELECT *FROM qnt_2");
                while($row2=mysql_fetch_array($statment2)){
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                         <td>".$row2['text']."</td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 1)."' name='response1_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 2)."' name='response2_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 3)."' name='response3_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 4)."' name='response4_".$row2['id']."' required/></td>
                         </tr>");
                    $i++;
                }
                }
                elseif($num==3){
                    echo("<tr><th></th>");
                            
                            while($row3=mysql_fetch_array($statment3)){
                                echo('<th class="text-center">'.$row3['text'].'</th>');
                        }
                        echo("</tr>");
                           
                        
                        
                    ?>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                $statment2=mysql_query("SELECT *FROM qnt_3");
                while($row2=mysql_fetch_array($statment2)){
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 1)."'  name='response1_".$row2['id']."' /></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 2)."' name='response2_".$row2['id']."' /></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 3)."' name='response3_".$row2['id']."' /></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 4)."' name='response4_".$row2['id']."' /></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 5)."' name='response5_".$row2['id']."' /></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 6)."' name='response6_".$row2['id']."' /></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 7)."' name='response7_".$row2['id']."' /></td>
                         </tr>");
                    $i++;
                }
                }
                elseif($num==4){
                    echo("<tr><th></th>");
                            
                            while($row3=mysql_fetch_array($statment3)){
                                echo('<th class="text-center">'.$row3['text'].'</th>');
                        }
                        echo("</tr>");
                           
                        
                        
                    ?>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                $statment2=mysql_query("SELECT *FROM qnt_4");
                while($row2=mysql_fetch_array($statment2)){
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                        <td>".$row2['text']."</td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 1)."'  name='response1_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 2)."' name='response2_".$row2['id']."' required/></td>
                         
                         </tr>");
                    $i++;
                }
                }
                 elseif($num==5){
                    echo("<tr><th></th>");
                            
                            while($row3=mysql_fetch_array($statment3)){
                                echo('<th class="text-center">'.$row3['text'].'</th>');
                        }
                        echo("</tr>");
                           
                        
                        
                    ?>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                $statment2=mysql_query("SELECT *FROM qnt_5");
                while($row2=mysql_fetch_array($statment2)){
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                        <td>".$row2['text']."</td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 1)."' name='response1_".$row2['id']."' required/></td>
                        
                         
                         </tr>");
                    $i++;
                }
                }
                elseif($num==6){
                    echo("<tr><th></th>");
                            
                            while($row3=mysql_fetch_array($statment3)){
                                echo('<th class="text-center">'.$row3['text'].'</th>');
                        }
                        echo("</tr>");
                           
                        
                        
                    ?>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                $statment2=mysql_query("SELECT *FROM qnt_6");
                while($row2=mysql_fetch_array($statment2)){
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                       
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 1)."' name='response1_".$row2['id']."' required/></td>
                          <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 2)."' name='response2_".$row2['id']."' required/></td>
                        
                         
                         </tr>");
                    $i++;
                }
                }
                elseif($num==7){
                    echo("<tr><th></th>");
                            
                            while($row3=mysql_fetch_array($statment3)){
                                echo('<th class="text-center">'.$row3['text'].'</th>');
                        }
                        echo("</tr>");
                           
                        
                        
                    ?>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                $statment2=mysql_query("SELECT *FROM qnt_7");
                while($row2=mysql_fetch_array($statment2)){
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                        <td>".$row2['text']."</td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 1)."' name='response1_".$row2['id']."' required/></td>
                          <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 2)."' name='response2_".$row2['id']."' required/></td>
                        
                         
                         </tr>");
                    $i++;
                }
                }
                elseif($num==8){
                    echo("<tr><th></th>");
                            
                            while($row3=mysql_fetch_array($statment3)){
                                echo('<th class="text-center">'.$row3['text'].'</th>');
                        }
                        echo("</tr>");
                           
                        
                        
                    ?>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                $statment2=mysql_query("SELECT *FROM qnt_8");
                while($row2=mysql_fetch_array($statment2)){
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                        <td>".$row2['text']."</td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 1)."' name='response1_".$row2['id']."' required/></td>
                          <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 2)."' name='response2_".$row2['id']."' required/></td>
                        
                         
                         </tr>");
                    $i++;
                }
                }
                 elseif($num==9){
                    echo("<tr><th></th>");
                            
                            while($row3=mysql_fetch_array($statment3)){
                                echo('<th class="text-center">'.$row3['text'].'</th>');
                        }
                        echo("</tr>");
                           
                        
                        
                    ?>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                $statment2=mysql_query("SELECT *FROM qnt_9");
                while($row2=mysql_fetch_array($statment2)){
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                          <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 1)."'  name='response1_".$row2['id']."' required/></td>
                          <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 2)."' name='response2_".$row2['id']."' required/></td>
                           <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 3)."' name='response3_".$row2['id']."' required/></td>
                        
                         
                         </tr>");
                    $i++;
                }
                }
                 elseif($num==10){
                    echo("<tr><th></th>");
                            
                            while($row3=mysql_fetch_array($statment3)){
                                echo('<th class="text-center">'.$row3['text'].'</th>');
                        }
                        echo("</tr>");
                           
                        
                        
                    ?>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                $statment2=mysql_query("SELECT *FROM qnt_10");
                while($row2=mysql_fetch_array($statment2)){
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                        <td>".$row2['text']."</td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 1)."' name='response1_".$row2['id']."' required/></td>
                          
                        
                         
                         </tr>");
                    $i++;
                }
                }
                 elseif($num==11){
                    echo("<tr><th></th>");
                            
                            while($row3=mysql_fetch_array($statment3)){
                                echo('<th class="text-center">'.$row3['text'].'</th>');
                        }
                        echo("</tr>");
                           
                        
                        
                    ?>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                $statment2=mysql_query("SELECT *FROM qnt_11");
                while($row2=mysql_fetch_array($statment2)){
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                        <td>".$row2['text']."</td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 1)."' name='response1_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 2)."' name='response2_".$row2['id']."' required/></td>
                          
                        
                         
                         </tr>");
                    $i++;
                }
                }
                 elseif($num==12){
                    echo("<tr><th></th>");
                            
                            while($row3=mysql_fetch_array($statment3)){
                                echo('<th class="text-center">'.$row3['text'].'</th>');
                        }
                        echo("</tr>");
                           
                        
                        
                    ?>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                $statment2=mysql_query("SELECT *FROM qnt_12");
                while($row2=mysql_fetch_array($statment2)){
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                        <td>".$row2['text']."</td>
                        <td></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 1)."' name='response1_".$row2['id']."' required/></td>
                          <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 2)."' name='response2_".$row2['id']."' required/></td>
                           <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 3)."' name='response3_".$row2['id']."' required/></td>
                          
                        
                         
                         </tr>");
                    $i++;
                }
                }
                 elseif($num==13){
                    echo("<tr><th></th>");
                            
                            while($row3=mysql_fetch_array($statment3)){
                                echo('<th class="text-center">'.$row3['text'].'</th>');
                        }
                        echo("</tr>");
                           
                        
                        
                    ?>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                $statment2=mysql_query("SELECT *FROM qnt_13");
                while($row2=mysql_fetch_array($statment2)){
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                        <td>".$row2['text']."</td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 1)."' name='response1_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 2)."' name='response2_".$row2['id']."' required/></td>
                          
                        
                         
                         </tr>");
                    $i++;
                }
                }
                 elseif($num==14){
                    echo("<tr><th></th>");
                            
                            while($row3=mysql_fetch_array($statment3)){
                                echo('<th class="text-center">'.$row3['text'].'</th>');
                        }
                        echo("</tr>");
                           
                        
                        
                    ?>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                $statment2=mysql_query("SELECT *FROM qnt_14");
                while($row2=mysql_fetch_array($statment2)){
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 1)."' name='response1_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 2)."' name='response2_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 3)."' name='response3_".$row2['id']."' required/></td>
                          
                        
                         
                         </tr>");
                    $i++;
                }
                }
                 elseif($num==15){
                    echo("<tr><th></th>");
                            
                            while($row3=mysql_fetch_array($statment3)){
                                echo('<th class="text-center">'.$row3['text'].'</th>');
                        }
                        echo("</tr>");
                           
                        
                        
                    ?>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                $statment2=mysql_query("SELECT *FROM qnt_15");
                while($row2=mysql_fetch_array($statment2)){
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                        
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 1)."' name='response1_".$row2['id']."' required/></td>
                        <td class='text-center'><input type='text'  value='".getqntvalue($row2['id'], $num, $id, 2)."' name='response2_".$row2['id']."' required/></td>
                         <td class='text-center'></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 3)."' name='response3_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 4)."' name='response4_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 5)."' name='response5_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 6)."' name='response6_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 7)."' name='response7_".$row2['id']."' required/></td>
                        <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 8)."' name='response8_".$row2['id']."' required/></td>


                          
                        
                         
                         </tr>");
                    $i++;
                }
                }
                 elseif($num==16){
                    echo("<tr><th></th>");
                            
                            while($row3=mysql_fetch_array($statment3)){
                                echo('<th class="text-center">'.$row3['text'].'</th>');
                        }
                        echo("</tr>");
                           
                        
                        
                    ?>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                $statment2=mysql_query("SELECT *FROM qnt_16");
                while($row2=mysql_fetch_array($statment2)){
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                        <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 1)."' name='response1_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 2)."' name='response2_".$row2['id']."' required/></td>
                          <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 3)."' name='response3_".$row2['id']."' required/></td>
                          <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 4)."' name='response4_".$row2['id']."' required/></td>
                        
                         
                         </tr>");
                    $i++;
                }
                }
                 elseif($num==17){
                    echo("<tr><th></th>");
                            
                            while($row3=mysql_fetch_array($statment3)){
                                echo('<th class="text-center">'.$row3['text'].'</th>');
                        }
                        echo("</tr>");
                           
                        
                        
                    ?>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                $statment2=mysql_query("SELECT *FROM qnt_17");
                while($row2=mysql_fetch_array($statment2)){
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                        <td>".$row2['text']."</td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 1)."' name='response1_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 2)."' name='response2_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 3)."' name='response3_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 4)."' name='response4_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 5)."' name='response5_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 6)."' name='response6_".$row2['id']."' required/></td>
                          
                        
                         
                         </tr>");
                    $i++;
                }
                }
                 elseif($num==18){
                    echo("<tr><th></th>");
                            
                            while($row3=mysql_fetch_array($statment3)){
                                echo('<th class="text-center">'.$row3['text'].'</th>');
                        }
                        echo("</tr>");
                           
                        
                        
                    ?>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                $statment2=mysql_query("SELECT *FROM qnt_18");
                while($row2=mysql_fetch_array($statment2)){
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                        <td>".$row2['text']."</td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 1)."' name='response1_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 2)."' name='response2_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 3)."' name='response3_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 4)."' name='response4_".$row2['id']."' required/></td>
                          
                        
                         
                         </tr>");
                    $i++;
                }
                }
                 elseif($num==19){
                    echo("<tr><th></th>");
                            
                            while($row3=mysql_fetch_array($statment3)){
                                echo('<th class="text-center">'.$row3['text'].'</th>');
                        }
                        echo("</tr>");
                           
                        
                        
                    ?>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                $statment2=mysql_query("SELECT *FROM qnt_19");
                while($row2=mysql_fetch_array($statment2)){
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                        <td>".$row2['text']."</td>
                        <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 1)."' name='response1_".$row2['id']."' required/></td>
                        <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 2)."' name='response2_".$row2['id']."' required/></td>
                        <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 3)."' name='response3_".$row2['id']."' required/></td>
                        <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 4)."' name='response4_".$row2['id']."' required/></td>                         
                         </tr>");
                    $i++;
                }
                }
                 elseif($num==20){
                    echo("<tr><th></th>");
                            
                            while($row3=mysql_fetch_array($statment3)){
                                echo('<th class="text-center">'.$row3['text'].'</th>');
                        }
                        echo("</tr>");
                           
                        
                        
                    ?>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                $statment2=mysql_query("SELECT *FROM qnt_20");
                while($row2=mysql_fetch_array($statment2)){
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                        <td>".$row2['text']."</td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 1)."' name='response1_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 2)."' name='response2_".$row2['id']."' required/></td>
                          
                        
                         
                         </tr>");
                    $i++;
                }
                }
                 elseif($num==21){
                    echo("<tr><th></th>");
                            
                            while($row3=mysql_fetch_array($statment3)){
                                echo('<th class="text-center">'.$row3['text'].'</th>');
                        }
                        echo("</tr>");
                           
                        
                        
                    ?>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                $statment2=mysql_query("SELECT *FROM qnt_21");
                while($row2=mysql_fetch_array($statment2)){
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                        <td>".$row2['text']."</td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 1)."' name='response1_".$row2['id']."' required/></td>
                          
                        
                         
                         </tr>");
                    $i++;
                }
                }
                 elseif($num==22){
                    echo("<tr><th></th>");
                            
                            while($row3=mysql_fetch_array($statment3)){
                                echo('<th class="text-center">'.$row3['text'].'</th>');
                        }
                        echo("</tr>");
                           
                        
                        
                    ?>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                $statment2=mysql_query("SELECT *FROM qnt_22");
                while($row2=mysql_fetch_array($statment2)){
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 1)."' name='response1_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 2)."' name='response2_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 3)."' name='response3_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 4)."' name='response4_".$row2['id']."' required/></td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 5)."' name='response5_".$row2['id']."' required/></td>
                          
                        
                         
                         </tr>");
                    $i++;
                }
                }
                 elseif($num==23){
                    echo("<tr><th></th>");
                            
                            while($row3=mysql_fetch_array($statment3)){
                                echo('<th class="text-center">'.$row3['text'].'</th>');
                        }
                        echo("</tr>");
                           
                        
                        
                    ?>
                    </thead>
                    <tbody>
                <?php
                $i=1;
                $statment2=mysql_query("SELECT *FROM qnt_23");
                while($row2=mysql_fetch_array($statment2)){
                    echo("<tr>
                         <td class='text-center'>".$i."</td>
                        <td>".$row2['text']."</td>
                         <td class='text-center'><input type='text' value='".getqntvalue($row2['id'], $num, $id, 1)."' name='response1_".$row2['id']."' required/></td>
                          
                        
                         
                         </tr>");
                    $i++;
                }
                }
                else{
                    ?>
                    </thead>
                    <tbody>
                    <?php
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
            <nav class="btn-group-vertical text-right wrap"  >
            <?php
            $statment=mysql_query("SELECT *FROM qnt_areas");
            while($row=mysql_fetch_array($statment)){
                echo("<a data-toggle='collapse' data-parent='#accordion'  href='#".$row['id']."' class='btn btn-block btn-primary wrap1'>".$row['text_ar']."</a>
                     ");   
            }
            ?>
            </nav>
        </div>
    </div>
</div>