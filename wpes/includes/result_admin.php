<div class="row"  >
    <div class="col-sm-10">
        <iframe name="content" class="frame-noborder" width="100%" height="550">
            
        </iframe>
    </div>
    <div class="col-sm-2">
        
        <?php
        if($level==1){
            $statment=mysql_query("SELECT *FROM university");
                while($row=mysql_fetch_array($statment)){
                    echo'<button data-toggle="collapse" class="btn btn-primary btn-block" data-target="#u'.$row['id'].'">'.$row['name'].'</button>';
                    $uni2=$row['id'];
					$statment2=mysql_query("SELECT *FROM colleges WHERE uni=$uni2");
                    echo'<div id="u'.$row['id'].'" class="collapse">';
                    while($row2=mysql_fetch_array($statment2)){
                    
                    echo'<button data-toggle="collapse" class="btn btn-info btn-block" data-target="#c'.$row2['id'].'">'.$row2['name'].'</button>';
                    $col2=$row2['id'];
                    $statment3=mysql_query("SELECT *FROM departments WHERE col=$col2");
                    echo'<div id="c'.$row2['id'].'" class="collapse">';
                    
                    while($row3=mysql_fetch_array($statment3)){
                        echo'<button data-toggle="collapse" class="btn btn-success btn-block" data-target="#p'.$row3['id'].'">'.$row3['name'].'</button>';
                        $dep2=$row3['id'];
                        echo'<div id="p'.$row3['id'].'" class="collapse">';
                        $statment4=mysql_query("SELECT *FROM programs WHERE dep=$dep2");
                        while($row4=mysql_fetch_array($statment4)){
                            echo'<a class="btn btn-warning btn-block" href="proshowresult.php?pro='.$row4['id'].'" target="content">'.$row4['name'].'</a>';
                        }
                        echo("</div>");
                    }
                    echo("</div>");
                    }
					echo("</div>");
                }
        }
        elseif($level==3){
                    $uni2=$uni;
                    $statment2=mysql_query("SELECT *FROM colleges WHERE uni=$uni2");
                    
                    while($row2=mysql_fetch_array($statment2)){
                    echo'<button data-toggle="collapse" class="btn btn-info btn-block" data-target="#c'.$row2['id'].'">'.$row2['name'].'</button>';
                    $col2=$row2['id'];
                    $statment3=mysql_query("SELECT *FROM departments WHERE col=$col2");
                    echo'<div id="c'.$row2['id'].'" class="collapse">';
                    
                    while($row3=mysql_fetch_array($statment3)){
                        echo'<button data-toggle="collapse" class="btn btn-success btn-block" data-target="#p'.$row3['id'].'">'.$row3['name'].'</button>';
                        $dep2=$row3['id'];
                        echo'<div id="p'.$row3['id'].'" class="collapse">';
                        $statment4=mysql_query("SELECT *FROM programs WHERE dep=$dep2");
                        while($row4=mysql_fetch_array($statment4)){
                            echo'<a class="btn btn-warning btn-block" href="proshowresult.php?pro='.$row4['id'].'" target="content">'.$row4['name'].'</a>';
                        }
                        echo("</div>");
                    }
                    echo("</div>");
                    }
            
        }
        elseif($level==4){
             $statment3=mysql_query("SELECT *FROM departments WHERE col=$col");
                   
                    
                    while($row3=mysql_fetch_array($statment3)){
                        echo'<a class="btn btn-success btn-block" href="proshowresult.php?dep='.$row3['id'].'" target="content">'.$row3['name'].'</a>';  
                    } 
        }
		elseif($level==5){
			$statment3=mysql_query("SELECT *FROM programs WHERE dep=$dep");
                   
                    
                    while($row3=mysql_fetch_array($statment3)){
                        echo'<a class="btn btn-success btn-block" href="proshowresult.php?pro='.$row3['id'].'" target="content">'.$row3['name'].'</a>';  
                    } 
		
		}
        
        ?>
    </div>
</div>