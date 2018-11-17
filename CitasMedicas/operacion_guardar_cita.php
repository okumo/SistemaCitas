<?php
include ("conexion.php");
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$usuario=$_POST['usuario'];
$medico=$_POST['medico'];
$estado=$_POST['estado'];
$observaciones=$_POST['observaciones'];
//TIENES QUE GUARDAR LOS DATOS DE LA CITAAAAAAAAAAAAAAAAAAAAAA
$query="INSERT INTO citas VALUES(null,'$fecha','$hora','$usuario','$medico','$estado','$observaciones')";
$resultado=$conexion->query($query);
if($resultado){
    header("Location: tabla_citas.php");
}
else
    echo "Insercción Fallida";
?>
