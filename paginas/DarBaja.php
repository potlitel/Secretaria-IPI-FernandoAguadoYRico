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
	 
	<script type="text/javascript">
	$(document).ready(function()
	{
		$("#nombre").attr('disabled','disabled');
		$("#apellidos").attr('disabled','disabled');
		$("#sexo").attr('disabled','disabled');
		$("#nacimiento").attr('disabled','disabled');
		$("#ci").attr('disabled','disabled');
		$("#especialidadEstudio").attr('disabled','disabled');
		$("#cursoMatricula").attr('disabled','disabled');
	});
	
	$('#gobutton').click(function() 
	{
        $.blockUI({
								message: '<h4> <img src="process1321.gif" width="20" height="20"> Espere unos segundos por favor...</h4>',
								css: {  
									padding: 0,
									margin: 0,
									width: '70%',
									top: '50%',
									left: '15%',
									textAlign: 'center',
									color: '#fff',
									border: '0px solid #aaa',
									backgroundColor: 'transparent',
									cursor: 'wait'
								}
							}); 
					setTimeout(function() 
							{
								$.unblockUI;
							}, 2000);
    });
	
	</script> 
	 
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
		$sql = "select * from estudiantes Where id = '$id'";
		$result = @mysql_query($sql);
		$row = mysql_fetch_assoc($result);
	?>
	 
	<p class="encabezado">Dar baja al trabajador - alumno</>
	
	<div style="padding-left:145px"><img src="<?php echo $row["foto"]; ?>" width='140' height='120'></img></div>
	
	<form id="signupForm" action="../php/DarBaja.php" method="post">
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
                    	<td align="right"><label>Nombre(s) :</label></td>
                    	<td align="left">
                    	  <input type="text" class="input" id="nombre" width='140' name="nombre" value="<?php echo $row["username"]; ?>" class="txtBox">
                      </td>
                    	<td align="left"><span id="msg_username"></span>&nbsp;</td>
          			</tr>
          			<tr>
                    	<td align="right"><label>Apellidos :</label></td>
                    	<td align="left">
                    	  <input id="apellidos" class="input" name="apellidos" value="<?php echo $row["apellidos"]; ?>" class="txtBox">
                      </td>
                    	<td align="left"><span id="msg_apellidos"></span>&nbsp;</td>
          			</tr> 
					<tr>
                    	<td align="right"><label>Sexo :</label></td>
                    	<td align="left">
                    	  <input id="sexo" class="input" name="sexo" value="<?php echo $row["sexo"]; ?>" class="txtBox">
                      </td>
                    	<td align="left"><span id="msg_apellidos"></span>&nbsp;</td>
          			</tr>
					<tr>
                    	<td align="right"><label>Fecha de nacimiento :</label></td>
                    	<td align="left">
                    	  <input id="nacimiento" class="input" name="nacimiento" value="<?php echo $row["nacimiento"]; ?>" class="txtBox">
                      </td>
                    	<td align="left"><span id="msg_apellidos"></span>&nbsp;</td>
          			</tr>
					<tr>
                    	<td align="right"><label>CI :</label></td>
                    	<td align="left">
                    	  <input id="ci" name="ci" class="input" value="<?php echo $row["ci"]; ?>" class="txtBox">
                      </td>
                    	<td align="left"><span id="msg_apellidos"></span>&nbsp;</td>
          			</tr> 
					<tr>
                    	<td align="right"><label>Estudiaba la asignatura :</label></td>
                    	<td align="left">
                    	  <input id="especialidadEstudio" class="input" name="especialidadEstudio" value="<?php echo $row["especialidadEstudio"]; ?>" class="txtBox">
                      </td>
                    	<td align="left"><span id="msg_ci"></span>&nbsp;</td>
          			</tr>
					<tr>
                    	<td align="right"><label>En el curso :</label></td>
                    	<td align="left">
                    	  <input id="cursoMatricula" class="input" name="cursoMatricula" value="<?php echo $row["cursoMatricula"]; ?>" class="txtBox">
                      </td>
                    	<td align="left"><span id="msg_ci"></span>&nbsp;</td>
          			</tr>
					<tr>
                    	<td align="right"><label>Motivos por el cual causa baja del centro :</label></td>
                    	<td align="left">
                        <select id="motivos" class="input" name="motivos" class="txtBox" required>
                          <option value="">-Seleccione-</option>
						  <option value="Fallecimiento">Fallecimiento</option>
                          <option value="Culmino sus estudios">Culmino sus estudios</option>
                          <option value="Expulsion del centro de estudios">Expulsion del centro de estudios</option>                 
						  <option value="Expulsion del centro de estudio">Traslado a otro centro de estudios</option>
                        </select>
                      </td>
                    	<td align="left"><span id="msg_genero"></span>&nbsp;</td>
          			</tr>
					<tr>
                    	<td align="right"><label>Fecha de la baja :</label></td>
                    	<td align="left">
                    	  <input type=date class="input" id="datefecha" name="datefecha" value="" class="txtBox" required>
                      </td>
                    	<td align="left"><span id="msg_nacimiento"></span>&nbsp;</td>
          			</tr>
					<tr>
						<td align="right">
							<input id="gobutton" name="submit" type="submit" value=" Dar baja ">
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