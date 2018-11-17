<html>
    <head>
        <title>Guardar</title>
    </head>
    <body>
    <center>
        <?php
        $idMedico=$_REQUEST['idMedico'];
        
include("conexion.php");

$query="SELECT * FROM medicos WHERE idMedico=$idMedico";
$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();
?>
        <form action="modificar_medico_proceso.php?idMedico=<?php echo $row['idMedico'];?>" method="POST">
        
        
    <input type="text" REQUIRED name="identificacion" placeholder="Identificacion..." value="<?php echo $row['medidentificacion'];?>"/><p>
            <input type="text" name="nombre" placeholder="Nombre..." value="<?php echo $row['mednombres'];?>"/><p>
            <input type="text" name="apellido" placeholder="Apellidos..." value="<?php echo $row['medapellidos'];?>"/><p>
            <input type="text" name="especialidad" placeholder="Especialidad..." value="<?php echo $row['medEspecialidad'];?>"/><p>
            <input type="number" name="telefono" placeholder="Teléfono..." value="<?php echo $row['medtelefono'];?>"/><p>
                <input type="text" name="correo" placeholder="Correo..." value="<?php echo $row['medcorreo'];?>"/><p>
            <input type="date" name="nacimiento" placeholder="Nacimiento..." value="<?php echo $row['medNacimiento'];?>"/><p>
            <input type="submit" value="Aceptar"/>      
       
        </form>
    </center>
    
    </body>
</html>