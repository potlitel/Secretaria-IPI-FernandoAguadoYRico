<?php
define('FPDF_FONTPATH','../font/');
require('../fpdf.php');

$pdf=new FPDF();
$pdf->Open();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'Hello World Alaín Jorge Acuña!');
$pdf->Output();
?>
