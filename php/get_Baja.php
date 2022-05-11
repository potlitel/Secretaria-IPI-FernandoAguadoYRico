<?php

include '../cxn.php';
$rs = mysql_query('select * from estudiantes Where causoBaja = "Si"');
$result = array();
while($row = mysql_fetch_object($rs)){
	array_push($result, $row);
}

echo json_encode($result);

?>