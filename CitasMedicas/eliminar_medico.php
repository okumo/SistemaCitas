<?php
        $idMedico=$_REQUEST['idMedico'];
        
include("conexion.php");

$query="DELETE FROM medicos WHERE idMedico=$idMedico";
$resultado=$conexion->query($query);
if($resultado){
    header("Location: tabla_medicos.php");
}
else{
    echo "Insección no exitosa";
}
?>