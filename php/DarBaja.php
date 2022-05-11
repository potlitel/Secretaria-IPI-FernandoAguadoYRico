<?php
include '../cxn.php';

$id      = $_POST['id'];
$motivos = $_POST['motivos'];
$fecha   = $_POST['datefecha'];

$sql = "update estudiantes set causoBaja='Si',motivosBaja='$motivos',fechaBaja='$fecha' where id='$id'";
@mysql_query($sql);
header("location: ../paginas/HistorialEstudiantes.php");

?>