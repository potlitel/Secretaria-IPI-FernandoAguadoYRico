<?php

include '../cxn.php';
$rs = mysql_query('select * from db_usuarios');
$result = array();
while($row = mysql_fetch_object($rs)){
	array_push($result, $row);
}

echo json_encode($result);

?>