<?php

include '../cxn.php';
$rs = mysql_query('select * from estudiantes Where especialidadEstudio = "Bibliotecologia" and cursoMatricula = "1er Curso" and causoBaja = "No"');
$result = array();
while($row = mysql_fetch_object($rs)){
	array_push($result, $row);
}

echo json_encode($result);

?>