<?php
$level=$_SESSION['level'];
$uni=$_SESSION['uni'];
$col=$_SESSION['college'];
$dep=$_SESSION['department'];
$pro=$_SESSION['program'];

?>
<div class="container-fluid center"><h2 class="text-center">النتائج</h2></div>
<?php
if($level==1){
    $statment=mysql_query("SELECT *FROM university");
    while($row=mysql_fetch_array($statment)){
        $uni1=$row['id'];
        echo'
        <div class="col-sm-1"></div>
        <div class="col-sm-10"><h4 class="text-center">'.$row['name'].'</h4><div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="'.getprogressbyuni($uni1).'" aria-valuemin="0" aria-valuemax="100" style="width:'.getprogressbyuni($uni1).'%">
        <span>'.getprogressbyuni($uni1).'% Complete</span>
        </div></div></div>
        <div class="col-sm-1"></div>
        ';
    }
}
else{
    
}
?>