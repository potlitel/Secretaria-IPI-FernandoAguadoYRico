<?php
	include "cxn.php";
	$id=$_GET['id'];
	//mysql_query("UPDATE db_estudiantes SET ap_1='$ap_1' WHERE id = $id");
	mysql_query("DELETE FROM db_estudiantes WHERE id = '$id' LIMIT 1");	
	header ("location:index.php?mod=administrar/listado.php");	
	//echo "Borrado";
	//echo "Nose borro";
?>