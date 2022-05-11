<?php
			include '../cxn.php';
			include '../session.php';
			$user = $_SESSION['login_user']; 
			echo $user;
			$oldPassword = $_POST["claveactual"];
			$newPassword = $_POST["clave"];

			$sql= "SELECT db_usuarios.password FROM db_usuarios WHERE username='$user' and password = '$oldPassword'";
			$query = mysql_query($sql);
			$row = mysql_fetch_assoc($query);
            
			$oldpassworddb = $row ['password'];
            if ($oldPassword!=$oldpassworddb) 
            {
            		header("location: ../paginas/CambiarClaveAcceso.php?error");
            }
			else 
			{
					$SqlUpdate ="UPDATE `db_usuarios` SET `password`='$newPassword' WHERE username='$user';";
					$rs = mysql_query($SqlUpdate);
					header("location: ../paginas/CambiarClaveAcceso.php?exito");
			}
?>