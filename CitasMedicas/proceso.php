<?php
session_start();
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
include("conexion.php");

$proceso=$conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario' AND pass='$contraseña'");
if($resultado= mysqli_fetch_array($proceso)){
    $_SESSION['u_usuario']=$usuario;
    if($usuario='admin'){
  header("Location: modulo_admi.php");
    }
    else{
        header("Location: modulo_usuario.php");
    }
}
else{
    echo "Datos incorrectos";
   header("Location: index.php");

}

?>
