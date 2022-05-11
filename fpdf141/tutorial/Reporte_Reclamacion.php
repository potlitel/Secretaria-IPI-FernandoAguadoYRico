<?php
define('FPDF_FONTPATH','../font/');
require('../fpdf.php');
include('../../../../0.1ConeccionBD/Coneccion.php');


class PDF extends FPDF
{
//Page header
function Header()
{
	//Logo
	$this->Image('eo.png',10,8,33);
	//Arial bold 15
	$this->SetFont('Arial','B',16);
	//Move to the right
	$this->Cell(95);
	//Title
	$this->Cell(15,1,'Ministerio de las Fuerzas Armadas Revolucionarias',0,0,'C');
	$this->SetFont('Arial','B',12);
	$this->Cell(2,18,'Sección Secretaría Ejército Occidental',0,0,'R');
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
//CAPTURAMOS EL VALOR DEL NUMERO DE REGISTRO QUE VIENE POR GET
$nr = $_GET['nr'];
/*      _\|/_
        (o o)
+----oOO-{_}-OOo-----------------------------------------------------------------------------------------------------------+
|//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////|
| HACEMOS LA CONSULTA SEGUN EL PARAMETRO QUE CAPTUREMOS POR EL GET                                                         |
|//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////|
+-------------------------------------------------------------------------------------------------------------------------*/

 $mostrar= "SELECT ndestino.denom as destino,datosreclamaciones.nombre,nunidad.denom as um,
            ncategoria.denom as categoria,datosreclamaciones.fecharecibida,
            datosreclamaciones.fecharespuesta,datosreclamaciones.relacionado,
            datosreclamaciones.direccion,datosreclamaciones.sintesis,
			datosreclamaciones.primerapellido,datosreclamaciones.segundoapellido
            FROM datosreclamaciones
            INNER JOIN ndestino ON datosreclamaciones.destinadoa=ndestino.id
            INNER JOIN nunidad  ON datosreclamaciones.unidad=nunidad.id
            INNER JOIN ncategoria ON datosreclamaciones.categoria=ncategoria.id 
            WHERE datosreclamaciones.numreg='".$nr."'";
 $consulta=$Con->Execute($mostrar);

			
$destino         = $consulta->fields('destino');				
$nombre          = $consulta->fields('nombre').' '.$consulta->fields('primerapellido').
                    ' '.$consulta->fields('segundoapellido');	
$um              = $consulta->fields('um');
$categoria       = $consulta->fields('categoria');
$fecha_recibida  = $consulta->fields('fecharecibida');
$fecha_respuesta = $consulta->fields('fecharespuesta');
$relacionado     = $consulta->fields('relacionado');
$direccion       = $consulta->fields('direccion');
$sintesis        = $consulta->fields('sintesis');
//Instanciation of inherited class
$pdf=new PDF();
$pdf->Open();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
//ESCRIBIMOS EL SUBTITULO DEL DOCUMENTO
$pdf->Cell(0,10,'Descripción de la Reclamación con Número de Registro '.$nr,0,1,'C');
$pdf->Cell(0,10,'Destinado a: '.$destino,0,1,'L');
//SUSTITUIMOS LA Ñ
$sustituir = str_replace ("Ñ","Ã‘", $nombre);
////////////////////////////////
$pdf->Cell(0,10,'Nombre Destinatario: '.$sustituir,0,1,'L');
$pdf->Cell(0,10,'Unidad Militar: '.$um,0,1,'L');
$pdf->Cell(0,10,'Categoría: '.$categoria,0,1,'L');
$pdf->Cell(0,10,'Fecha en que se recibió la reclamación: '.$fecha_recibida,0,1,'L');
$pdf->Cell(0,10,'Fecha en que se la dió respuesta a la reclamación: '.$fecha_respuesta,0,1,'L');
$pdf->Cell(0,10,'Relacionado: '.$relacionado,0,1,'L');
$pdf->Cell(0,10,'Dirección del destinatario: '.$direccion,0,1,'L');
$pdf->Cell(0,10,'Síntesis de la reclamación: '.$sintesis,0,1,'L');
//$pdf->Ln(10);
//for($i=1;$i<=40;$i++)
	//$pdf->Cell(0,10,'Printing line number '.$i,0,1);
$pdf->Output();
?>
