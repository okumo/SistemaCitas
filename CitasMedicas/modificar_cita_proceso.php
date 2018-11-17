<?php
include ("conexion.php");
$idcita=$_REQUEST['idcita'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$usuario=$_POST['usuario'];
$medico=$_POST['medico'];
$estado=$_POST['estado'];
$observaciones=$_POST['observaciones'];

$query="UPDATE citas set citfecha='$fecha', cithora='$hora', citPaciente='$usuario', citMedico='$medico', citestado='$estado', citobservaciones='$observaciones' WHERE idcita='$idcita'";
$resultado=$conexion->query($query);
if($resultado){
    header("Location: tabla_citaS.php");
}
else
    echo "Modificación Fallida";
?>
