<?php
	include "cxn.php";
	$id=$_GET['id'];
	$query=mysql_query("SELECT * FROM db_estudiantes WHERE id='$id'");
	$fila=mysql_fetch_array($query);
?>
<form action="index.php?mod=administrar/mod.php&id=<?php echo $fila['id']?>" method="post" name="mod_form">
<table width="0" border="1" cellspacing="0" cellpadding="0" class="tabla">
  <tr>
    
  </tr>
</table>
<table width="658" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="5" align="center">Datos del estudiante</td>
  </tr>
  <tr>
    <td width="120" rowspan="4" align="left" valign="top"><img width="13" height="14" src=""></td>
    <td width="120">1er Apellido</td>
    <td width="143">N&uacute;mero Identidad</td>
    <td width="120">A&ntilde;o Inicio</td>
    <td width="143">Proc. Soc. Padre</td>
  </tr>
  <tr>
    <td><input name="ap_1" id="ap_1" size="20" value="<?php echo $fila['ap_1'];?>" /></td>
    <td><input name="ci" id="ci" size="20" value="<?php echo $fila['ci'];?>"></td>
    <td><input name="ano_ini" id="ano_ini" value="<?php echo $fila['ano_ini'];?>" size="20"></td>
    <td><input name="proc_soc_p" id="proc_soc_p" value="<?php echo $fila['proc_soc_p'];?>" size="20"></td>
  </tr>
  <tr>
    <td>2do Apellido</td>
    <td>Sexo</td>
    <td>A&ntilde;o Final</td>
    <td>Proc. Soc. Madre</td>
  </tr>
  <tr>
    <td><input name="ap_2" type="text" id="ap_2" value="<?php echo $fila['ap_2'];?>" size="20"></td>
    <td><label>
      <select name="sexo" id="sexo">
        <option selected="selected">---</option>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>      
      </select>
    </label>    </td>
    <td><input name="ano_fin" type="text" id="ano_fin" value="<?php echo $fila['ano_fin'];?>" size="20"></td>
    <td><input name="proc_soc_m" type="text" id="proc_soc_m" value="<?php echo $fila['proc_soc_m'];?>" size="20"></td>
  </tr>
  <tr>
    <td>Nombre(s)</td>
    <td>Edad</td>
    <td>Piel</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>    
  </tr>
  <tr>
    <td><input name="nombre" type="text" id="nombre" value="<?php echo $fila['nombre'];?>" size="20"></td>
    <td><input name="edad" type="text" id="edad" value="<?php echo $fila['edad'];?>" size="20"></td>
    <td><label>
      <select name="piel" id="piel">
      	<option selected="selected">---</option>        
        <option value="Blanco/a">Blanco/a</option>
        <option value="Negro/a">Negro/a</option>
        <option value="Mestizo/a">Mestizo/a</option>
      </select>
    </label></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" align="center">Direcci&oacute;n del alumno</td>
  </tr>
  <tr>
    <td>Calle</td>
    <td>Numero</td>
    <td>Apto</td>
    <td>Piso</td>
    <td>Entecalles</td>
  </tr>
  <tr>
    <td><input name="calle" type="text" id="calle" value="<?php echo $fila['calle'];?>" size="20"></td>
    <td><input name="no_casa" type="text" id="no_casa" value="<?php echo $fila['no_casa'];?>" size="20"></td>
    <td><input name="apto" type="text" id="apto" value="<?php echo $fila['apto'];?>" size="20"></td>
    <td><input name="piso_apto" type="text" id="piso_apto" value="<?php echo $fila['piso_apto'];?>" size="20"></td>
    <td><input name="entre_c" type="text" id="entre_c" value="<?php echo $fila['entre_c'];?>" size="20"></td>
  </tr>
  <tr>
    <td>Barrio</td>
    <td>Municipio</td>
    <td>Provincia</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><input name="barrio" type="text" id="barrio" value="<?php echo $fila['barrio'];?>" size="20"></td>
    <td align="center"><input name="mcpio_al" type="text" id="mcpio_al" value="<?php echo $fila['mcpio_al'];?>" size="20"></td>
    <td align="center"><label>
    <select name="prov_al" id="prov_al">
      <option selected="selected">---</option>
      <option value="Pinar del Rio">Pinar del Rio</option>
      <option value="Isla de la Juventud">Isla de la Juventud</option>
      <option value="Artemisa">Artemisa</option>
      <option value="La Habana">La Habana</option>
      <option value="Mayabeque">Mayabeque</option>
      <option value="Matanzas">Matanzas</option>
      <option value="Villa Clara">Villa Clara</option>
      <option value="Cienfuegos">Cienfuegos</option>
      <option value="Sancti Spiritus">Sancti Spiritus</option>
      <option value="Ciego de Avila">Ciego de Avila</option>
      <option value="Camaguey">Camaguey</option>
      <option value="Las Tunas">Las Tunas</option>
      <option value="Holguin">Holguin</option>
      <option value="Granma">Granma</option>
      <option value="Santiago de Cuba">Santiago de Cuba</option>
      <option value="Guantanamo">Guantanamo</option>
    </select>
    </label></td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" align="center">Otros datos</td>
  </tr>
  <tr>
    <td>Tipo Centro</td>
    <td>Grado</td>
    <td>Esp. Especial</td>
    <td>Esp. Arte</td>
    <td>Esp. Oficio</td>
  </tr>
  <tr>
    <td><input name="tipo_c" type="text" id="tipo_c" value="<?php echo $fila['tipo_c'];?>" size="20"></td>
    <td><input name="grado" type="text" id="grado" value="<?php echo $fila['grado'];?>" size="20"></td>
    <td><input name="esp_esp" type="text" id="esp_esp" value="<?php echo $fila['esp_esp'];?>" size="20"></td>
    <td><input name="esp_art" type="text" id="esp_art" value="<?php echo $fila['esp_art'];?>" size="20"></td>
    <td><input name="esp_ofic" type="text" id="esp_ofic" value="<?php echo $fila['esp_ofic'];?>" size="20"></td>
  </tr>
  <tr>
    <td>Regimen</td>
    <td>Estatus</td>
    <td>Doble Sesion</td>
    <td>Numero Matricula</td>
    <td>Ing. Tec. Medio</td>
  </tr>
  <tr>
    <td><input name="regimen" type="text" id="regimen" value="<?php echo $fila['regimen'];?>" size="20"></td>
    <td><input name="estatus" type="text" id="estatus" value="<?php echo $fila['estatus'];?>" size="20"></td>
    <td><input name="d_sesion" type="text" id="d_sesion" value="<?php echo $fila['d_sesion'];?>" size="20"></td>
    <td><input name="no_mat" type="text" id="no_mat" value="<?php echo $fila['no_mat'];?>" size="20"></td>
    <td><input name="ing_tec_med" type="text" id="ing_tec_med" value="<?php echo $fila['ing_tec_med'];?>" size="20"></td>
  </tr>
  <tr>
    <td>Ing. Oficio</td>
    <td>Ing. Especial</td>
    <td>Ing. Sup. Joven</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><input name="ing_ofic" type="text" id="ing_ofic" value="<?php echo $fila['ing_ofic'];?>" size="20"></td>
    <td align="center"><input name="ing_esp" type="text" id="ing_esp" value="<?php echo $fila['ing_esp'];?>" size="20"></td>
    <td align="left"><input name="ing_sup_jo" type="text" id="ing_sup_jo" value="<?php echo $fila['ing_sup_jo'];?>" size="20"></td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" align="center">Datos del centro</td>
  </tr>
  <tr>
    <td>Nombre</td>
    <td>Sector</td>
    <td>Codigo Centro</td>
    <td>Municipio</td>
    <td>Provincia</td>
  </tr>
  <tr>
    <td><input name="nomb_cent" type="text" id="nomb_cent" value="<?php echo $fila['nomb_cent'];?>" size="20"></td>
    <td><input name="sector" type="text" id="sector" value="<?php echo $fila['sector'];?>" size="20"></td>
    <td><input name="codigo" type="text" id="codigo" value="<?php echo $fila['codigo'];?>" size="20"></td>
    <td><input name="mcpio_c" type="text" id="mcpio_c" value="<?php echo $fila['mcpio_c'];?>" size="20"></td>
    <td><select name="prov_c" id="prov_c">
      <option selected="selected">---</option>
      <option value="Pinar del Rio">Pinar del Rio</option>
      <option value="Isla de la Juventud">Isla de la Juventud</option>
      <option value="Artemisa">Artemisa</option>
      <option value="La Habana">La Habana</option>
      <option value="Mayabeque">Mayabeque</option>
      <option value="Matanzas">Matanzas</option>
      <option value="Villa Clara">Villa Clara</option>
      <option value="Cienfuegos">Cienfuegos</option>
      <option value="Sancti Spiritus">Sancti Spiritus</option>
      <option value="Ciego de Avila">Ciego de Avila</option>
      <option value="Camaguey">Camaguey</option>
      <option value="Las Tunas">Las Tunas</option>
      <option value="Holguin">Holguin</option>
      <option value="Granma">Granma</option>
      <option value="Santiago de Cuba">Santiago de Cuba</option>
      <option value="Guantanamo">Guantanamo</option>
    </select></td>
  </tr>
  <tr>
    <td>Fecha</td>
    <td>Repitente</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="28"><input name="fecha" type="text" id="fecha" value="<?php echo $fila['fecha'];?>" size="20"></td>
    <td><label>
    <select name="repit" id="repit">
      <option selected="selected">---</option>
      <option value="SI">SI</option>
      <option value="NO">NO</option>
     </select>
    </label></td>
    <td>&nbsp;</td>
    <td><label></label></td>
    <td align="left"><label>
    <input type="submit" name="button" id="button" value="Modificar" />
    
    </label></td>
  </tr>
</table>
</form>
