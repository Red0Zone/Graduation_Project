<?php
include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
$dom=$_GET['d'];
$table="qnt_response_".$dom;
$table_indicators="qnt_".$dom;
$pro=$_POST['pro'];
$area=$_POST['area'];
$statment=mysql_query("SELECT *FROM qnt_$dom");
while($row=mysql_fetch_array($statment)){
    $area_id=$row['id'];
if($dom==2){
    $response1=$_POST['response1_'.$row['id']];
    $response2=$_POST['response2_'.$row['id']];
    $response3=$_POST['response3_'.$row['id']];
    $response4=$_POST['response4_'.$row['id']];
    insertintoqnt2($pro, $area, $area_id, $response1, $response2, $response3, $response4); 
}
elseif($dom==3){
    $response1=$_POST['response1_'.$row['id']];
    $response2=$_POST['response2_'.$row['id']];
    $response3=$_POST['response3_'.$row['id']];
    $response4=$_POST['response4_'.$row['id']];
    $response5=$_POST['response5_'.$row['id']];
    $response6=$_POST['response6_'.$row['id']];
    $response7=$_POST['response7_'.$row['id']];
    insertintoqnt3($pro, $area, $area_id, $response1, $response2, $response3, $response4, $response5, $response6, $response7);    
}
elseif($dom==4){
    $response1=$_POST['response1_'.$row['id']];
    $response2=$_POST['response2_'.$row['id']];
    insertintoqnt4($pro, $area, $area_id, $response1, $response2); 
}
elseif($dom==5){
    $response1=$_POST['response1_'.$row['id']];
    insertintoqnt5($pro, $area, $area_id, $response1); 
}
elseif($dom==6){
    $response1=$_POST['response1_'.$row['id']];
    $response2=$_POST['response2_'.$row['id']];
    insertintoqnt6($pro, $area, $area_id, $response1, $response2); 
}
elseif($dom==7){
    $response1=$_POST['response1_'.$row['id']];
    $response2=$_POST['response2_'.$row['id']];
    insertintoqnt7($pro, $area, $area_id, $response1, $response2); 
}
elseif($dom==8){
    $response1=$_POST['response1_'.$row['id']];
    $response2=$_POST['response2_'.$row['id']];
    insertintoqnt8($pro, $area, $area_id, $response1, $response2); 
}
elseif($dom==9){
    $response1=$_POST['response1_'.$row['id']];
    $response2=$_POST['response2_'.$row['id']];
    $response3=$_POST['response3_'.$row['id']];
    insertintoqnt9($pro, $area, $area_id, $response1, $response2, $response3); 
}
elseif($dom==10){
    $response1=$_POST['response1_'.$row['id']];
    insertintoqnt10($pro, $area, $area_id, $response1); 
}
elseif($dom==11){
    $response1=$_POST['response1_'.$row['id']];
    $response2=$_POST['response2_'.$row['id']];
    insertintoqnt11($pro, $area, $area_id, $response1, $response2); 
}
elseif($dom==12){
    $response1=$_POST['response1_'.$row['id']];
    $response2=$_POST['response2_'.$row['id']];
    $response3=$_POST['response3_'.$row['id']];
    insertintoqnt12($pro, $area, $area_id, $response1, $response2, $response3); 
}
elseif($dom==13){
    $response1=$_POST['response1_'.$row['id']];
    $response2=$_POST['response2_'.$row['id']];
    insertintoqnt13($pro, $area, $area_id, $response1, $response2); 
}
elseif($dom==14){
    $response1=$_POST['response1_'.$row['id']];
    $response2=$_POST['response2_'.$row['id']];
    $response3=$_POST['response3_'.$row['id']];
    insertintoqnt14($pro, $area, $area_id, $response1, $response2, $response3); 
}
elseif($dom==15){
    $response1=$_POST['response1_'.$row['id']];
    $response2=$_POST['response2_'.$row['id']];
    $response3=$_POST['response3_'.$row['id']];
    $response4=$_POST['response4_'.$row['id']];
    $response5=$_POST['response5_'.$row['id']];
    $response6=$_POST['response6_'.$row['id']];
    $response7=$_POST['response7_'.$row['id']];
    $response8=$_POST['response8_'.$row['id']];
    insertintoqnt15($pro, $area, $area_id, $response1, $response2, $response3, $response4, $response5, $response6, $response7, $response8); 
}
elseif($dom==16){
    $response1=$_POST['response1_'.$row['id']];
    $response2=$_POST['response2_'.$row['id']];
    $response3=$_POST['response3_'.$row['id']];
    $response4=$_POST['response4_'.$row['id']];
    insertintoqnt16($pro, $area, $area_id, $response1, $response2, $response3, $response4); 
}
elseif($dom==17){
    $response1=$_POST['response1_'.$row['id']];
    $response2=$_POST['response2_'.$row['id']];
    $response3=$_POST['response3_'.$row['id']];
    $response4=$_POST['response4_'.$row['id']];
    $response5=$_POST['response5_'.$row['id']];
    $response6=$_POST['response6_'.$row['id']];
    insertintoqnt17($pro, $area, $area_id, $response1, $response2, $response3, $response4, $response5, $response6); 
}
elseif($dom==18){
    $response1=$_POST['response1_'.$row['id']];
    $response2=$_POST['response2_'.$row['id']];
    $response3=$_POST['response3_'.$row['id']];
    $response4=$_POST['response4_'.$row['id']];
    insertintoqnt18($pro, $area, $area_id, $response1, $response2, $response3, $response4); 
}
elseif($dom==19){
    $response1=$_POST['response1_'.$row['id']];
    $response2=$_POST['response2_'.$row['id']];
    $response3=$_POST['response3_'.$row['id']];
    $response4=$_POST['response4_'.$row['id']];
    insertintoqnt19($pro, $area, $area_id, $response1, $response2, $response3, $response4); 
}
elseif($dom==20){
    $response1=$_POST['response1_'.$row['id']];
    $response2=$_POST['response2_'.$row['id']];
    insertintoqnt20($pro, $area, $area_id, $response1, $response2); 
}
elseif($dom==21){
    $response1=$_POST['response1_'.$row['id']];
    insertintoqnt21($pro, $area, $area_id, $response1); 
}
elseif($dom==22){
    $response1=$_POST['response1_'.$row['id']];
    $response2=$_POST['response2_'.$row['id']];
    $response3=$_POST['response3_'.$row['id']];
    $response4=$_POST['response4_'.$row['id']];
    $response5=$_POST['response5_'.$row['id']];
    insertintoqnt22($pro, $area, $area_id, $response1, $response2, $response3, $response4, $response5); 
}
elseif($dom==23){
    $response1=$_POST['response1_'.$row['id']];
    insertintoqnt23($pro, $area, $area_id, $response1); 
}
else{
    
}
}

echo("<script>window.close();</script>");
?>