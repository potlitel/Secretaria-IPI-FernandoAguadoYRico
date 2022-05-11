<?php
	include "../cxn.php";
	include "valid.php";	
	//aqui empieza el chorizo bueno
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
	$foto="images/unknow.png";
	if($sexo=="Masculino")
	{
		$foto="images/user/male.jpg";
	}
	elseif($sexo=="Femenino")
	{
		$foto="images/user/female.jpg";
	}
	else
	{
		$foto="images/user/unknow.jpg";
	}
	//echo $prov_al;
	//validacion vacio
	if($vacio=="true")
	{
		echo "<script language='JavaScript'>";
		echo "alert('Asegurese de no dejar campos vacios. Los campos seran reiniciados');";
		echo "</script>";
		echo "<meta http-equiv=refresh content=0;url=../index.php?mod=administrar/insertar.php>";
	}
	elseif($number=="true")
	{
		echo "<script language='JavaScript'>";
		echo "alert('No se permiten numeros en los campos 1, 2, 3 y 4');";
		echo "</script>";
		echo "<meta http-equiv=refresh content=0;url=../index.php?mod=administrar/insertar.php>";
	}
	elseif($string=="true")
	{
		echo "<script language='JavaScript'>";
		echo "alert('No se permiten letras en los campos 1, 2, 3 y 4');";
		echo "</script>";
		echo "<meta http-equiv=refresh content=0;url=../index.php?mod=administrar/insertar.php>";
	}
	else
	{		
		mysql_query("INSERT INTO db_estudiantes (ap_1,ap_2,nombre,ci,edad,sexo,piel,ano_ini,ano_fin,proc_soc_p,proc_soc_m,calle,no_casa,apto,piso_apto,entre_c,barrio,mcpio_al,prov_al,tipo_c,grado,esp_esp,esp_art,esp_ofic,regimen,estatus,d_sesion,no_mat,ing_tec_med,ing_ofic,ing_esp,ing_sup_jo,nomb_cent,sector,codigo,mcpio_c,prov_c,fecha,repit,foto) VALUES ('$ap_1','$ap_2','$nombre','$ci','$edad','$sexo','$piel','$ano_ini','$ano_fin','$proc_soc_p','$proc_soc_m','$calle','$no_casa','$apto','$piso_apto','$entre_c','$barrio','$mcpio_al','$prov_al','$tipo_c','$grado','$esp_esp','$esp_art','$esp_ofic','$regimen','$estatus','$d_sesion','$no_mat','$ing_tec_med','$ing_ofic','$ing_esp','$ing_sup_jo','$nomb_cent','$sector','$codigo','$mcpio_c','$prov_c','$fecha','$repit','$foto');");
	header ("location:../index.php?mod=administrar/insertar.php");
	}
?>
