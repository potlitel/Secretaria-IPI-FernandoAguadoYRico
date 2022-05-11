<?
	session_start();
	session_register();	
	acceso_denegado();
?>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">Buscar</td>
  </tr>
  <form action="index.php?mod=administrar/resultados.php" method="post" name="buscar">
  <tr>
    <td width="240"><label>
      <input name="search_text" type="text" id="textfield" placeholder="Escriba un texto a buscar..." value="" size="40" maxlength="40">
    </label></td>
    <td width="119" align="center" ><label>Buscar por</label></td>
    <td width="152" ><label>
      <select name="search_crit" size="1" id="select">
        <option selected>Escoja un criterio...</option>
        <option value="nombre">Nombre</option>
        <option value="ap_1">1er Apellido</option>
        <option value="ap_2">2do Apelido</option>
        <option value="ci">Carnet Identidad</option>
        <option value="no_mat">Numero Matricula</option>
      </select>
    </label></td>
    <td width="89" ><label>
      <input type="submit" name="button" id="button" value="Mostrar">
    </label>    </td>
  </tr>
  </form>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  
</table>
