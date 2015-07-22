<?php

/* Database config */

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= 'bumbapass';
$db_database	= 'bumba'; 

/* End config */

$link = @mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

$dbc = "mysql:host=$db_host;dbname=$db_database";
try {
	$db = new PDO($dbc, $db_user, $db_pass);
}
catch (PDOException $e) {
	error_log('PDO Exception: '.$e->getMessage());
	die('There is an error. Check it N');
}

mysql_query("SET NAMES 'utf8'");
mysql_select_db($db_database,$link);

?>