<html>
    <head>
        <?php
include'sesion.php';
?>
    </head>
    <body>
         <header>
            <h3>Sesión activa - Bienvenido</h3>
            <h3 style='text-align:right'><a href='cerrar_sesion.php'>Cerrar sesión</a></h3>
            
        </header>
        <nav>
            <ul>
                <li><a href="modulo_admi.php">Inicio</a></li>
                <li><a href="tabla_citas.php">Citas</a></li>
                <li><a href="tabla_medicos.php">Medicos</a></li>
                <li><a href="tabla_usuarios.php">Usuarios</a></li>
                <li><a href="tabla_especialidades">Especialidades</a></li>
            </ul>
            
        </nav>
    <center>
        <table border="1">
            <thead>
                <tr>
                    <th colspan="1"><a href="agregar_medico.php">Nuevo</a></th>
                    <th colspan="8">Lista de Medicos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Id</td>
                     <td>Identificacion</td>
                      <td>Nombres</td>
                       <td>Apellidos</td>
                        <td>Especialidad</td>
                         <td>Telefono</td>
                         <td>Correo</td>
                         <td>Nacimiento</td>
                         <td colspan="2"><center>Operacion</center></td>
<?php
include("conexion.php");
$query="SELECT * FROM medicos";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc()){
?>
                <tr>
                    <td><?php echo $row['idMedico']; ?></td>
                    <td><?php echo $row['medidentificacion']; ?></td>
                    <td><?php echo $row['mednombres']; ?></td>
                    <td><?php echo $row['medapellidos']; ?></td>
                    <td><?php echo $row['medEspecialidad']; ?></td>
                    <td><?php echo $row['medtelefono']; ?></td>
                    <td><?php echo $row['medcorreo']; ?></td>
                    <td><?php echo $row['medNacimiento']; ?></td>
                    <td><a href="modificar_medico.php?idMedico=<?php echo $row['idMedico'];?>">Modificar</a></td>
                    <td><a href="eliminar_medico.php?idMedico=<?php echo $row['idMedico'];?>">Eliminar</a></td>
                </tr>
                <?php
                    }
                    ?>
            </tbody>
        </table>
    </center>
    
    </body>
</html>

