<?php
include('../session.php');
include '../cxn.php';
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
	<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="../css/styleNav.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->
	 
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
		/*$curso = $_GET["curso"];
		
		switch ($curso) 
		{
					//BIBLIOTECOLOGIA CASE
					case "B1":
						$curso = "Bibliotecologia 1";
						break;
					case "B2":
						$curso = "Bibliotecologia 2";
						break;
					case "B3":
						$curso = "Bibliotecologia 3";
						break;
					case "B4":
						$curso = "Bibliotecologia 4";
						break;
						//INFORMATICA CASE
					case "I1":
						$curso = "Informatica 1";
						break;
					case "I2":
						$curso = "Informatica 2";
						break;
					case "I3":
						$curso = "Informatica 3";
						break;
					case "I4":
						$curso = "Informatica 4";
						break;
						//SEDE UNIVERSITARIA CASE
					case "SU1":
						$curso = "Sede Universitaria 1";
						break;
					case "SU2":
						$curso = "Sede Universitaria 2";
						break;
					case "SU3":
						$curso = "Sede Universitaria 3";
						break;
					case "SU4":
						$curso = "Sede Universitaria 4";
						break;
					case "SU5":
						$curso = "Sede Universitaria 5";
						break;
						//GESTION DOCUMENTAL CASE
					case "GD1":
						$curso = "Gestion Documental 1";
						break;
					case "GD2":
						$curso = "Gestion Documental 2";
						break;
					case "GD3":
						$curso = "Gestion Documental 3";
						break;
					case "GD4":
						$curso = "Gestion Documental 4";
						break;
		}*/
		
		$sql = "select * from estudiantes Where id = '$id'";
		$result = @mysql_query($sql);
		$row = mysql_fetch_assoc($result);
	?>

	<style type="text/css">
	.style2 
	{
	color: #000000;
	font-weight: bold;
	}
	</style>
	
	<p class="encabezado">PLANTILLA DEL ESTUDIANTE TRABAJADOR</p>
	
	<div style="float:right;padding-bottom:85px;margin-bottom:85px">
	<a href="EditarEstudiante.php?id=<?php echo $row["id"]; ?> " title="This is the tooltip message." class="easyui-tooltip"><img src="../images/pencil_16.png" ></img></a>
	</div>
	
	<div align="center"  style="padding-left:16px">
		<table width="730" height="180" border="1" bordercolor="#000000">
		  <tr>
			<td height="52" colspan="2" align="left" valign="top">
				<pre class="style2">APELLIDOS</pre>
				<?php echo $row["apellidos"]; ?>
			</td>
			<td colspan="3" align="left" valign="top">
				<pre><strong>NOMBRE(S)</strong></pre>
				<?php echo $row["username"]; ?>
			</td>
		  </tr>
		  <tr>
			<td width="165" height="43" align="left" valign="top">
				<pre><strong>SEXO</strong></pre>
				<?php echo $row["sexo"]; ?>
			</td>
			<td width="168" align="left" valign="top">
				<pre><strong>FECHA DE NACIMIENTO</strong></pre>
				<?php echo $row["nacimiento"]; ?>
			</td>
			<td colspan="2" align="left" valign="top">
				<pre><strong>CARNE DE IDENTIDAD NUMERO</strong></pre>
				<?php echo $row["ci"]; ?>
			</td>
			<td width="110" rowspan="3">
				<img src="<?php echo $row["foto"]; ?>" width='140' height='120'></img> 
			</td>
		  </tr>
		  <tr>
			<td colspan="2" rowspan="2" align="left" valign="top">
			<pre><strong>NIVEL DE ESCOLARIDAD AL INGRESAR Y CENTRO
		 DE PROCEDENCIA</strong></pre>
			<?php echo $row["escolaridad"]; echo " - "; echo $row["procedencia"]; ?>
			</td>
			<td colspan="2" align="left" valign="top">
				<pre><strong>No. COMPROBANTE SMG</strong></pre>
				<?php echo $row["comprobante"]; ?>
			</td>
		  </tr>
		  <tr>
			<td width="177" height="31" align="left" valign="top">
				<pre><strong>ESTADO CIVIL</strong></pre>
				<?php echo $row["ec"]; ?>
			</td>
			<td width="76" align="left" valign="top">
				<pre><strong>No. HIJOS</strong></pre>
				<?php echo $row["hijos"]; ?>
			</td>
		  </tr>
		</table>	
	</div>

	<div align="center">
		<table width="730" border="1" bordercolor="#000000">
		  <tr>
			<th colspan="5">
				<pre>DOMICILIO</pre>
			</th>
		  </tr>
		  <tr>
			<td width="248">
				<pre><strong>CALLE O FINCA</strong></pre>
				<?php echo $row["calle"]; ?>
			</td>
			<td width="28">
				<pre><strong>No.</strong></pre>
				<?php echo $row["numero"]; ?>
			</td>
			<td width="236">
				<pre><strong>ENTRECALLES</strong></pre>
				<?php echo $row["entrecalles"]; ?>
			</td>
			<td width="37">
				<pre><strong>PISO</strong></pre>
				<?php echo $row["piso"]; ?>
			</td>
			<td width="147">
				<pre><strong>APTO</strong></pre>
				<?php echo $row["apto"]; ?>
			</td>
		  </tr>
		  <tr>
			<td colspan="2">
				<pre><strong>BARRIO, REPARTO O LOCALIDAD</strong></pre>
				<?php echo $row["barrio"]; ?>
			</td>
			<td colspan="2">
				<pre><strong>MUNICIPIO</strong></pre>
				<?php echo $row["municipioResidencia"]; ?>
			</td>
			<td>
				<pre><strong>TELEFONO</strong></pre>
				<?php echo $row["telefono"]; ?>
			</td>
		  </tr>
		</table>
	</div>
	
	<div align="center">
		<table width="730" border="1" bordercolor="#000000">
		  <tr>
			<th colspan="4"><pre>CENTRO DE ESTUDIOS</pre></th>
		  </tr>
		  <tr>
			<td width="220">
				<pre><strong>ESPECIALIDAD DE ESTUDIO</strong></pre>
				<?php echo $row["especialidadEstudio"]; ?>
			</td>
			<td width="184">
				<pre><strong>CURSO MATRICULADO</strong></pre>
				<?php echo $row["cursoMatricula"]; ?>
			</td>
			<td width="207">
				<pre><strong>NOMBRE DEL CENTRO DE ESTUDIOS</strong></pre>
				<?php echo $row["nombreCentroEstudio"]; ?>
			</td>
			<td width="92">
				<pre><strong>REGIONAL</strong></pre>
				<?php echo $row["regional"]; ?>
			</td>
		  </tr>
		  <tr>
			<td>
				<pre><strong>AÑO MATRICULADO</strong></pre>
				<?php echo $row["annoMatriculado"]; ?>
			</td>
			<td>
				<pre><strong>EXPEDIENTE NUMERO</strong></pre>
				<?php echo $row["expedienteNumero"]; ?>
			</td>
			<td colspan="2">
				<pre><strong>DATOS COMPLEMENTARIOS</strong></pre>
				<div align="justify"><?php echo $row["complementario"]; ?></div>
			</td>
		  </tr>
		</table>
	</div>
	
	<div align="center">
		<table width="730" border="1" bordercolor="#000000">
		  <tr>
			<th colspan="4">
				<pre><strong>CENTRO DE TRABAJO</strong></pre>
			</th>
		  </tr>
		  <tr>
			<td colspan="2">
				<pre><strong>NOMBRE</strong></pre>
				<div align="justify"><?php echo $row["nombrecentro"]; ?></div>
			</td>
			<td colspan="2">
				<pre><strong>DIRECCION</strong></pre>
				<div align="justify"><?php echo $row["direccioncentro"]; ?></div>
			</td>
		  </tr>
		  <tr>
			<td width="170">
				<pre><strong>ORGANISMO</strong></pre>
				<div align="justify"><?php echo $row["organismocentro"]; ?></div>
			</td>
			<td width="178">
				<pre><strong>CARGO QUE OCUPA</strong></pre>
				<div align="justify"><?php echo $row["cargo"]; ?></div>
			</td>
			<td width="204">
				<pre><strong>HORARIO DE TRABAJO</strong></pre>
			</td>
			<td width="151">
				<pre><strong>TELEFONO</strong></pre>
				<div align="justify"><?php echo $row["telefonocentro"]; ?></div>
			</td>
		  </tr>
		</table>
	</div>
	
	</div> <!-- end #content -->
	 
	<?php //include('../includes/FooterDiv.php'); ?>	
	<?php include('../includes/footerFinal.php'); ?> 