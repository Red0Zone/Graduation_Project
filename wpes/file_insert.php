<?php
//include('includes/function.php');
//check_session();
include("includes/config.php");
//include("includes/calc.php");
$target_dir = "evidence/";
$file=$_FILES["file"]["name"];
$url=$_POST['url'];
$select=$_POST['select'];
$area=$_POST['id'];
$dom=$_POST['dom'];
$text=$_POST['text'];
$type=1;
 $start='qul_ev_';
//if($type==1){
    //$dom=getqareadom($area);
    //$sub=getqareasub($area);
  //  $start='qul_ev_';
//}
//elseif($type==2){
    //$dom=getqntdom($area);
  //  $sub=getqntsub($area);
    //$start='qun_ev_';
//}
//elseif($type==3){
    //$dom=$area;
  //  $sub=1;
   // $start='rep_ev_'; 
//}
$allowed =  array('gif', 'png', 'jpg', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pps', 'pptx', 'ppsx', 'pdf', 'rar');

if(empty($file) && empty($url)){
$target_file1=$select;
$target_file=$target_dir . $target_file1;


}
elseif(empty($file) && empty($select)){
$target_file=$url;
$target_file1=$url;

}
elseif(empty($url) && empty($select)){
//$num=getfilenum($area, $type);
$snum=rand(1,10000);
$ext = pathinfo($file, PATHINFO_EXTENSION);
while(file_exists($target_dir.$start .  sprintf('%03s',$snum) .'.'. $ext)){
    $snum=rand(1,10000);
}
if(in_array($ext,$allowed)) {
    $target_file1=$start .  sprintf('%03s',$snum) .'.'. $ext ;
    $target_file=$target_dir . $target_file1;
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);   
}
else{
    echo'<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
    echo 'الملف المدخل ليس من صيغة مسموح بها';
    exit();
}

}


if(mysql_query("
               INSERT INTO `files`
                (`dom_id`,
                `type`,
                `name`,
                `descripe`,
                `location`,
                `area_id`)
                VALUES
                ('$dom',
                '$type',
                '$target_file1',
                '$text',
                '$target_file',
                '$area'
                );

               ")){
    
    echo ("<script type='text/javascript'>");
    echo ("window.close();");
    echo ("</script>");
}
else{
    echo mysql_error();}

?>