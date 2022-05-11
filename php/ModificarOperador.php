<?php
include '../cxn.php';

	$id          = $_POST['id'];
	//$username    = $_POST['username'];
	$nombre      = $_POST['nombre'];
	$apellidoUno = $_POST['primerapellido'];
	$apellidoDos = $_POST['segundoapellido'];
	$ci          = $_POST['ci'];
	$direccion   = $_POST['dp'];
	$sexo        = $_POST['sexo'];

	// Comprobamos si el nombre de usuario o la cuenta de correo ya exist&iacute;an
    /*$checkuser = mysql_query("SELECT db_usuarios.username FROM db_usuarios WHERE username !='$username'");
    $username_exist = mysql_num_rows($checkuser);
    if ($username_exist>0) 
    {
		header("location: ../paginas/FormEditarSecretarioDocente.php?id=$id&Error");
    }
	else 
	{*/
		$sql = "update db_usuarios set nombre='$nombre',primerapellido='$apellidoUno',segundoapellido='$apellidoDos',ci='$ci',direccionparticular='$direccion',sexo='$sexo' where id='$id'";	
		//echo $sql;
		@mysql_query($sql);
		header("location: ../paginas/FormEditarSecretarioDocente.php?id=$id&exito");
	//}

?>