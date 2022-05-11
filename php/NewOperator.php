<?php
include '../cxn.php';

	$username    = $_POST['username'];
	$nombre      = $_POST['nombre'];
	$apellidoUno = $_POST['apellidoUno'];
	$apellidoDos = $_POST['apellidoDos'];
	$clave       = $_POST['clave'];
	$ci          = $_POST['ci'];
	$direccion   = $_POST['direccion'];
	$sexo        = $_POST['sexo'];

	// Comprobamos si el nombre de usuario o la cuenta de correo ya exist&iacute;an
    $checkuser = mysql_query("SELECT db_usuarios.username FROM db_usuarios WHERE username='$username'");
    $username_exist = mysql_num_rows($checkuser);
    if ($username_exist>0) 
    {
       	echo '{success:false, message:"Usuario existente", userName:"'.$usuario.'"}';
		header("location: ../paginas/NuevoOperador.php?error");
    }
	else 
	{
		$id = uniqid(rand()); 
		$sql = "insert into db_usuarios(id,username,password,nombre,primerapellido,segundoapellido,ci,direccionparticular,sexo) values('$id','$username','$clave','$nombre','$apellidoUno','$apellidoDos','$ci','$direccion','$sexo')";
		@mysql_query($sql);
		header("location: ../paginas/NuevoOperador.php?exito");				
	}

?>