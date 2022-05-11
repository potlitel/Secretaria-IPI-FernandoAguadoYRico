<?php
	include "cxn.php";
	session_start();	
	$user=$_POST["login_user"];
	$pass=$_POST["login_pass"];
	
	//echo "$user<br>$pass";
	$consulta = mysql_query("SELECT * FROM session WHERE usuario='$user' AND password='$pass'");
	$cont_total = mysql_num_rows($consulta);
	$array = mysql_fetch_array($consulta);
	//echo $cont_total;
	if($cont_total!==1)
	{
		echo "es distinto";
	}
	else
	{
		//echo "user ".$valorConsulta['usuario'];
		$_SESSION["ID"]=$array['id'];
		$_SESSION["USER"]=$array['usuario'];
		$_SESSION["LEVEL"]=$array['nivel'];		
		$_SESSION["ACTIVE"]=$array['activado'];
		header ("location:index.php");
		
	}
	
	
?>