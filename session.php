<?php
header("Content-Type: text/html; charset=UTF-8");
include_once('fix_mysql.inc.php');

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("secre", $connection);
// Make sure data is UTF*, that way database can see accents and stuff
mysql_query("SET NAMES 'utf8'", $connection);
mysql_query("SET CHARACTER_SET 'utf8'", $connection);

// Starting Session
session_start();
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select username from db_usuarios where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
// Closing Connection
mysql_close($connection); 
// Redirecting To Home Page
header('Location: ../index.php'); 
}
?>
