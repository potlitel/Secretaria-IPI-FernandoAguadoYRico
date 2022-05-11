<div id="ins_form">
<form action="administrar/ins.php" method="post" name="ins_form">
<table width="658" border="0" align="center" cellpadding="0" cellspacing="0" class="tabla">
  <tr>
    <td colspan="5" align="center" id="section">Datos del estudiante</td>
  </tr>
  <tr>
    <td width="120" rowspan="4" align="center" valign="middle" id="foto_borde"><img src="images/user/unknow.jpg" width="80" height="80"></td>
    <td width="120" id="tag">1er Apellido</td>
    <td width="143" id="tag">N&uacute;mero Identidad</td>
    <td width="120" id="tag">A&ntilde;o Inicio</td>
    <td width="143" id="tag">Proc. Soc. Padre</td>
  </tr>
  <tr>
    <td><input name="ap_1" type="text" id="field" size="20" maxlength="20"></td>
    <td><input name="ci" type="text" id="field" size="20" maxlength="20"></td>
    <td><input name="ano_ini" type="text" id="field" size="20" maxlength="20"></td>
    <td><input name="proc_soc_p" type="text" id="field" size="20" maxlength="20"></td>
  </tr>
  <tr>
    <td id="tag">2do Apellido</td>
    <td id="tag">Sexo</td>
    <td id="tag">A&ntilde;o Final</td>
    <td id="tag">Proc. Soc. Madre</td>
  </tr>
  <tr>
    <td><input name="ap_2" type="text" id="field" size="20" maxlength="20"></td>
    <td><label>
      <select name="sexo" id="field">
        <option value="---" selected="selected">---</option>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
      </select></label>    </td>
    <td><input name="ano_fin" type="text" id="field" size="20" maxlength="20"></td>
    <td><input name="proc_soc_m" type="text" id="field" size="20" maxlength="20"></td>
  </tr>
  <tr>
    <td id="tag">Nombre(s)</td>
    <td id="tag">Edad</td>
    <td id="tag">Piel</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><input name="nombre" type="text" id="field" size="20" maxlength="20"></td>
    <td><input name="edad" type="text" id="field" size="20" maxlength="20"></td>
    <td><label>
      <select name="piel" id="field">
        <option value="---" selected="selected">---</option>
        <option value="Blanco/a">Blanco/a</option>
        <option value="Negro/a">Negro/a</option>
        <option value="Mestizo/a">Mestizo/a</option>
          </select>
    </label></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" align="center" id="section">Direcci&oacute;n del alumno</td>
  </tr>
  <tr>
    <td id="tag">Calle</td>
    <td id="tag">Numero</td>
    <td id="tag">Apto</td>
    <td id="tag">Piso</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><input name="calle" type="text" id="field" size="20" maxlength="20"></td>
    <td><input name="no_casa" type="text" id="field" size="20" maxlength="20"></td>
    <td><input name="apto" type="text" id="field" size="20" maxlength="20"></td>
    <td><input name="piso_apto" type="text" id="field" size="20" maxlength="20"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td id="tag">Barrio</td>
    <td id="tag">Municipio</td>
    <td id="tag">Provincia</td>
    <td id="tag">Entecalles</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><input name="barrio" type="text" id="field" size="20" maxlength="20"></td>
    <td align="center"><input name="mcpio_al" type="text" id="field" size="20" maxlength="20"></td>
    <td><label>
    <select name="prov_al" id="field">
      <option value="---" selected="selected">---</option>
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
    <td colspan="2"><input name="entre_c" type="text" id="field" size="40" maxlength="40" /></td>
    </tr>
  <tr>
    <td colspan="5" align="center" id="section">Otros datos</td>
  </tr>
  <tr>
    <td id="tag">Tipo Centro</td>
    <td id="tag">Grado</td>
    <td id="tag">Esp. Especial</td>
    <td id="tag">Esp. Arte</td>
    <td id="tag">Esp. Oficio</td>
  </tr>
  <tr>
    <td><input name="tipo_c" type="text" id="field" size="20" maxlength="20"></td>
    <td><input name="grado" type="text" id="field" size="20" maxlength="20"></td>
    <td><input name="esp_esp" type="text" id="field" size="20" maxlength="20"></td>
    <td><input name="esp_art" type="text" id="field" size="20" maxlength="20"></td>
    <td><input name="esp_ofic" type="text" id="field" size="20" maxlength="20"></td>
  </tr>
  <tr>
    <td id="tag">Regimen</td>
    <td id="tag">Estatus</td>
    <td id="tag">Doble Sesion</td>
    <td id="tag">Numero Matricula</td>
    <td id="tag">Ing. Tec. Medio</td>
  </tr>
  <tr>
    <td><input name="regimen" type="text" id="field" size="20" maxlength="20"></td>
    <td><input name="estatus" type="text" id="field" size="20" maxlength="20"></td>
    <td><input name="d_sesion" type="text" id="field" size="20" maxlength="20"></td>
    <td><input name="no_mat" type="text" id="field" size="20" maxlength="20"></td>
    <td><input name="ing_tec_med" type="text" id="field" size="20" maxlength="20"></td>
  </tr>
  <tr>
    <td id="tag">Ing. Oficio</td>
    <td id="tag">Ing. Especial</td>
    <td id="tag">Ing. Sup. Joven</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><input name="ing_ofic" type="text" id="field" size="20" maxlength="20"></td>
    <td align="center"><input name="ing_esp" type="text" id="field" size="20" maxlength="20"></td>
    <td align="left"><input name="ing_sup_jo" type="text" id="field" size="20" maxlength="20"></td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" align="center" id="section">Datos del centro</td>
  </tr>
  <tr>
    <td id="tag">Nombre</td>
    <td id="tag">Sector</td>
    <td id="tag">Codigo Centro</td>
    <td id="tag">Municipio</td>
    <td id="tag">Provincia</td>
  </tr>
  <tr>
    <td><input name="nomb_cent" type="text" id="field" size="20" maxlength="20"></td>
    <td><input name="sector" type="text" id="field" size="20" maxlength="20"></td>
    <td><input name="codigo" type="text" id="field" size="20" maxlength="20"></td>
    <td><input name="mcpio_c" type="text" id="field" size="20" maxlength="20"></td>
    <td><select name="prov_c" id="field">
      <option value="---" selected="selected">---</option>
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
    <td id="tag">Fecha</td>
    <td id="tag">Repitente</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="28"><input name="fecha" type="text" id="field" size="20" maxlength="20"></td>
    <td><label>
      <select name="repit" id="field">
        <option value="---" selected="selected">---</option>
        <option value="SI">SI</option>
        <option value="NO">NO</option>
          </select>
    </label></td>
    <td>&nbsp;</td>
    <td><label>
    <input type="submit" name="insertar" id="boton" value="Insertar" />
    </label></td>
    <td align="left"><label>
    <input type="reset" name="resetear" id="boton" value="Borrar" />
    </label></td>
  </tr>
</table>
</form>
</div>
