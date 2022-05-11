<?php
include('../session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	 
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	 
	<head>
	 
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	 
	<meta name="description" content="" />
	 
<meta name="keywords" content="" />
	 
	<meta name="author" content="" />
	 
	<link rel="stylesheet" type="text/css" href="../css/home.css" media="screen" />
	<link rel="stylesheet" href="../css/footer.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../jquery-easyui-1.4/themes/gray/easyui.css">
	<link rel="stylesheet" type="text/css" href="../jquery-easyui-1.4/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="../SmartWizard-master/styles/smart_wizard.css">
	
	<script type="text/javascript" src="../jquery-easyui-1.4/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="../jquery-easyui-1.4/jquery.min.js"></script>
	
	<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="../css/styleNav.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->
	 
	<script>

		$(document).ready(function()
		{
				$("#exito").hide();
				$("#error").hide();
				$("#username").attr('disabled','disabled');
		});
		
	</script>
	
	<?php
		if(isset($_GET['exito']))
		{	
			?>
			   <script type="text/javascript">
			   $(document).ready(function()
				{
					$("#exito").show();
				});
			   </script>
			<?php 
		}
		
		if(isset($_GET['error']))
		{	
			?>
			   <script type="text/javascript">
			   $(document).ready(function()
				{
					$("#error").show();
				});
			   </script>
			<?php 
		}
	?>
	 
	<title>Secretaria IPI Fernando Aguado Y Rico</title>
	 
	</head>
	 
	    <body>
	 
	        <div id="wrapper">
	 
	<?php include('../includes/BannerTwo.php'); ?>
	
	<div align="center">
		<?php include('../includes/nav.php'); ?>
	</div>
	 
	<div id="contenthp">
	
	<?php 
		$id = $_GET["id"];		
		$sql = "select * from db_usuarios Where id = '$id'";
		$result = @mysql_query($sql);
		$row = mysql_fetch_assoc($result);
	?>
	 
	<p class="encabezado">Editar datos de un Secretario Docente</>
	
	<div id="exito" >
		<b style="font-family: Adobe Caslon Pro, Hoefler Text, Georgia, Garamond, Times, serif;letter-spacing: 0.1em;line-height: 145%;font-size: 15px;"><img src="../images/info_16.png"/> Secretario Docente modificado satisfactoriamente.</b>
	</div></br>
	<div id="error" >
		<b style="font-family: Adobe Caslon Pro, Hoefler Text, Georgia, Garamond, Times, serif;letter-spacing: 0.1em;line-height: 145%;font-size: 15px;"><img src="../images/warning_16.png"/> Nombre de usuario existente, debes seleccionar otro nombre de usuario.</b>
	</div></br>
	
	<form id="signupForm" action="../php/ModificarOperador.php" method="post">
		<table cellspacing="3" cellpadding="3" align="center">
          			<tr>
                    	<td align="center" colspan="3">&nbsp;</td>
          			</tr>        
          			<tr>
                    	  <input type="text" id="id" width='140' hidden=true name="id" value="<?php echo $row["id"]; ?>" class="txtBox">
                      </td>
                    	<td align="left"><span id="msg_username"></span>&nbsp;</td>
          			</tr>
					<tr>
                    	<td align="right"><label>Nombre de usuario :</label></td>
                    	<td align="left">
                    	  <input type="text" class="input" id="username" width='140' name="username" value="<?php echo $row["username"]; ?>" class="txtBox" required>
                      </td>
                    	<td align="left"><span id="msg_username"></span>&nbsp;</td>
          			</tr>
					<tr>
                    	<td align="right"><label>Nombre(s) :</label></td>
                    	<td align="left">
                    	  <input type="text" class="input" id="nombre" width='140' name="nombre" value="<?php echo $row["nombre"]; ?>" class="txtBox" required>
                      </td>
                    	<td align="left"><span id="msg_username"></span>&nbsp;</td>
          			</tr>
          			<tr>
                    	<td align="right"><label>Primer apellido :</label></td>
                    	<td align="left">
                    	  <input id="primerapellido" class="input" name="primerapellido" value="<?php echo $row["primerapellido"]; ?>" class="txtBox" required>
                      </td>
                    	<td align="left"><span id="msg_apellidos"></span>&nbsp;</td>
          			</tr> 
					<tr>
                    	<td align="right"><label>Segundo apellido :</label></td>
                    	<td align="left">
                    	  <input id="segundoapellido" class="input" name="segundoapellido" value="<?php echo $row["segundoapellido"]; ?>" class="txtBox" required>
                      </td>
                    	<td align="left"><span id="msg_apellidos"></span>&nbsp;</td>
          			</tr> 
					<tr>
                    	<td align="right"><label>Sexo :</label></td>
                    	<td align="left">
                        <select id="sexo" name="sexo" class="select" required>
                          <option value="">-Seleccione-</option>
						  <option value="Femenino" <?php if ($row['sexo'] == "Femenino"): ?> selected="selected"<?php endif; ?>>Femenino</option>
                          <option value="Masculino" <?php if ($row['sexo'] == "Masculino"): ?> selected="selected"<?php endif; ?>>Masculino</option>                 
                        </select>
                      </td>
                    	<td align="left"><span id="msg_genero"></span>&nbsp;</td>
          			</tr>
					<tr>
                    	<td align="right"><label>CI :</label></td>
                    	<td align="left">
                    	  <input id="ci" name="ci" class="input" value="<?php echo $row["ci"]; ?>" pattern="[0-9]{11}" class="txtBox" required>
                      </td>
                    	<td align="left"><span id="msg_apellidos"></span>&nbsp;</td>
          			</tr>
					<tr>
                    	<td align="right"><label>Direccion particular :</label></td>
                    	<td align="left">
                    	  <textarea id="dp" name="dp" value="" class="textarea" required>
							<?php echo $row["direccionparticular"]; ?>
						  </textarea>
                      </td>
                    	<td align="left"><span id="msg_apellidos"></span>&nbsp;</td>
          			</tr>
					<tr>
						<td align="right">
							<input id="gobutton" name="submit" type="submit" value=" Salvar cambios ">
						</td>
					</tr>
		</table>
		

	</form>

	 
	</div> <!-- end #content -->
	 
	<?php //include('../includes/FooterDiv.php'); ?>	
	<?php include('../includes/footerFinal.php'); ?> 
	 
	        </div> <!-- End #wrapper -->
	 
	    </body>
	 
	</html>