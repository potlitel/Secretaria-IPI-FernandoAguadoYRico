<?php
	include "cxn.php";
	
	$id=$_GET['id'];
	
	$ap_1=$_POST["ap_1"];
	$ap_2=$_POST["ap_2"];
	$nombre=$_POST["nombre"];
	$ci=$_POST["ci"];
	$edad=$_POST["edad"];
	$sexo=$_POST["sexo"];
	$piel=$_POST["piel"];
	$ano_ini=$_POST["ano_ini"];
	$ano_fin=$_POST["ano_fin"];
	$proc_soc_p=$_POST["proc_soc_p"];
	$proc_soc_m=$_POST["proc_soc_m"];
	
	$calle=$_POST["calle"];
	$no_casa=$_POST["no_casa"];
	$apto=$_POST["apto"];
	$piso_apto=$_POST["piso_apto"];
	$entre_c=$_POST["entre_c"];
	$barrio=$_POST["barrio"];
	$mcpio_al=$_POST["mcpio_al"];
	$prov_al=$_POST["prov_al"];
	
	$tipo_c=$_POST["tipo_c"];
	$grado=$_POST["grado"];
	$esp_esp=$_POST["esp_esp"];
	$esp_art=$_POST["esp_art"];
	$esp_ofic=$_POST["esp_ofic"];
	$regimen=$_POST["regimen"];
	$estatus=$_POST["estatus"];
	$d_sesion=$_POST["d_sesion"];
	$no_mat=$_POST["no_mat"];
	$ing_tec_med=$_POST["ing_tec_med"];
	$ing_ofic=$_POST["ing_ofic"];
	$ing_esp=$_POST["ing_esp"];
	$ing_sup_jo=$_POST["ing_sup_jo"];
	
	$nomb_cent=$_POST["nomb_cent"];
	$sector=$_POST["sector"];
	$codigo=$_POST["codigo"];
	$mcpio_c=$_POST["mcpio_c"];
	$prov_c=$_POST["prov_c"];
	$fecha=$_POST["fecha"];
	$repit=$_POST["repit"];
	
	mysql_query("UPDATE db_estudiantes SET ap_1='$ap_1', ap_2='$ap_2', nombre='$nombre', ci='$ci', edad='$edad', sexo='$sexo', piel='$piel', ano_ini='$ano_ini', ano_fin='$ano_fin', proc_soc_p='$proc_soc_p', proc_soc_m='$proc_soc_m', calle='$calle', no_casa='$no_casa', apto='$apto', piso_apto='$piso_apto', entre_c='$entre_c', barrio='$barrio', mcpio_al='$mcpio_al', prov_al='$prov_al', tipo_c='$tipo_c', grado='$grado', esp_esp='$esp_esp', esp_art='$esp_art', esp_ofic='$esp_ofic', regimen='$regimen', estatus='$estatus', d_sesion='$d_sesion', no_mat='$no_mat', ing_tec_med='$ing_tec_med', ing_ofic='$ing_ofic', ing_esp='$ing_esp', ing_sup_jo='$ing_sup_jo', nomb_cent='$nomb_cent', sector='$sector', codigo='$codigo', mcpio_c='$mcpio_c', prov_c='$prov_c', fecha='$fecha', repit='$repit' WHERE id = $id");
	
	header ("location:index.php?mod=administrar/detalles.php&id=$id");
?>