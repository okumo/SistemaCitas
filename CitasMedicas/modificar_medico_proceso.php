<?php
include ("conexion.php");
$idMedico=$_REQUEST['idMedico'];
$identificacion=$_POST['identificacion'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$especialidad=$_POST['especialidad'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$nacimiento=$_POST['nacimiento'];

$query="UPDATE medicos set medidentificacion='$identificacion', mednombres='$nombre', medapellidos='$apellido', medEspecialidad='$especialidad', medtelefono='$telefono', medcorreo='$correo', medNacimiento='$nacimiento' WHERE idMedico='$idMedico'";
$resultado=$conexion->query($query);
if($resultado){
    header("Location: tabla_medicos.php");
}
else
    echo "Insercción Fallida";
?>
