<?php
include '../cxn.php';

$id                  = $_POST['id'];
$name                = $_POST['username'];
$apellidos           = $_POST['apellidos'];
$sexo                = $_POST['sexo'];
$ci                  = $_POST['ci'];
$nacimiento          = $_POST['nacimiento'];
$provincia           = $_POST['provincia'];
$municipio           = $_POST['municipio'];
$escolaridad         = $_POST['escolaridad'];
$especialidadEstudio = $_POST['especialidadEstudio'];
$cursoMatricula      = $_POST['cursoMatricula'];
$procedencia         = $_POST['procedencia'];
$comprobante         = $_POST['comprobante'];
$ec                  = $_POST['ec'];
$hijos               = $_POST['hijos'];

$calle               = $_POST['calle'];
$numero              = $_POST['numero'];
$entrecalles         = $_POST['entrecalles'];
if(isset($_POST['piso']))
{
    $piso = $_POST['piso'];
}
$apto                = $_POST['apto'];
$barrio              = $_POST['barrio'];
$municipioResidencia = $_POST['municipioResidencia'];
$telefono            = $_POST['telefono'];

$nombrecentro    = $_POST['nombrecentro'];
$direccioncentro = $_POST['direccioncentro'];
$organismocentro = $_POST['organismocentro'];
$cargo           = $_POST['cargo'];
$telefonocentro  = $_POST['telefonocentro'];

$annoMatriculado     = $_POST['annoMatriculado'];
$nombreCentroEstudio = $_POST['nombreCentroEstudio'];
$regional            = $_POST['regional'];
$expedienteNumero    = $_POST['expedienteNumero'];
$fechaIngreso        = $_POST['fechaIngreso'];
$complementario      = $_POST['complementario'];

$sql = "update estudiantes set username='$name',apellidos='$apellidos',sexo='$sexo',ci='$ci',nacimiento='$nacimiento',provincia='$provincia',municipio='$municipio',escolaridad='$escolaridad',especialidadEstudio='$especialidadEstudio',cursoMatricula='$cursoMatricula',procedencia='$procedencia',comprobante='$comprobante',ec='$ec',hijos='$hijos',calle='$calle',numero='$numero',entrecalles='$entrecalles',piso='$piso',apto='$apto',barrio='$barrio',municipioResidencia='$municipioResidencia',telefono='$telefono',nombrecentro='$nombrecentro',direccioncentro='$direccioncentro',organismocentro='$organismocentro',cargo='$cargo',telefonocentro='$telefonocentro',annoMatriculado='$annoMatriculado',nombreCentroEstudio='$nombreCentroEstudio',regional='$regional',expedienteNumero='$expedienteNumero',fechaIngreso='$fechaIngreso',complementario='$complementario' where id='$id'";

echo $sql;
@mysql_query($sql);
header("location: ../paginas/EditarEstudiante.php?id=$id&exito");

?>