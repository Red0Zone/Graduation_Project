<?php
    $dbhost ="localhost";
    $dbuname="u759639691_wpes";
    $dbpass ="Clean@cih1";
    $dbname ="u759639691_wpes";
    mysql_connect($dbhost, $dbuname, $dbpass);
    mysql_select_db("$dbname") or die (mysql_error());
    mysql_query("SET NAMES utf8");
   
?>