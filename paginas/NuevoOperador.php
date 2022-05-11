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
	 
	<title>Secretaria IPI Fernando Aguado Y Rico</title>
	 
	</head>
	 
	    <body>
	 
	        <div id="wrapper">
	 
	<?php include('../includes/BannerTwo.php'); ?>
	
	<div align="center">
		<?php include('../includes/nav.php'); ?>
	</div>
	 
	<div id="contenthp">
	
	<p class="encabezado">Adicionar Nuevo Secretario Docente</p>	
	
		<div id="exito" >
			<b style="font-family: Adobe Caslon Pro, Hoefler Text, Georgia, Garamond, Times, serif;letter-spacing: 0.1em;line-height: 145%;font-size: 15px;"><img src="../images/info_16.png"/> Secretario Docente adicionado satisfactoriamente.</b>
		</div></br>
		<div id="error" >
		<b style="font-family: Adobe Caslon Pro, Hoefler Text, Georgia, Garamond, Times, serif;letter-spacing: 0.1em;line-height: 145%;font-size: 15px;"><img src="../images/warning_16.png"/> Ya existe un secretario docente con el nombre de usuario seleccionado, debe seleccionar otro.</b>
		</div></br>
	    <form id="ff" action="../php/NewOperator.php" method="post">
	    	<table cellpadding="5" align="center">
	    		<tr>
	    			<td><label>Nombre de usuario:</label></td>
	    			<td><input class="input" type="text" id="username" name="username" required></input></td>
	    		</tr>
	    		<tr>
	    			<td><label>Nombre(s):</label></td>
	    			<td><input class="input" type="text" id="nombre" name="nombre" required></input></td>
	    		</tr>
	    		<tr>
	    			<td><label>Primer Apellido:</label></td>
	    			<td><input class="input" type="text" id="apellidoUno" name="apellidoUno" required></input></td>
	    		</tr>
	    		<tr>
	    			<td><label>Segundo Apellido:</label></td>
	    			<td><input class="input" type="text" id="apellidoDos" name="apellidoDos" required></input></td>
	    		</tr>
				<tr>
                    	<td align="right"><label>Sexo:</label></td>
                    	<td align="left">
                        <select id="sexo" name="sexo" class="txtBox" required>
                          <option value="">-Seleccione-</option>
                          <option value="Femenino">Femenino</option>
                          <option value="Masculino">Masculino</option>                 
                        </select>
          		</tr>
				<tr>
	    			<td><label>Clave de acceso:</label></td>
	    			<td><input class="input" title="La clave de acceso debe contener al menos 6 caracteres, mayusculas,  minusculas y caracteres alfanumericos " type="password" id="clave" name="clave" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" onchange="  this.setCustomValidity(this.validity.patternMismatch ? 'Complete correctamente este campo' : '');
					if(this.checkValidity()) form.pwd2.pattern = this.value;
					"></input></td>
	    		</tr>
				<tr>
	    			<td><label>Reescriba su clave:</label></td>
	    			<td><input class="input" title="Escriba la misma clave de acceso del campo anterior" type="password" id="rpwd" name="rpwd" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" onchange="
					this.setCustomValidity(this.validity.patternMismatch ? 'Complete correctamente este campo' : '');
					"></input></td>
	    		</tr>
				<tr>
	    			<td><label>Carnet de Identidad:</label></td>
	    			<td><input class="input" title="El carnet de identidad tiene que contener 11 digitos numericos" type="text" id="ci" name="ci" pattern="[0-9]{11}" required></input></td>
	    		</tr>
				<tr>
	    			<td><label>Direccion particular:</label></td>
	    			<td><textarea class="textarea" id="direccion" name="direccion" required style="height:60px"></textarea></td>
	    		</tr>
				<tr>
					<td align="right">
						<input id="gobutton" name="submit" type="submit" value=" Salvar datos ">
					</td>
				</tr>
	    	</table>
	    </form>
	<script>
		function submitForm(){
			$('#ff').form({
   url:"../php/NewOperator.php",
   onSubmit: function(){
   // do some check
   // return false to prevent submit;
   },
   success:function(data){
   alert(data)
   }
   });
   // submit the form
   $('#ff').submit();
		}
		function clearForm(){
			$('#ff').form('clear');
		}
		
	
	</script>
	 
	</div> <!-- end #content -->
	 
	<?php //include('../includes/FooterDiv.php'); ?>	
	<?php include('../includes/footerFinal.php'); ?> 
	 
	        </div> <!-- End #wrapper -->
	 
	    </body>
	 
	</html>