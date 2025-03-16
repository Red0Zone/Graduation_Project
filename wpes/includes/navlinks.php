<?php
$level=$_SESSION['level'];
$statment = mysql_query("SELECT *FROM navlinks WHERE level_max >= '$level' ORDER BY id DESC");
echo("<li><span style='color:yellow;' class='navbar-brand'>".$_SESSION['username']."</li>");
while($row=mysql_fetch_array($statment)){
    echo("<li><a href ='".$row['url']."'> ".$row['ar_name']."</a></li>");    
}
    
?>