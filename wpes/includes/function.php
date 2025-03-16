<?php
function login($username, $password){
    $statment = mysql_query("SELECT *FROM users WHERE username='$username' AND password='$password'");
    $num = mysql_num_rows($statment);
    
    if($num === 1){
        session_start();
        $_SESSION['username']=$username;
    }
    else{
        
    }
}
function getpermbyusername($user){
    $statment = mysql_query("SELECT *FROM users WHERE username='$user'");
    while($row=mysql_fetch_array($statment)){
        session_start();
        $_SESSION['id']=$row['id'];
        $_SESSION['username']=$row['username'];
        $_SESSION['name']=$row['name'];
        $_SESSION['password']=$row['password'];
        $_SESSION['email']=$row['email'];
        $_SESSION['level']=$row['level'];
        $_SESSION['uni']=$row['uni'];
        $_SESSION['college']=$row['college'];
        $_SESSION['department']=$row['department'];
        $_SESSION['program']=$row['program'];
        $_SESSION['perm']=$row['perm'];  
    }
}
function getunibyid($id){
    if($id>0){
    $statment = mysql_query("SELECT *FROM university WHERE id='$id'");
    while($row=mysql_fetch_array($statment)){
        $uni = $row['name'];
    }
    }
    else{
        $uni="عام";
    }
    return $uni;
}
function getcolbyid($id){
    if($id>0){
    $statment = mysql_query("SELECT *FROM colleges WHERE id='$id'");
    while($row=mysql_fetch_array($statment)){
        $uni = $row['name'];
    }
    }
    else{
        $uni="عام";
    }
    return $uni;
}
function getdepbyid($id){
    if($id>0){
    $statment = mysql_query("SELECT *FROM departments WHERE id='$id'");
    while($row=mysql_fetch_array($statment)){
        $uni = $row['name'];
    }
    }
    else{
        $uni="عام";
    }
    return $uni;
}
function getprobyid($id){
    if($id>0){
    $statment = mysql_query("SELECT *FROM programs WHERE id='$id'");
    while($row=mysql_fetch_array($statment)){
        $uni = $row['name'];
    }
    }
    else{
        $uni="عام";
    }
    return $uni;
}
function getavprogressbyuni($uni){
    $statment=mysql_query("SELECT *FROM programs WHERE uni=$uni");
    $statment2=mysql_query("SELECT *FROM indicators");
    $stamtent3=mysql_query("SELECT *FROM qlt_responses WHERE uni=$uni");
    $n1=mysql_num_rows($statment);
    $n2=mysql_num_rows($statment2);
    $n3=mysql_num_rows($stamtent3);
    $perc = $n3/($n1*$n2);
    $result=$perc*100;
    return $result;
}
function getavprogressbydep($uni){
    $statment=mysql_query("SELECT *FROM programs WHERE dep=$uni");
    $statment2=mysql_query("SELECT *FROM indicators");
    $stamtent3=mysql_query("SELECT *FROM qlt_responses WHERE dep=$uni");
    $n1=mysql_num_rows($statment);
    $n2=mysql_num_rows($statment2);
    $n3=mysql_num_rows($stamtent3);
    $perc = $n3/($n1*$n2);
    $result=$perc*100;
    return $result;
}
function getavprogressbycol($uni){
    $statment=mysql_query("SELECT *FROM programs WHERE col=$uni");
    $statment2=mysql_query("SELECT *FROM indicators");
    $stamtent3=mysql_query("SELECT *FROM qlt_responses WHERE col=$uni");
    $n1=mysql_num_rows($statment);
    $n2=mysql_num_rows($statment2);
    $n3=mysql_num_rows($stamtent3);
    $perc = $n3/($n1*$n2);
    $result=$perc*100;
    return $result;
}
function addresponse($response, $uni, $col, $dep, $pro, $comment, $id, $dom){
       $statment=mysql_query("INSERT INTO `qltresponses`
        (`indicator`,
        `dom`,
        `pro`,
        `response`,
        `comment`,
        `uni`,
        `col`,
        `dep`)
        VALUES
        ('$id',
        '$dom',
        '$pro',
        '$response',
        '$comment',
        '$uni',
        '$col',
        '$dep')");
            if($statment){
        
            }
            else{
          echo(mysql_error());
          }
  
}
function addresponsetester($response, $uni, $col, $dep, $pro, $comment, $id, $dom){
       $statment=mysql_query("INSERT INTO `qltresponsestester`
        (`indicator`,
        `dom`,
        `pro`,
        `response`,
        `comment`,
        `uni`,
        `col`,
        `dep`)
        VALUES
        ('$id',
        '$dom',
        '$pro',
        '$response',
        '$comment',
        '$uni',
        '$col',
        '$dep')");
            if($statment){
        
            }
            else{
          echo(mysql_error());
          }
  
}
function getqltresponse($domid, $pro){
    $statment = mysql_query("SELECT *FROM qltresponses WHERE indicator=$domid AND pro=$pro ORDER BY time DESC LIMIT 1");
    while($row=mysql_fetch_array($statment)){
        $response=$row['response'];
    }
    if($response==1){
        $result="إلى حد ما";
    }
    elseif($response==2){
        $result="نعم";
    }
    else{
        $result="لا";   
    }
    return $result;
}
function getqltresponsetester($domid, $pro){
    $statment = mysql_query("SELECT *FROM qltresponsestester WHERE indicator=$domid AND pro=$pro ORDER BY time DESC LIMIT 1");
    while($row=mysql_fetch_array($statment)){
        $response=$row['response'];
    }
    if($response==1){
        $result="إلى حد ما";
    }
    elseif($response==2){
        $result="نعم";
    }
    else{
        $result="لا";   
    }
    return $result;
}
function getqltresponsev($domid, $pro){
    $statment = mysql_query("SELECT *FROM qltresponses WHERE indicator=$domid AND pro=$pro ORDER BY time DESC LIMIT 1");
    while($row=mysql_fetch_array($statment)){
        $response=$row['response'];
    }
    
    return $response;
}
function getqltresponsevtester($domid, $pro){
    $statment = mysql_query("SELECT *FROM qltresponsestester WHERE indicator=$domid AND pro=$pro ORDER BY time DESC LIMIT 1");
    while($row=mysql_fetch_array($statment)){
        $response=$row['response'];
    }
    
    return $response;
}


function getqltcomment($domid, $pro){
    $statment = mysql_query("SELECT *FROM qltresponses WHERE indicator=$domid AND pro=$pro ORDER BY time DESC LIMIT 1");
    while($row=mysql_fetch_array($statment)){
        $result=$row['comment'];
    }
    return $result;
}
function getqltcommenttester($domid, $pro){
    $statment = mysql_query("SELECT *FROM qltresponsestester WHERE indicator=$domid AND pro=$pro ORDER BY time DESC LIMIT 1");
    while($row=mysql_fetch_array($statment)){
        $result=$row['comment'];
    }
    return $result;
}
function insertintoqnt2($pro, $area, $area_id, $response1, $response2, $response3, $response4){
        $statment1=mysql_query("INSERT INTO `qnt_2_response`
                    (`program`,
                    `qnt`,
                    `response1`,
                    `response2`,
                    `response3`,
                    `response4`,
                    `area_id`)
                    VALUES
                    (
                    '$pro',
                    '$area',
                    '$response1',
                    '$response2',
                    '$response3',
                    '$response4',
                    '$area_id'
                        )");
            if($statment1){
                echo"done";
                }
             else{
                echo mysql_error();
                }
}

function insertintoqnt3($pro, $area, $area_id, $response1, $response2, $response3, $response4, $response5, $response6, $response7){
        $statment1=mysql_query("INSERT INTO `qnt_2_response`
                    (`program`,
                    `qnt`,
                    `response1`,
                    `response2`,
                    `response3`,
                    `response4`,
                    `response5`,
                    `response6`,
                    `response7`,
                    `area_id`)
                    VALUES
                    (
                    '$pro',
                    '$area',
                    '$response1',
                    '$response2',
                    '$response3',
                    '$response4',
                    '$response5',
                    '$response6',
                    '$response7',
                    '$area_id'
                        )");
            if($statment1){
                echo"done";
                }
             else{
                echo mysql_error();
                }
}
function insertintoqnt4($pro, $area, $area_id, $response1, $response2){
        $statment1=mysql_query("INSERT INTO `qnt_2_response`
                    (`program`,
                    `qnt`,
                    `response1`,
                    `response2`,
                    `area_id`)
                    VALUES
                    (
                    '$pro',
                    '$area',
                    '$response1',
                    '$response2',
                    '$area_id'
                        )");
            if($statment1){
                echo"done";
                }
             else{
                echo mysql_error();
                }
}
function insertintoqnt5($pro, $area, $area_id, $response1){
        $statment1=mysql_query("INSERT INTO `qnt_2_response`
                    (`program`,
                    `qnt`,
                    `response1`,
                    `area_id`)
                    VALUES
                    (
                    '$pro',
                    '$area',
                    '$response1',
                    '$area_id'
                        )");
            if($statment1){
                echo"done";
                }
             else{
                echo mysql_error();
                }
}
function insertintoqnt6($pro, $area, $area_id, $response1, $response2){
        $statment1=mysql_query("INSERT INTO `qnt_2_response`
                    (`program`,
                    `qnt`,
                    `response1`,
                    `response2`,
                    `area_id`
                    )
                    VALUES
                    (
                    '$pro',
                    '$area',
                    '$response1',
                    '$response2',
                    '$area_id'                    
                        )");
            if($statment1){
                echo"done";
                }
             else{
                echo mysql_error();
                }
}
function insertintoqnt7($pro, $area, $area_id, $response1, $response2){
        $statment1=mysql_query("INSERT INTO `qnt_2_response`
                    (`program`,
                    `qnt`,
                    `response1`,
                    `response2`,
                    `area_id`
                    )
                    VALUES
                    (
                    '$pro',
                    '$area',
                    '$response1',
                    '$response2',
                    '$area_id'
                        )");
            if($statment1){
                echo"done";
                }
             else{
                echo mysql_error();
                }
}
function insertintoqnt8($pro, $area, $area_id, $response1, $response2){
        $statment1=mysql_query("INSERT INTO `qnt_2_response`
                    (`program`,
                    `qnt`,
                    `response1`,
                    `response2`,
                    `area_id`)
                    VALUES
                    (
                    '$pro',
                    '$area',
                    '$response1',
                    '$response2',
                    '$area_id'
                        )");
            if($statment1){
                echo"done";
                }
             else{
                echo mysql_error();
                }
}
function insertintoqnt9($pro, $area, $area_id, $response1, $response2, $response3){
        $statment1=mysql_query("INSERT INTO `qnt_2_response`
                    (`program`,
                    `qnt`,
                    `response1`,
                    `response2`,
                    `response3`,
                    `area_id`)
                    VALUES
                    (
                    '$pro',
                    '$area',
                    '$response1',
                    '$response2',
                    '$response3',
                    '$area_id'
                        )");
            if($statment1){
                echo"done";
                }
             else{
                echo mysql_error();
                }
}
function insertintoqnt10($pro, $area, $area_id, $response1){
        $statment1=mysql_query("INSERT INTO `qnt_2_response`
                    (`program`,
                    `qnt`,
                    `response1`,
                    `area_id`)
                    VALUES
                    (
                    '$pro',
                    '$area',
                    '$response1',
                    '$area_id'
                        )");
            if($statment1){
                echo"done";
                }
             else{
                echo mysql_error();
                }
}
function insertintoqnt11($pro, $area, $area_id, $response1, $response2){
        $statment1=mysql_query("INSERT INTO `qnt_2_response`
                    (`program`,
                    `qnt`,
                    `response1`,
                    `response2`,
                    `area_id`)
                    VALUES
                    (
                    '$pro',
                    '$area',
                    '$response1',
                    '$response2',
                    '$area_id'
                        )");
            if($statment1){
                echo"done";
                }
             else{
                echo mysql_error();
                }
}
function insertintoqnt12($pro, $area, $area_id, $response1, $response2, $response3){
        $statment1=mysql_query("INSERT INTO `qnt_2_response`
                    (`program`,
                    `qnt`,
                    `response1`,
                    `response2`,
                    `response3`,
                    `area_id`)
                    VALUES
                    (
                    '$pro',
                    '$area',
                    '$response1',
                    '$response2',
                    '$response3',
                    '$area_id'
                        )");
            if($statment1){
                echo"done";
                }
             else{
                echo mysql_error();
                }
}
function insertintoqnt13($pro, $area, $area_id, $response1, $response2){
        $statment1=mysql_query("INSERT INTO `qnt_2_response`
                    (`program`,
                    `qnt`,
                    `response1`,
                    `response2`,
                    `area_id`)
                    VALUES
                    (
                    '$pro',
                    '$area',
                    '$response1',
                    '$response2',
                    '$area_id'
                        )");
            if($statment1){
                echo"done";
                }
             else{
                echo mysql_error();
                }
}
function insertintoqnt14($pro, $area, $area_id, $response1, $response2, $response3){
        $statment1=mysql_query("INSERT INTO `qnt_2_response`
                    (`program`,
                    `qnt`,
                    `response1`,
                    `response2`,
                    `response3`,
                    `area_id`)
                    VALUES
                    (
                    '$pro',
                    '$area',
                    '$response1',
                    '$response2',
                    '$response3',
                    '$area_id'
                        )");
            if($statment1){
                echo"done";
                }
             else{
                echo mysql_error();
                }
}
function insertintoqnt15($pro, $area, $area_id, $response1, $response2, $response3, $response4, $response5, $response6, $response7, $response8){
        $statment1=mysql_query("INSERT INTO `qnt_2_response`
                    (`program`,
                    `qnt`,
                    `response1`,
                    `response2`,
                    `response3`,
                    `response4`,
                    `response5`,
                    `response6`,
                    `response7`,
                    `response8`,
                    `area_id`)
                    VALUES
                    (
                    '$pro',
                    '$area',
                    '$response1',
                    '$response2',
                    '$response3',
                    '$response4',
                    '$response5',
                    '$response6',
                    '$response7',
                    '$response8',
                    '$area_id'
                        )");
            if($statment1){
                echo"done";
                }
             else{
                echo mysql_error();
                }
}
function insertintoqnt16($pro, $area, $area_id, $response1, $response2, $response3, $response4){
        $statment1=mysql_query("INSERT INTO `qnt_2_response`
                    (`program`,
                    `qnt`,
                    `response1`,
                    `response2`,
                    `response3`,
                    `response4`,
                    `area_id`)
                    VALUES
                    (
                    '$pro',
                    '$area',
                    '$response1',
                    '$response2',
                    '$response3',
                    '$response4',
                    '$area_id'
                        )");
            if($statment1){
                echo"done";
                }
             else{
                echo mysql_error();
                }
}
function insertintoqnt17($pro, $area, $area_id, $response1, $response2, $response3, $response4, $response5, $response6){
        $statment1=mysql_query("INSERT INTO `qnt_2_response`
                    (`program`,
                    `qnt`,
                    `response1`,
                    `response2`,
                    `response3`,
                    `response4`,
                    `response5`,
                    `response6`,
                    `area_id`)
                    VALUES
                    (
                    '$pro',
                    '$area',
                    '$response1',
                    '$response2',
                    '$response3',
                    '$response4',
                    '$response5',
                    '$response6',
                    '$area_id'
                        )");
            if($statment1){
                echo"done";
                }
             else{
                echo mysql_error();
                }
}
function insertintoqnt18($pro, $area, $area_id, $response1, $response2, $response3, $response4){
        $statment1=mysql_query("INSERT INTO `qnt_2_response`
                    (`program`,
                    `qnt`,
                    `response1`,
                    `response2`,
                    `response3`,
                    `response4`,
                    `area_id`)
                    VALUES
                    (
                    '$pro',
                    '$area',
                    '$response1',
                    '$response2',
                    '$response3',
                    '$response4',
                    '$area_id'
                        )");
            if($statment1){
                echo"done";
                }
             else{
                echo mysql_error();
                }
}
function insertintoqnt19($pro, $area, $area_id, $response1, $response2, $response3, $response4){
        $statment1=mysql_query("INSERT INTO `qnt_2_response`
                    (`program`,
                    `qnt`,
                    `response1`,
                    `response2`,
                    `response3`,
                    `response4`,
                    `area_id`)
                    VALUES
                    (
                    '$pro',
                    '$area',
                    '$response1',
                    '$response2',
                    '$response3',
                    '$response4',
                    '$area_id'
                        )");
            if($statment1){
                echo"done";
                }
             else{
                echo mysql_error();
                }
}
function insertintoqnt20($pro, $area, $area_id, $response1, $response2){
        $statment1=mysql_query("INSERT INTO `qnt_2_response`
                    (`program`,
                    `qnt`,
                    `response1`,
                    `response2`,
                    `area_id`)
                    VALUES
                    (
                    '$pro',
                    '$area',
                    '$response1',
                    '$response2',
                    '$area_id'
                        )");
            if($statment1){
                echo"done";
                }
             else{
                echo mysql_error();
                }
}
function insertintoqnt21($pro, $area, $area_id, $response1){
        $statment1=mysql_query("INSERT INTO `qnt_2_response`
                    (`program`,
                    `qnt`,
                    `response1`,
                    `area_id`
                    )
                    VALUES
                    (
                    '$pro',
                    '$area',
                    '$response1',
                    '$area_id'
                        )");
            if($statment1){
                echo"done";
                }
             else{
                echo mysql_error();
                }
}
function insertintoqnt22($pro, $area, $area_id, $response1, $response2, $response3, $response4, $response5){
        $statment1=mysql_query("INSERT INTO `qnt_2_response`
                    (`program`,
                    `qnt`,
                    `response1`,
                    `response2`,
                    `response3`,
                    `response4`,
                    `response5`,
                    `area_id`)
                    VALUES
                    (
                    '$pro',
                    '$area',
                    '$response1',
                    '$response2',
                    '$response3',
                    '$response4',
                    '$response5',
                    '$area_id'
                        )");
            if($statment1){
                echo"done";
                }
             else{
                echo mysql_error();
                }
}
function insertintoqnt23($pro, $area, $area_id, $response1){
        $statment1=mysql_query("INSERT INTO `qnt_2_response`
                    (`program`,
                    `qnt`,
                    `response1`,
                    `area_id`
                    )
                    VALUES
                    (
                    '$pro',
                    '$area',
                    '$response1',
                    '$area_id'
                        )");
            if($statment1){
                echo"done";
                }
             else{
                echo mysql_error();
                }
}

function getqntvalue($area, $dom, $pro, $response){
    $statment=mysql_query("SELECT *FROM qnt_2_response WHERE program=$pro AND qnt=$dom AND area_id=$area ORDER BY time DESC LIMIT 1");
    while($row=mysql_fetch_array($statment)){
        $result=$row['response'.$response];
        return $result;
    }
    echo mysql_error();
    
}
function getfirstidrptbydom($domid){
    $statment=mysql_query("SELECT *FROM report WHERE dom='$domid' ORDER BY id ASC LIMIT 1");
    while($row=mysql_fetch_array($statment)){
        $result=$row['id'];
        return $result;
    }
}
function getarearesult($id2, $pro){
    $statment=mysql_query("SELECT *FROM report_result WHERE ind=$id2 AND program=$pro ORDER BY time DESC LIMIT 1");
    while($row=mysql_fetch_array($statment)){
        $result=$row['result'];
        return $result;
    }
   
    
}
function getareastrng($id2, $pro){
    $statment=mysql_query("SELECT *FROM report_result WHERE ind=$id2 AND program=$pro ORDER BY time DESC LIMIT 1 ");
    while($row=mysql_fetch_array($statment)){
        $result=$row['power'];
       return $result; 
    }
    echo mysql_error();
}
function getareaweak($id2, $pro){
    $statment=mysql_query("SELECT *FROM report_result WHERE ind=$id2 AND program=$pro ORDER BY time DESC LIMIT 1");
    while($row=mysql_fetch_array($statment)){
        $result=$row['weak'];
        return $result;
    }
    echo mysql_error();
}
function getareaimpstrng($id2, $pro){
    $statment=mysql_query("SELECT *FROM report_result WHERE ind=$id2 AND program=$pro ORDER BY time DESC LIMIT 1");
    while($row=mysql_fetch_array($statment)){
        $result=$row['improve_power'];
        return $result;
    }
    echo mysql_error();
}
function getareaimpweak($id2, $pro){
    $statment=mysql_query("SELECT *FROM report_result WHERE ind=$id2 AND program=$pro ORDER BY time DESC LIMIT 1");
    while($row=mysql_fetch_array($statment)){
        $result=$row['improve_weak'];
        return $result;
    }
    echo mysql_error();
}
function getnumareaqlt(){
   $statment=mysql_query("SELECT *FROM indicators");
   $result=mysql_num_rows($statment);
   return $result;
}
function getprogressbyuni($uni1){
   $indicators = getnumareaqlt();
   $statment=mysql_query("SELECT *FROM qltresponses WHERE uni=$uni1");
   $num=mysql_num_rows($statment);
   $result=$num/$indicators;
   return $result;
}
function getdomweight($dom){
    $statment1=mysql_query("SELECT *FROM indicators WHERE domain=$dom");
    $statment2=mysql_query("SELECT *FROM indicators");
    $weight=mysql_num_rows($statment1)/mysql_num_rows($statment2);
    $result=round(100*$weight, 2);
    return $result;
}
function getdomscore($dom, $pro){
    $statment1 = mysql_query("SELECT *FROM indicators WHERE domain=$dom");
    $statement = mysql_query("SELECT SUM(response) AS total FROM qltresponses WHERE pro=$pro AND dom=$dom");
    while($row=mysql_fetch_array($statement)){
	$total=$row['total'];
	$n=round((100 * $total)/(mysql_num_rows($statment1)*2), 2);
    return $n;
}
}
function getdomwscore($dom, $pro){
   
   $result = (getdomscore($dom, $pro)/100) * (getdomweight($dom));
   return $result;
    
}
function getproresult($dom){
    $statment1=mysql_query("SELECT *FROM indicators");
    $statement2 = mysql_query("SELECT SUM(response) AS total FROM qltresponses WHERE pro=$dom");
    while($row=mysql_fetch_array($statement2)){
	$total=$row['total'];
	$n=round((100 * $total)/(mysql_num_rows($statment1)*2), 2);
    return $n;
    }
}
?>