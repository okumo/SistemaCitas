<?php
        $idcita=$_REQUEST['idcita'];
        
include("conexion.php");

$query="DELETE FROM citas WHERE idcita=$idcita";
$resultado=$conexion->query($query);
if($resultado){
    header("Location: tabla_citas.php");
}
else{
    echo "Proceso no exitoso";
    ?><input type="button" onclick="location.href='tabla_citas.php'" value="Volver atrás" name="boton" /><?php
}
?>