<?php
include '../cxn.php';
include('../session.php');

	$id = $_GET['id'];
	
	// Comprobamos que el nombre de usuario a eliminar no sea el usuario conectado actualmente
    $sql = "SELECT db_usuarios.username FROM db_usuarios WHERE id='$id'";
	$query = mysql_query($sql);
	$row = mysql_fetch_array($query);
	$rows = mysql_num_rows($query);

    if ($_SESSION['login_user'] == $row["username"]) 
    {
		header("location: ../paginas/EliminarSecretario.php?error");
		echo "Error";
    }
	else 
	{
		$sql = "delete from db_usuarios where db_usuarios.id = '$id'";
		@mysql_query($sql);
		header("location: ../paginas/EliminarSecretario.php?exito");				
	}

?>