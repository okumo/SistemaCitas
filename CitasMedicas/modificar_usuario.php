<html>
    <head>
        <title>Guardar</title>
    </head>
    <body>
    <center>
        <?php
        $id=$_REQUEST['id'];
        
include("conexion.php");

$query="SELECT * FROM usuarios WHERE id=$id";
$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();
?>
        <form action="modificar_usuario_proceso.php?id=<?php echo $row['id'];?>" method="POST">
        
        
            <input type="text" REQUIRED name="usuario" placeholder="Usuario..." value="<?php echo $row['usuario'];?>"/><p>
            <input type="text" REQUIRED  name="nombre" placeholder="Nombre..." value="<?php echo $row['nombres'];?>"/><p>
            <input type="text"  REQUIRED name="apellido" placeholder="Apellidos..." value="<?php echo $row['apellidos'];?>"/><p>
            <input type="password"  REQUIRED name="password" placeholder="Contraseña..." value="<?php echo $row['pass'];?>"/><p>
            <input type="date" REQUIRED  name="Fecnacimiento" placeholder="Nacimiento..." value="<?php echo $row['pacFechaNacimiento'];?>"/><p>
             <select REQUIRED name="sexo" >
                 <option>Masculino</option>
                    <option>Femenino</option>
                </select><p>   
            <input type="submit" value="Aceptar"/>     
       
        </form>
    </center>
    
    </body>
</html>