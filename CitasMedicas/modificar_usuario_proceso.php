<?php
include ("conexion.php");
$id=$_REQUEST['id'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$Fecnacimiento=$_POST['Fecnacimiento'];
$sexo=$_POST['sexo'];

$query="UPDATE usuarios set usuario='$usuario', pass='$password', nombres='$nombre',apellidos='$apellido',pacFechaNacimiento='$Fecnacimiento',pacSexo='$sexo' WHERE id='$id'";
$resultado=$conexion->query($query);
if($resultado){
    header("Location: tabla_usuarios.php");
}
else
    echo "Insercción Fallida";
?>
