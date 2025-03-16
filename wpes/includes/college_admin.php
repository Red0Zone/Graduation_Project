<div class="row"  >
    <div class="col-sm-10">
        <iframe name="content" width="100%" src="mainuse.html" class="frame-noborder" height="550">
            
        </iframe>
    </div>
    <div class="col-sm-2">
        
        <?php
         $statment=mysql_query("SELECT *FROM university");
                while($row=mysql_fetch_array($statment)){
                    echo'<a data-toggle="collapse" target="content" href="addcoltouni.php?u='.$row['id'].'" class="btn btn-primary btn-block" data-target="#u'.$row['id'].'">'.$row['name'].'</a>';
                    $uni2=$row['id'];
                    $statment2=mysql_query("SELECT *FROM colleges WHERE uni=$uni2");
                    echo'<div id="u'.$row['id'].'" class="collapse">';
                    while($row2=mysql_fetch_array($statment2)){
                    echo'<a class="btn btn-info btn-block" href="colshow2.php?col='.$row2['id'].'" target="content">'.$row2['name'].'</a>';    
                    }
                    echo'</div>';
                }
        ?>
    </div>
</div>