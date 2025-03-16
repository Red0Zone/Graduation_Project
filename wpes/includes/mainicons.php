<?php
$level=$_SESSION['level'];
$statment = mysql_query("SELECT *FROM navlinks WHERE level_max >= '$level' AND level_max<20 ORDER BY id");
while($row=mysql_fetch_array($statment)){
    ?>
    <div class="col-md-3 center">
    <?
    echo("<div class='thumbnail'><a href ='".$row['url']."'>
         <img class='img-responsive' src='img/".$row['en_name'].".png' alt='".$row['ar_name']."' style='width:60%'>
          <div class='caption> center'><p align='center'>".$row['ar_name']."</p></div>
         </a>");
    ?>
    </div>
    </div>
  
    <?
}
?>