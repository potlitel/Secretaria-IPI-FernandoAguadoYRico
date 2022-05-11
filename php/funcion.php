<?php
	
	function acceso_denegado()
	{
		
		if(!isset($_SESSION["LEVEL"]))
		{
			header("location:index.php");
		}
		else
		{
			echo "<script language='javascript'>";
			echo "alert('Correcto');";
			echo "</script>";
		}
	}	
?>