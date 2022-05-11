<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/jquery.blockUI.js"></script>
<?php
header("Content-Type: text/html; charset=UTF-8");
include_once('fix_mysql.inc.php');

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) 
{
	/*if (empty($_POST['username']) || empty($_POST['password'])) 
	{
	 sleep(6);
	 $error = "Usuario o clave incorrecta, intentelo nuevamente";
	}
	else
	{*/
	// Define $username and $password
	$username=$_POST['username'];
	$password=$_POST['password'];
	// To protect MySQL injection for Security purpose
	$username = stripslashes($username);
	$password = stripslashes($password);
	// $username = mysql_real_escape_string($username);
	// $password = mysql_real_escape_string($password);
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysql_connect("localhost", "root", "");
	//mysql_query('SET NAMES utf8');
	// Selecting Database
	$db = mysql_select_db("secre", $connection);
	// Make sure data is UTF*, that way database can see accents and stuff
	mysql_query("SET NAMES 'utf8'", $connection);
	mysql_query("SET CHARACTER_SET 'utf8'", $connection);

	// SQL query to fetch information of registerd users and finds user match.
	$query = mysql_query("select * from db_usuarios where password='$password' AND username='$username'", $connection);
	$row = mysql_fetch_array($query);
	$rows = mysql_num_rows($query);
	if ($rows == 1) 
	{
		// Initializing Session
		$_SESSION['login_user']=$row["username"];
		$_SESSION['login_name']=$row["nombre"];
		$_SESSION['login_1p']  =$row["primerapellido"];
		$_SESSION['login_2p']  =$row["segundoapellido"];
		sleep(10);	
		header("location: paginas/home.php"); // Redirecting To Other Page
	}
	else 
	{
		sleep(10);
		$error = 1;
	}
	mysql_close($connection); // Closing Connection
}
/*}*/
?>
