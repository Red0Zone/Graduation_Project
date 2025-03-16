<?
session_start();
    unset($_SESSION['id']);
    unset($_SESSION['uni_id']);
    unset($_SESSION['user_name']);
    unset($_SESSION['permission']);
    unset($_SESSION['name']);
    unset($_SESSION['phone']);
    unset($_SESSION['email']);
    unset($_SESSION['position']);
    unset($_SESSION['birthdate']);
session_unset();
session_destroy(); 
echo'<meta http-equiv="refresh" content="0; url=index.php">';
?>