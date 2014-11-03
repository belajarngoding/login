<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db_name = "cms";

mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($db_name) or die (mysql_error());
?>