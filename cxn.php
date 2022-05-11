<?php
header("Content-Type: text/html; charset=UTF-8");
include_once('fix_mysql.inc.php');

	$connection = mysql_connect("localhost","root","") or die ("Error de conexion");
	$db = mysql_select_db("secre") or die ("Error base datos");
	// Make sure data is UTF*, that way database can see accents and stuff
	mysql_query("SET NAMES 'utf8'", $connection);
	mysql_query("SET CHARACTER_SET 'utf8'", $connection);

?>