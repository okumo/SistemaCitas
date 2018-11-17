<?php
include ("conexion.php");
$identificacion=$_POST['identificacion'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$especialidad=$_POST['especialidad'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$nacimiento=$_POST['nacimiento'];

$query="INSERT INTO medicos VALUES(null,'$identificacion','$nombre','$apellido','$especialidad','$telefono','$correo','$nacimiento')";
$resultado=$conexion->query($query);
if($resultado){
    header("Location: tabla_medicos.php");
}
else
    echo "Insercción Fallida";
?>
