<?php
	define('FPDF_FONTPATH','../../fpdf17/font/');
	require('../../fpdf17/fpdf.php');
	// Conexion a la Bd
	require '../../ConexionReportes.php';
	mysql_select_db($db_name,$connection) or die("Error de conexion a la base de datos");
	
	$sql = 'select * from estudiantes Where especialidadEstudio = "Bibliotecologia" and cursoMatricula = "1er Curso" and causoBaja = "No"';
	
	class PDF extends FPDF
	{
		//Page header
		function Header()
		{
			//Logo
			//$this->Image('AcinoxLogotipo.png',10,8,33);
			//$this->Image('../fpdf141/tutorial/logo_pb.png',10,8,33);
			//Arial bold 15
			$this->SetFont('Arial','B',16);
			//Move to the right
			$this->Cell(95);
			//Title
			$this->Cell(5,1,'Instituto Politécnico de Informática',0,0,'C');
			$this->SetFont('Arial','B',12);
			$this->Cell(20,18,'Fernando Aguado Y Rico',0,0,'R');
		    //$this->Cell(30,10,'Descripción de la Reclamación con # de Registro '.$nr,1,0,'C');
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
	
	//Datos del nomenclador cargos
	$pdf->Cell(0,10,'Listado de estudiantes correspondientes al Primer Curso de Bibliotecología ',0,1,'C');

	$space=" ";
	$image_height = 40;
	$image_width = 40;
    while ($row = mysql_fetch_assoc($result)) 
    {
		//Blank line
    	$pdf->Cell(20,10,'',0,1,'L');
		//Blank line
		//$pdf->Image($row["foto"], $pdf->GetX(), $pdf->GetY() + 5, $image_height, $image_width);
    	$pdf->Cell(20,10,'Nombre: '.$row["username"] .$space .$row["apellidos"],0,1,'L');
		$pdf->Cell(20,10,'Sexo: '.$row["sexo"],0,1,'L');
    	$pdf->Cell(20,10,'Carne de Identidad: '.$row["ci"],0,1,'L');
    	$pdf->Cell(20,10,'Fecha de Nacimiento: '.$row["nacimiento"],0,1,'L');
		$pdf->Cell(20,10,'Provincia de nacimiento: '.$row["provincia"],0,1,'L');
		$pdf->Cell(20,10,'Centro de Procedencia: '.$row["procedencia"],0,1,'L');
    	//Blank line
    	$pdf->Cell(20,10,'',0,1,'L');
		//Blank line
    }
    
    mysql_free_result($result);
    $pdf->Output();

?>