<?php
	define('FPDF_FONTPATH','../fpdf17/font/');
	require('../fpdf17/fpdf.php');
	// Conexion a la Bd
	require '../ConexionReportes.php';
	mysql_select_db($db_name,$connection) or die("Error de conexion a la base de datos");
	 
	$sql = 'select * from estudiantes Where causoBaja = "No"'; 
	$headertext = 'Listado de estudiantes registrados en el IPI Fernando Aguado Y Rico';
	$filename = "Reporte Estudiantes registrados en el IPI Fernando Aguado Y Rico.pdf";	
				
	
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
    	$pdf->Cell(20,10,'',0,1,'L');
		//Blank line
		$pdf->Image($row["foto"], $pdf->GetX() + 80, $pdf->GetY() + 10, $image_height, $image_width);
    	$pdf->Cell(10,10,'Nombre: '.$row["username"] .$space .$row["apellidos"],0,1,'L');
		$pdf->Cell(10,10,'Sexo: '.$row["sexo"],0,1,'L');
    	$pdf->Cell(10,10,'Carne de Identidad: '.$row["ci"],0,1,'L');
    	$pdf->Cell(10,10,'Fecha de Nacimiento: '.$row["nacimiento"],0,1,'L');
		$pdf->Cell(10,10,'Provincia de nacimiento: '.$row["provincia"],0,1,'L');
		$pdf->Cell(10,10,'Centro de Procedencia: '.$row["procedencia"],0,1,'L');
		$pdf->Cell(10,10,'Especialidad de Estudio: '.$row["especialidadEstudio"],0,1,'L');
		$pdf->Cell(10,10,'Curso Matriculado: '.$row["cursoMatricula"],0,1,'L');
    	//Blank line
    	$pdf->Cell(20,10,'',0,1,'L');
		//Blank line
		$pdf->Image('../images/characters-header-line.png', $pdf->GetX(), $pdf->GetY(), 200, 8);
		//Blank line
    	$pdf->Cell(20,10,'',0,1,'L');
		//Blank line
    }
	
    mysql_free_result($result);
    $pdf->Output($filename,'I');

?>