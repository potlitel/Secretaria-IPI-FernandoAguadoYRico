<?php
	//sesion
	$usuario="LOKA";
	
	//privilegios
	
	//vacio
	$vacio;
	if(empty($ap_1) || empty($ci) || empty($ano_ini) || empty($ap_2) || ($sexo=="---") || empty($proc_soc_p) || empty($proc_soc_m) || empty($sexo) || empty($ano_fin) || empty($nombre) || empty($edad) || ($piel=="---") || empty($calle) || empty($no_casa) || empty($apto) || empty($piso_apto) || empty($entre_c) || empty($barrio) || empty($mcpio_al) || empty($prov_al) || empty($tipo_c) || empty($grado) || empty($esp_esp) || empty($esp_art) || empty($esp_ofic) || empty($regimen) || empty($estatus) || empty($d_sesion) || empty($no_mat) || empty($ing_tec_med) || empty($ing_ofic) || empty($ing_esp) || empty($ing_sup_jo) || empty($nomb_cent) || empty($sector) || empty($codigo) || empty($mcpio_c) || ($prov_c=="---") || empty($fecha) || ($repit=="---"))
	{
		$vacio="true";		
	}
	else
	{
		$vacio="false";
	}
	
	//numerico
	/*$number;
	if(is_numeric($ap_1))
	{
		$number="true";
	}
	else
	{
		$number="false";
	}
	*/
	//letras
	/*$string;
	if(is_string($ci))
	{
		$string="true";
	}
	else
	{
		$string="false";
	}*/	
	//OPTIMIZE TABLE db_estudiantes
?>