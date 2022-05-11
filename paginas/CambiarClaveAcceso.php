<?php
include('../session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	 
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	 
	<head>
	 
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../jquery-easyui-1.4/themes/gray/easyui.css">
	<link rel="stylesheet" type="text/css" href="../jquery-easyui-1.4/themes/icon.css">
	
	<script src="../jquery-easyui-1.4/locale/easyui-lang-es.js"></script>
	<script type="text/javascript" src="../SmartWizard-master/js/jquery-1.4.2.min.js"></script>
	
	<meta name="description" content="" />
	 
	<meta name="keywords" content="" />
	 
	<meta name="author" content="" />
	 
	<link rel="stylesheet" type="text/css" href="../css/home.css" media="screen" />
	<link rel="stylesheet" href="../css/footer.css" type="text/css" />
	<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="../css/styleNav.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->
	 
	 <script>

		$(document).ready(function()
		{
				$("#info").hide();
		});
		
	</script>
	 
	<title>Secretaria IPI Fernando Aguado Y Rico</title>
	 <script>

		$(document).ready(function()
		{
				$("#exito").hide();
				$("#error").hide();
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
	</head>
	 
	    <body>
	 
	        <div id="wrapper">
	 
	<?php include('../includes/BannerTwo.php'); ?>
	
	<div align="center">
		<?php include('../includes/nav.php'); ?>
	</div>
	 
	<div id="contenthp">
	
	<p class="encabezado">Cambiar mi clave de acceso</p>	
		<div id="exito" >
			<b style="font-family: Adobe Caslon Pro, Hoefler Text, Georgia, Garamond, Times, serif;letter-spacing: 0.1em;line-height: 145%;font-size: 15px;"><img src="../images/info_16.png"/> Su clave de acceso fue modificada satisfactoriamente.</b>
		</div></br>
		<div id="error" >
		<b style="font-family: Adobe Caslon Pro, Hoefler Text, Georgia, Garamond, Times, serif;letter-spacing: 0.1em;line-height: 145%;font-size: 15px;"><img src="../images/warning_16.png"/> La clave de acceso suministrada no coincide, por favor intentelo nuevamente.</b>
		</div></br>
	    <form id="ff" action="../php/CambiarClave.php" method="post">
	    	<table cellpadding="5" align="center">
				<tr>
	    			<td><label>Su actual Clave de acceso:</label></td>
	    			<td><input class="input" title="La clave de acceso debe contener al menos 6 caracteres, mayusculas,  minusculas y caracteres alfanumericos " type="password" id="claveactual" name="claveactual" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" onchange="  this.setCustomValidity(this.validity.patternMismatch ? 'Complete correctamente este campo' : '');
					if(this.checkValidity()) form.pwd2.pattern = this.value;
					"></input></td>
	    		</tr>
				<tr>
	    			<td><label>Su Nueva Clave de acceso:</label></td>
	    			<td><input class="input" title="La clave de acceso debe contener al menos 6 caracteres, mayusculas,  minusculas y caracteres alfanumericos " type="password" id="clave" name="clave" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" onchange="  this.setCustomValidity(this.validity.patternMismatch ? 'Complete correctamente este campo' : '');
					if(this.checkValidity()) form.pwd2.pattern = this.value;
					"></input></td>
	    		</tr>
				<tr>
	    			<td><label>Reescriba su clave de acceso:</label></td>
	    			<td><input class="input" title="Escriba la misma clave de acceso del campo anterior" type="password" id="rpwd" name="rpwd" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" onchange="
					this.setCustomValidity(this.validity.patternMismatch ? 'Complete correctamente este campo' : '');
					"></input></td>
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