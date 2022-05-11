<?php
	define('FPDF_FONTPATH','../fpdf17/font/');
	require('../fpdf17/fpdf.php');
	// Conexion a la Bd
	require '../ConexionReportes.php';
	mysql_select_db($db_name,$connection) or die("Error de conexion a la base de datos");
	
	$sql = "";
	$headertext = "";
	$curso = $_GET["curso"];
	$filename = "";
	switch($curso)
	{
		////////////////////// BIBLIOTECOLOGIA //////////////////////////
		case "B": 
				$sql = 'select * from estudiantes Where especialidadEstudio = "Bibliotecologia" and causoBaja = "No"'; 
				$headertext = 'Listado de estudiantes correspondientes a la asignatura Bibliotecología ';
				$filename = "Reporte Estudiantes correspondientes al Curso Bibliotecologia.pdf";	
				break;
		case "B1": 
				$sql = 'select * from estudiantes Where especialidadEstudio = "Bibliotecologia" and cursoMatricula = "1er Curso" and causoBaja = "No"'; 
				$headertext = 'Listado de estudiantes correspondientes al Primer Curso de Bibliotecología ';
				$filename = "Reporte Estudiantes 1er Curso Bibliotecologia.pdf";
				break;
		case "B2": 
				$sql = 'select * from estudiantes Where especialidadEstudio = "Bibliotecologia" and cursoMatricula = "2do Curso" and causoBaja = "No"'; 
				$headertext = 'Listado de estudiantes correspondientes al Segundo Curso de Bibliotecología ';
				$filename = "Reporte Estudiantes 2do Curso Bibliotecologia.pdf";
				break;
		case "B3": 
				$sql = 'select * from estudiantes Where especialidadEstudio = "Bibliotecologia" and cursoMatricula = "3er Curso" and causoBaja = "No"'; 
				$headertext = 'Listado de estudiantes correspondientes al Tercer Curso de Bibliotecología ';
				$filename = "Reporte Estudiantes 3er Curso Bibliotecologia.pdf";
				break;
		case "B4": 
				$sql = 'select * from estudiantes Where especialidadEstudio = "Bibliotecologia" and cursoMatricula = "4to Curso" and causoBaja = "No"'; 
				$headertext = 'Listado de estudiantes correspondientes al Cuarto Curso de Bibliotecología ';
				$filename = "Reporte Estudiantes 4to Curso Bibliotecologia.pdf";
				break;
		////////////////////// INFORMATICA //////////////////////////
		case "I": 
				$sql = 'select * from estudiantes Where especialidadEstudio = "Informatica" and causoBaja = "No"'; 
				$headertext = 'Listado de estudiantes correspondientes a la asignatura Informática ';
				$filename = "Reporte Estudiantes correspondientes al Curso Informatica.pdf";
				break;
		case "I1": 
				$sql = 'select * from estudiantes Where especialidadEstudio = "Informatica" and cursoMatricula = "1er Curso" and causoBaja = "No"'; 
				$headertext = 'Listado de estudiantes correspondientes al Primer Curso de Informática ';
				$filename = "Reporte Estudiantes 1er Curso Informatica.pdf";
				break;
		case "I2": 
				$sql = 'select * from estudiantes Where especialidadEstudio = "Informatica" and cursoMatricula = "2do Curso" and causoBaja = "No"'; 
				$headertext = 'Listado de estudiantes correspondientes al Segundo Curso de Informática ';
				$filename = "Reporte Estudiantes 2do Curso Informatica.pdf";
				break;
		case "I3": 
				$sql = 'select * from estudiantes Where especialidadEstudio = "Informatica" and cursoMatricula = "3er Curso" and causoBaja = "No"'; 
				$headertext = 'Listado de estudiantes correspondientes al Tercer Curso de Informática ';
				$filename = "Reporte Estudiantes 3er Curso Informatica.pdf";
				break;
		case "I4": 
				$sql = 'select * from estudiantes Where especialidadEstudio = "Informatica" and cursoMatricula = "4to Curso" and causoBaja = "No"'; 
				$headertext = 'Listado de estudiantes correspondientes al Cuarto Curso de Informática ';
				$filename = "Reporte Estudiantes 4to Curso Informatica.pdf";
				break;		
		////////////////////// GESTION DOCUMENTAL //////////////////////////
		case "GD": 
				$sql = 'select * from estudiantes Where especialidadEstudio = "Gestion Documental" and causoBaja = "No"'; 
				$headertext = 'Listado de estudiantes correspondientes a la asignatura Gestion Documental ';
				$filename = "Reporte Estudiantes correspondientes al Curso Gestion Documental.pdf";
				break;
		case "GD1": 
				$sql = 'select * from estudiantes Where especialidadEstudio = "Gestion Documental" and cursoMatricula = "1er Curso" and causoBaja = "No"'; 
				$headertext = 'Listado de estudiantes correspondientes al Primer Curso de Gestion Documental ';
				$filename = "Reporte Estudiantes 1er Curso Gestion Documental.pdf";
				break;
		case "GD2": 
				$sql = 'select * from estudiantes Where especialidadEstudio = "Gestion Documental" and cursoMatricula = "2do Curso" and causoBaja = "No"'; 
				$headertext = 'Listado de estudiantes correspondientes al Segundo Curso de Gestion Documental ';
				$filename = "Reporte Estudiantes 2do Curso Gestion Documental.pdf";
				break;
		case "GD3": 
				$sql = 'select * from estudiantes Where especialidadEstudio = "Gestion Documental" and cursoMatricula = "3er Curso" and causoBaja = "No"'; 
				$headertext = 'Listado de estudiantes correspondientes al Tercer Curso de Gestion Documental ';
				$filename = "Reporte Estudiantes 3er Curso Gestion Documental.pdf";
				break;
		case "GD4": 
				$sql = 'select * from estudiantes Where especialidadEstudio = "Gestion Documental" and cursoMatricula = "4to Curso" and causoBaja = "No"'; 
				$headertext = 'Listado de estudiantes correspondientes al Cuarto Curso de Gestion Documental ';
				$filename = "Reporte Estudiantes 4to Curso Gestion Documental.pdf";
				break;			
		////////////////////// SEDE UNIVERSITARIA //////////////////////////
		case "SU": 
				$sql = 'select * from estudiantes Where especialidadEstudio = "Sede Universitaria" and causoBaja = "No"'; 
				$headertext = 'Listado de estudiantes correspondientes a la asignatura Sede Universitaria ';
				$filename = "Reporte Estudiantes correspondientes al Curso Sede Universitaria.pdf";
				break;
		case "SU1": 
				$sql = 'select * from estudiantes Where especialidadEstudio = "Sede Universitaria" and cursoMatricula = "1er Curso" and causoBaja = "No"'; 
				$headertext = 'Listado de estudiantes correspondientes al Primer Curso de Sede Universitaria ';
				$filename = "Reporte Estudiantes 1er Curso Sede Universitaria.pdf";
				break;
		case "SU2": 
				$sql = 'select * from estudiantes Where especialidadEstudio = "Sede Universitaria" and cursoMatricula = "2do Curso" and causoBaja = "No"'; 
				$headertext = 'Listado de estudiantes correspondientes al Segundo Curso de Sede Universitaria ';
				$filename = "Reporte Estudiantes 2do Curso Sede Universitaria.pdf";
				break;
		case "SU3": 
				$sql = 'select * from estudiantes Where especialidadEstudio = "Sede Universitaria" and cursoMatricula = "3er Curso" and causoBaja = "No"'; 
				$headertext = 'Listado de estudiantes correspondientes al Tercer Curso de Sede Universitaria ';
				$filename = "Reporte Estudiantes 3er Curso Sede Universitaria.pdf";
				break;
		case "SU4": 
				$sql = 'select * from estudiantes Where especialidadEstudio = "Sede Universitaria" and cursoMatricula = "4to Curso" and causoBaja = "No"'; 
				$headertext = 'Listado de estudiantes correspondientes al Cuarto Curso de Sede Universitaria ';
				$filename = "Reporte Estudiantes 4to Curso Sede Universitaria.pdf";
				break;			
		case "SU5": 
				$sql = 'select * from estudiantes Where especialidadEstudio = "Sede Universitaria" and cursoMatricula = "5to Curso" and causoBaja = "No"'; 
				$headertext = 'Listado de estudiantes correspondientes al Quinto Curso de Sede Universitaria ';
				$filename = "Reporte Estudiantes 5to Curso Sede Universitaria.pdf";
				break;					
	}
	
	class PDF extends FPDF
	{
		//Page header
		function Header()
		{
			//Logo
			//$this->Image('AcinoxLogotipo.png',10,8,33);
			$this->Image('../images/divider.png', $this->GetX() -5, $this->GetY() + 15, 200, 8);
			//Arial bold 15
			$this->SetFont('Arial','B',16);
			//Move to the right
			$this->Cell(95);
			//Title
			$this->Cell(5,1,'Instituto Politécnico de Informática',0,0,'C');
			$this->SetFont('Arial','B',12);
			$this->Cell(20,18,'Fernando Aguado Y Rico',0,0,'R');
			//Line break
			$this->Ln(20);
		}

		//Page footer
		function Footer()
		{
			//Position at 1.5 cm from bottom
			$this->SetY(-15);
			//Arial italic 8
			$this->SetFont('Arial','',8);
			//Page number
			$this->Cell(0,10,'Página '.$this->PageNo().' de {nb}',0,0,'C');
		}
	}
    $result = mysql_query($sql,$connection) or die('La consulta fall&oacute;: '.mysql_error());	
    
	$pdf=new PDF();
	$pdf->Open();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Times','',12);

	$pdf->Cell(0,20,$headertext,0,1,'C');
	
	$space=" ";
	$image_height = 30;
	$image_width = 30;
    while ($row = mysql_fetch_assoc($result)) 
    {
		//Blank line
    	$pdf->Cell(10,10,'',0,1,'L');
		//Blank line
		$pdf->Image($row["foto"], $pdf->GetX() + 80, $pdf->GetY() + 10, $image_height, $image_width);
    	$pdf->Cell(10,10,'Nombre: '.$row["username"] .$space .$row["apellidos"],0,1,'L');
		$pdf->Cell(10,10,'Sexo: '.$row["sexo"],0,1,'L');
    	$pdf->Cell(10,10,'Carne de Identidad: '.$row["ci"],0,1,'L');
    	$pdf->Cell(10,10,'Fecha de Nacimiento: '.$row["nacimiento"],0,1,'L');
		$pdf->Cell(10,10,'Provincia de nacimiento: '.$row["provincia"],0,1,'L');
		$pdf->Cell(10,10,'Centro de Procedencia: '.$row["procedencia"],0,1,'L');
    	
		$pdf->Image('../images/characters-header-line.png', $pdf->GetX(), $pdf->GetY(), 200, 8);
		//Blank line
    	$pdf->Cell(10,10,'',0,1,'L');
		//Blank line
    }
	
    mysql_free_result($result);
    $pdf->Output($filename,'I');

?>