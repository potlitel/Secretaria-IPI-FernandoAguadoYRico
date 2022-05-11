<?
	include "cxn.php";
	if (isset($ini))
	{
		$ini=$ini; 
	}
	else
	{
		$ini=0;		
	}
	$fin=$ini+5;
	$check=mysql_query("SELECT * FROM db_estudiantes ORDER BY ap_1 ASC");
	$select=mysql_query("SELECT * FROM db_estudiantes ORDER BY ap_1 ASC LIMIT $ini,$fin");
	$result=mysql_num_rows($check);

	echo "<table width='612' border='1' align='center' cellpadding='0' cellspacing='0' class='tabla'>";
	echo "<tr>";
	echo "<td colspan='7' class='titulo'>Listado de Estudiantes&nbsp;</td>";
  	echo "</tr>";	
  	echo "<tr>  ";  
    echo "<td width='115'>1er Apellido</td>";
    echo "<td width='121'>2do Apellido</td>";
    echo "<td width='121'>Nombre</td>";
    echo "<td width='166'>N&uacute;mero Matr&iacute;cula</td>";
  	
    echo "<td width='25' align='left' valign='top'>";
    echo "<a href='index.php?mod=administrar/insertar.php'>";
    echo "<img src='images/icon/New.png' width='20' height='20'>";
    echo "</a>";
    echo "</td>";
    
    echo "<td width='24' align='left' valign='top'>";
    echo "<a href='index.php?mod=administrar/busqueda.php'>";
    echo "<img src='images/icon/search.png' width='20' height='20' />";
    echo "</a>";
    echo "</td>";
    
    echo "<td width='24' align='left' valign='top'>";
    echo "&nbsp;";
    echo "</td>";
  	echo "</tr>";
	$contador=0;
	while($fila=mysql_fetch_array($select))
	{
	$contador++; 	 
	echo "<tr>";    
	echo "<td>".$fila['ap_1']."</td>";
    echo "<td>".$fila['ap_2']."</td>";
    echo "<td>".$fila['nombre']."</td>";
    echo "<td>".$fila['no_mat']."</td>";
    echo "<td align='left' valign='top'>";
    echo "<a href='index.php?mod=administrar/detalles.php&id=".$fila['id']."'>";
    echo "<img src='images/icon/new_reg.png' alt='Detalles' name='Detalles' width='20' height='20'/>";
    echo "</a>";
    echo "<a href='index.php?mod=administrar/modificar.php&id=".$fila['id']."'>";
    echo "</a>";
    echo "<a href='index.php?mod=administrar/eliminar.php&id=".$fila['id']."'>";
    echo "</a>";
    echo "</td>";
    echo "<td align='left' valign='top'>";
    echo "<a href='index.php?mod=administrar/modificar.php&amp;id=".$fila['id']."'>";
    echo "<img src='images/icon/edit_reg.png' alt='Editar' name='Editar' width='20' height='20' id='Editar' />";
    echo "</a>";
    echo "</td>";
	echo "<td align='left' valign='top'>";
    echo "<a href='index.php?mod=administrar/eliminar.php&amp;id=".$fila['id']."'>";
    echo "<img src='images/icon/delete.ico' alt='Eliminar' name='Eliminar' width='20' height='20' id='Eliminar' />";
    echo "</a>";
    echo "</td>";
	echo "</tr>";
    
	}
	
	
	echo "<tr align='center'>";
	echo "<td colspan='7'>";	
	if($ini>=5)
	{
	echo "<a href='index.php?mod=administrar/listado.php&ini=";?><? echo $ini-5;?><? echo "'>";
	echo "<img width='20' height='20' src='images/icon/ArrowLeft.png'>";
	echo "</a>";
	}
	else
	{
	echo "<img width='20' height='20' src='images/icon/ArrowLeft.png'>";
	}
		
	echo "&nbsp;";
	
	echo "<a href='index.php?mod=administrar/listado.php&ini=0'>";
	echo "<img width='20' height='20' src='images/icon/home.png'>";
	echo "</a>";
	
	echo "&nbsp;";
	$ultimo=$ini+$contador;	
	if($contador==5 && $result>$ultimo)
	{
	echo "<a href='index.php?mod=administrar/listado.php&ini=".$fin."'>";
	echo "<img width='20' height='20' src='images/icon/ArrowRight.png'></td>";
	echo "</a>";
	}
	else
	{
	echo "<img width='20' height='20' src='images/icon/ArrowRight.png'></td>";
	}
	
	echo "</tr>";
	echo "<tr>";
	echo "<td colspan='7'>";
	echo "Se muestran resultados del "; 
	 
		$primero=1;
		if($ini==0)
		{
			echo $primero;
		}
		else
		{
			echo $ini;
		}
	 
	echo " al ";	
	echo $ultimo;		
	echo " de ".$result." en total";
	echo "";
	
	
?>
</table>
