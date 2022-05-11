<?php
include '../cxn.php';

$name                = $_POST['username'];
$apellidos           = $_POST['apellidos'];
$sexo                = $_POST['sexo'];
$ci                  = $_POST['ci'];
$nacimiento          = $_POST['nacimiento'];
$provincia           = $_POST['provincia'];
$municipio           = $_POST['municipio'];
$escolaridad         = $_POST['escolaridad'];
$especialidadEstudio = $_POST['especialidadEstudio'];
$cursoMatricula      = $_POST['cursoMatricula'];
$procedencia         = $_POST['procedencia'];
$comprobante         = $_POST['comprobante'];
$ec                  = $_POST['ec'];
$hijos               = $_POST['hijos'];

$calle               = $_POST['calle'];
$numero              = $_POST['numero'];
$entrecalles         = $_POST['entrecalles'];
if(isset($_POST['piso']))
{
    $piso = $_POST['piso'];
}
$apto                = $_POST['apto'];
$barrio              = $_POST['barrio'];
$municipioResidencia = $_POST['municipioResidencia'];
$telefono            = $_POST['telefono'];

$nombrecentro    = $_POST['nombrecentro'];
$direccioncentro = $_POST['direccioncentro'];
$organismocentro = $_POST['organismocentro'];
$cargo           = $_POST['cargo'];
$telefonocentro  = $_POST['telefonocentro'];

$annoMatriculado     = $_POST['annoMatriculado'];
$nombreCentroEstudio = $_POST['nombreCentroEstudio'];
$regional            = $_POST['regional'];
$expedienteNumero    = $_POST['expedienteNumero'];
$fechaIngreso        = $_POST['fechaIngreso'];
$complementario      = $_POST['complementario'];

/*echo "Nombre: $name "; 
echo "Apellidos: $apellidos "; 
echo "Sexo: $sexo ";
echo "CI: $ci ";
echo "Nacimiento: $nacimiento ";
echo "Provincia: $provincia ";
echo "Municipio: $municipio ";
echo "Escolatidad: $escolaridad ";
echo "Especialidad: $especialidadEstudio ";
echo "Curso: $cursoMatricula ";
echo "Procedencia: $procedencia ";
echo "Comprobante: $comprobante ";
echo "Estado civil: $ec ";
echo "Hijos: $hijos ";

echo "calle: $calle ";
echo "numero: $numero ";
echo "entrecalles: $entrecalles ";
echo "piso: $piso ";
echo "apto: $apto ";
echo "barrio: $barrio ";
echo "municipioResidencia: $municipioResidencia ";
echo "telefono: $telefono ";

echo "Nombre centro: $nombrecentro ";
echo "Direccion centro: $direccioncentro ";
echo "Organismo centro: $organismocentro ";
echo "Cargo: $cargo ";
echo "Telefono centro: $telefonocentro ";

echo "Anno matriculado: $annoMatriculado ";
echo "Centro estudio: $nombreCentroEstudio ";
echo "Regional: $regional ";
echo "Expediente numero: $expedienteNumero ";
echo "Fecha ingreso: $fechaIngreso ";
echo "Datos complementarios: $complementario ";*/
      
$target_path = "../uploads/";
$target_path = $target_path . basename( $_FILES['foto']['name']); 
$uploadOk=1;

if (file_exists($target_path)) 
{
    echo "Sorry, file already exists.";
    $uploadOk = 0;
	header("location: ../paginas/RegistrarEstudiante.php?error=2642");
	die;
}
if ($uploadOk==0) 
{
    echo "Sorry, your file was not uploaded.";
} 
else
{ 
	move_uploaded_file($_FILES['foto']['tmp_name'], $target_path);
	echo "The file ".  basename( $_FILES['foto']['name']). " has been uploaded";
}	

$id = uniqid(rand()); 
$sql = "insert into 			             estudiantes(id,username,apellidos,sexo,ci,nacimiento,provincia,municipio,escolaridad,especialidadEstudio,cursoMatricula,procedencia,comprobante,ec,hijos,foto,calle,numero,entrecalles,piso,apto,barrio,municipioResidencia,telefono,nombrecentro,direccioncentro,organismocentro,cargo,telefonocentro,annoMatriculado,nombreCentroEstudio,regional,expedienteNumero,fechaIngreso,complementario, causoBaja)
					values('$id','$name','$apellidos','$sexo','$ci','$nacimiento','$provincia','$municipio','$escolaridad','$especialidadEstudio','$cursoMatricula','$procedencia','$comprobante','$ec','$hijos','$target_path','$calle','$numero','$entrecalles','$piso','$apto','$barrio','$municipioResidencia','$telefono','$nombrecentro','$direccioncentro','$organismocentro','$cargo','$telefonocentro','$annoMatriculado','$nombreCentroEstudio','$regional','$expedienteNumero','$fechaIngreso','$complementario','No')";
@mysql_query($sql);
header("location: ../paginas/RegistrarEstudiante.php?exito");

?>