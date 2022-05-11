<?php
	include "cxn.php";	
	$id=$_GET['id'];
	$query=mysql_query("SELECT * FROM db_estudiantes WHERE id='$id'");
	$fila=mysql_fetch_array($query);
?>
<form action="administrar/mod.php?id=<?php echo $fila['id']?>" method="post" name="mod_form">

<table width="634" border="1" align="center" cellpadding="0" cellspacing="0" class="tabla">
  <tr>
    <td colspan="5" id="principal">Datos del estudiante</td>
  </tr>
  <tr>
    <td width="124" rowspan="4" align="center" valign="middle" class="foto"><img width="80" height="80" src="<?php echo $fila['foto'];?>"></img></td>
    <td width="124" class="label">1er Apellido</td>
    <td width="124" class="label">N&uacute;mero Identidad</td>
    <td width="124" class="label">A&ntilde;o Inicio</td>
    <td width="126" class="label">Proc. Soc. Padre</td>
  </tr>
  <tr>
    <td class="text"><?php echo $fila['ap_1'];?></td>
    <td class="text"><?php echo $fila['ci'];?></td>
    <td class="text"><?php echo $fila['ano_ini'];?></td>
    <td class="text"><?php echo $fila['proc_soc_p'];?></td>
  </tr>
  <tr>
    <td class="label">2do Apellido</td>
    <td class="label">Sexo</td>
    <td class="label">A&ntilde;o Final</td>
    <td class="label">Proc. Soc. Madre</td>
  </tr>
  <tr>
    <td class="text"><?php echo $fila['ap_2'];?></td>
    <td class="text">
      <?php if($fila['sexo']=="Masculino"){echo "Masculino";}elseif($fila['sexo']=="Femenino"){echo "Femenino";}else{echo "---";}?>        </td>
    <td class="text"><?php echo $fila['ano_fin'];?></td>
    <td class="text"><?php echo $fila['proc_soc_m'];?></td>
  </tr>
  <tr>
    <td class="label">Nombre(s)</td>
    <td class="label">Edad</td>
    <td class="label">Piel</td>
    <td colspan="2" rowspan="2" class="label">&nbsp;</td>
    </tr>
  <tr>
    <td class="text"><?php echo $fila['nombre'];?></td>
    <td class="text"><?php echo $fila['edad'];?></td>
    <td class="text">
    <?php if($fila['piel']=="Blanco/a"){echo "Blanco/a";}elseif($fila['piel']=="Negro/a"){echo "Negro/a";}elseif($fila['piel']=="Mestizo/a"){echo "Mestizo/a";}else{echo "---";}?>    </td>
    </tr>
  <tr>
    <td colspan="5" id="principal">Direcci&oacute;n del alumno</td>
  </tr>
  <tr>
    <td class="label">Calle</td>
    <td class="label">Numero</td>
    <td class="label">Apto</td>
    <td class="label">Piso</td>
    <td rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td class="text"><?php echo $fila['calle'];?></td>
    <td class="text"><?php echo $fila['no_casa'];?></td>
    <td class="text"><?php echo $fila['apto'];?></td>
    <td class="text"><?php echo $fila['piso_apto'];?></td>
    </tr>
  <tr>
    <td class="label">Barrio</td>
    <td class="label">Municipio</td>
    <td class="label">Provincia</td>
    <td colspan="2" class="label">Entecalles</td>
    </tr>
  <tr>
    <td class="text"><?php echo $fila['barrio'];?></td>
    <td class="text"><?php echo $fila['mcpio_al'];?></td>
    <td class="text"><?php echo $fila['prov_al'];?></td>
    <td colspan="2" class="text"><?php echo $fila['entre_c'];?></td>
    </tr>
  <tr>
    <td colspan="5" id="principal">Otros datos</td>
  </tr>
  <tr>
    <td class="label">Tipo Centro</td>
    <td class="label">Grado</td>
    <td class="label">Esp. Especial</td>
    <td class="label">Esp. Arte</td>
    <td class="label">Esp. Oficio</td>
  </tr>
  <tr>
    <td class="text"><?php echo $fila['tipo_c'];?></td>
    <td class="text"><?php echo $fila['grado'];?></td>
    <td class="text"><?php echo $fila['esp_esp'];?></td>
    <td class="text"><?php echo $fila['esp_art'];?></td>
    <td class="text"><?php echo $fila['esp_ofic'];?></td>
  </tr>
  <tr>
    <td class="label">Regimen</td>
    <td class="label">Estatus</td>
    <td class="label">Doble Sesion</td>
    <td class="label">Numero Matricula</td>
    <td class="label">Ing. Tec. Medio</td>
  </tr>
  <tr>
    <td class="text"><?php echo $fila['regimen'];?></td>
    <td class="text"><?php echo $fila['estatus'];?></td>
    <td class="text"><?php echo $fila['d_sesion'];?></td>
    <td class="text"><?php echo $fila['no_mat'];?></td>
    <td class="text"><?php echo $fila['ing_tec_med'];?></td>
  </tr>
  <tr>
    <td class="label">Ing. Oficio</td>
    <td class="label">Ing. Especial</td>
    <td class="label">Ing. Sup. Joven</td>
    <td colspan="2" rowspan="2">&nbsp;</td>
    </tr>
  <tr>
    <td align="center" class="text"><?php echo $fila['ing_ofic'];?></td>
    <td align="center" class="text"><?php echo $fila['ing_esp'];?></td>
    <td align="left" class="text"><?php echo $fila['ing_sup_jo'];?></td>
    </tr>
  <tr>
    <td colspan="5" id="principal">Datos del centro</td>
  </tr>
  <tr>
    <td class="label">Nombre</td>
    <td class="label">Sector</td>
    <td class="label">Codigo Centro</td>
    <td class="label">Municipio</td>
    <td class="label">Provincia</td>
  </tr>
  <tr>
    <td class="text"><?php echo $fila['nomb_cent'];?></td>
    <td class="text"><?php echo $fila['sector'];?></td>
    <td class="text"><?php echo $fila['codigo'];?></td>
    <td class="text"><?php echo $fila['mcpio_c'];?></td>
    <td class="text"><?php echo $fila['prov_c'];?></td>
  </tr>
  <tr>
    <td class="label">Fecha</td>
    <td class="label">Repitente</td>
    <td colspan="3" rowspan="2"><a href="index.php?mod=administrar/modificar.php&amp;id=<?php echo $id;?>">Modificar</a></td>
    </tr>
  <tr>
    <td height="26" class="text"><?php echo $fila['fecha'];?></td>
    <td class="text"><?php echo $fila['repit'];?></td>
    </tr>
</table>
</form>