<?php

include("includes/var.php");
include("includes/config.php");
include("includes/function.php");
include('includes/head.php');
include('includes/heading.php');
//$level=$_SESSION['level'];
//$uni=$_SESSION['uni'];
//$col=$_SESSION['college'];
//$dep=$_SESSION['department'];

if($level>2){
   // echo'<meta http-equiv="refresh" content="0; url=main.php">';
}
    $username=$_POST['username'];
    $password1=$_POST['password'];
    $password=md5($password1);
    $email=$_POST['email'];
    $lev=$_POST['perm'];
    $univ=$_POST['univ'];
    $college=$_POST['college'];
    $department=$_POST['department'];
    $program=$_POST['program'];
    if($lev>2){
        $perm=$lev-1;
    }
    else{
        $perm=1;
    }
    
if(!$username){
?>
<script>
    /*function getperm(perm) {
        var u=document.getElementById("uni1");
        var c=document.getElementById("col1");
        var d=document.getElementById("dep1");
        var p=document.getElementById("pro1");
       if (perm == 1) {
            document.getElementById("uni1").style.display = none;
            return;  
        }
       else if (perm == 2) {
            u.disable=true;
            c.disable=true;
            d.disable=true;
            p.disable=true;
        
       }
       else if (perm == 3) {
            u.disable=true;
            c.disable=true;
            d.disable=true;
            p.disable=true; 
       }
       else if (perm == 4) {
            u.disable=true;
            c.disable=true;
            d.disable=true;
            p.disable=true;
        
       }
       else if (perm == 5) {
            u.disable=true;
            c.disable=true;
            d.disable=true;
            p.disable=true;
       }
       else{
            u.disable=true;
            c.disable=true;
            d.disable=true;
            p.disable=true;
       }
    }
    */
    function getcollbyuni(str) {
        var xhttp;    
         if (str == 0) {
        document.getElementById("coll").innerHTML ="";
        document.getElementById("coll").disabled=true;
        document.getElementById("dep").disabled=true;
        document.getElementById("pro").disabled=true;
        return;
         }
         xhttp = new XMLHttpRequest();
         xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("coll").innerHTML = this.responseText;
                document.getElementById("coll").disabled=false;
            }
        };
         xhttp.open("GET", "getcollbyuni.php?u="+str, true);
            xhttp.send();
        }
    
    function getdepbycoll(str1) {
        var xhttp;    
         if (str1 == 0) {
        document.getElementById("dep").innerHTML ="";
        document.getElementById("dep").disabled=true;
        document.getElementById("pro").disabled=true;
        return;
         }
         xhttp = new XMLHttpRequest();
         xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("dep").innerHTML = this.responseText;
                document.getElementById("dep").disabled=false;
            }
        };
        xhttp.open("GET", "getdepbycoll.php?col="+str1, true);
        xhttp.send();
    }
    function getprobydep(str2) {
       var xhttp;    
         if (str2==0) {
        document.getElementById("pro").innerHTML ="";
        document.getElementById("pro").disabled=true;
        return;
         }
         xhttp = new XMLHttpRequest();
         xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("pro").innerHTML = this.responseText;
                document.getElementById("pro").disabled=false;
            }
        };
         xhttp.open("GET", "getprobydep.php?d="+str2, true);
            xhttp.send();
    }
 </script>
<div class="container">
    
    <form class="form-horizontal" method="post" autocomplete="off">
        <div class="form-group">
            <div class="col-sm-10">
            <select name="perm" id="perm" class="form-control" onchange="getperm(this.value);">
            <option value="0" sellected>الرجاء اختيار نوع المستخدم</option>
            <option value="1" >هيئة اعتماد</option>
            <option value="3" >حساب جامعة</option>
            <option value="4" >حساب كلية</option>
            <option value="5" >حساب قسم</option>
            <option value="2" >مقيم خارجي</option>
            </select>
            </div>
            <label for="website"  class="control-label col-sm-2">نوع المستخدم :</label>
        </div>        
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" name="username" autocomplete="off" placeholder="اسم المستخدم"/>
            </div>
            <label for="name" class="control-label col-sm-2">اسم المستخدم :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" autocomplete="off" type="password" name="password" placeholder="كلمة السر"/>
            </div>
            <label for="name" class="control-label col-sm-2">كلمة السر :</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
            <input class="form-control" type="text" name="email" placeholder="البريد الإلكتروني"/>
            </div>
            <label for="short_name" class="control-label col-sm-2">البريد الإلكتروني : </label>
        </div>
        <div class="form-group" id="uni1" >
            <div class="col-sm-10">
            <select name="univ" id="uni" class="form-control" onchange="getcollbyuni(this.value);">
                <option value="0" sellected>الرجاء اختيار الجامعة</option>
                <?php
                if($uni>=1){
                    $statment=mysql_query("SELECT *FROM university WHERE id=$uni");
                }
                else{
                    $statment=mysql_query("SELECT *FROM university");
                }
                while($row=mysql_fetch_array($statment)){
                    echo'<option value="'.$row['id'].'">'.$row['name'].'</option>';
                }
                ?>
                
            </select>
            </div>
            <label for="website"  class="control-label col-sm-2">الجامعة :</label>
        </div>
        <div class="form-group" id="col1">
            <div class="col-sm-10">
            
            <select name="college" disabled id="coll" onchange="getdepbycoll(this.value);" class="form-control">
             <option value="0" sellected>الرجاء اختيار الكلية</option>  
            </select>
            </div>
            <label for="college"  class="control-label col-sm-2">الكلية :</label>
        </div>
        <div class="form-group" id="dep1">
            <div class="col-sm-10">
            <select name="department" id="dep" disabled onchange="getprobydep(this.value);" class="form-control">
             <option value="0" sellected>الرجاء اختيار القسم</option>   
            </select>
            </div>
            <label for="website"  class="control-label col-sm-2">القسم :</label>
        </div>
        <div class="form-group" id="pro1">
                <div class="col-sm-10">
                <select name="program" disabled id="pro" class="form-control">
                <option value="0" sellected>الرجاء اختيار البرنامج</option>    
                </select>
                </div>
                <label for="website"  class="control-label col-sm-2">البرنامج :</label>
            </div>
       
        <div class="form-group">
            <input type="submit" formnovalidate value="إضافة مستخدم" class="btn btn-block btn-primary"/>
        </div>
       
        
          
    </form>
</div>
<?php
}
else{
    
    

    $statment=mysql_query("INSERT INTO `users`
(
`username`,
`password`,
`email`,
`level`,
`uni`,
`college`,
`department`,
`program`,
`perm`)
VALUES
(
'$username',
'$password',
'$email',
'$lev',
'$univ',
'$college',
'$department',
'$program',
'$perm')");
if($statment){
     echo('<meta http-equiv="refresh" content="0; url=users.php">');    
}
else{
    echo(mysql_error());    
}
}
include('includes/foot.php');
?>