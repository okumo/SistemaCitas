<html>
    <center>
<?php
include ("conexion.php");
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$Fecnacimiento=$_POST['Fecnacimiento'];
$sexo=$_POST['sexo'];
if(empty($usuario) or empty($password) or empty($nombre) or empty($apellido) or empty($Fecnacimiento) or empty($sexo)){
	echo "COMPLETE TODOS LOS CAMPOS POR FAVOR";
}
        else{
$query="INSERT INTO usuarios VALUES(null,'$usuario','$password','$nombre','$apellido','$Fecnacimiento','$sexo')";
$resultado=$conexion->query($query);

if($resultado){
    header("Location: tabla_usuarios.php");
}
else
    echo "Insercción Fallida";
        }
?>
    </center>
</html>