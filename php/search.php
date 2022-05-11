<?php
include '../cxn.php';
if($_POST)
{
$q=$_POST['search'];
$sql_res=mysql_query("select * from estudiantes where username like '%$q%' order by id LIMIT 5");
while($row=mysql_fetch_array($sql_res))
{
$id=$row["id"];
$username=$row["username"];
$apellidos=$row["apellidos"];
$foto=$row["foto"];
$especialidad=$row["especialidadEstudio"];
$curso=$row["cursoMatricula"];
$b_username='<strong>'.$q.'</strong>';
$b_apellidos='<strong>'.$q.'</strong>';
$final_username = str_ireplace($q, $b_username, $username);
$final_apellidos = str_ireplace($q, $b_apellidos, $apellidos);
?>

<a href="../paginas/PlantillaEstudiante.php?id=<?php echo $row["id"];?>">
<div class="show" align="left">
<img src="<?php echo $foto; ?>" style="width:50px; height:50px; float:left; margin-right:6px;" /><span class="name"><?php echo $final_username; ?></span>&nbsp;<?php echo $final_apellidos; ?><br/>
<?php echo $especialidad; ?></span>&nbsp;<?php echo $curso; ?><br/>
<br/>
</div>
</a>

<?php
}
}
?>
