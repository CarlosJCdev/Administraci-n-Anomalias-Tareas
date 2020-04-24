<?php


$dbhost = "localhost"; 
$dbuser = "root"; 
$dbbase = "mp"; 

$link = mysql_connect($dbhost,$dbuser);
		mysql_select_db($dbbase,$link);
?>