<?php
        $id=$_REQUEST['id'];
        
include("conexion.php");

$query="DELETE FROM usuarios WHERE id=$id";
$resultado=$conexion->query($query);
if($resultado){
    header("Location: tabla_usuarios.php");
}
else{
    echo "Insección no exitosa";
}
?>