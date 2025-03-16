<?php
$password=$_POST['password'];
$password=md5($password);
$username=$_POST['username'];
session_start();
$user=$_SESSION['username'];
?>