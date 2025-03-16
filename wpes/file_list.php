<?php
include('includes/function.php');
check_session();
include("includes/config.php");
$nav=check_nav();
include_once("includes/header-templet.php");
include_once($nav);
?>
        <table border='yes'>
	    <tr><td></td><td>file name</td><td>file description</td><td>file link</td></tr>
	<?
	$i=1;
        $result=mysql_query("SELECT *FROM files");
	while($row=mysql_fetch_array($result)){
	    echo"<tr><td>$i</td><td>".$row['name']."</td><td>".$row['descripe']."</td><td><a href='".$row['location']."' target='_blank'>تحميل</a></td></tr>";
	    $i++;
	}
	?>
	</table>
    </div>
    </div>
    <?php
    include_once("includes/footer-templet.php");
    ?>