<html>
    <head></head><header>
            <h3>Sesión activa - Bienvenido</h3>
            <h3 style='text-align:right'><a href='cerrar_sesion.php'>Cerrar sesión</a></h3>
            
        </header>
    <body>
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
                    <th colspan="1"><a href="agregar_usuario.php">Nuevo</a></th>
                    <th colspan="8">Lista de Usuarios</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Id</td>
                     <td>Usuario</td>
                      <td>Nombres</td>
                       <td>Apellidos</td>
                        <td>Fecha de Nacimiento</td>
                         <td>Sexo</td>
                         <td>Contraseña</td>
                         <td colspan="2"><center>Operacion</center></td>
<?php
include("conexion.php");
$query="SELECT * FROM usuarios";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc()){
?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['usuario']; ?></td>
                    <td><?php echo $row['nombres']; ?></td>
                    <td><?php echo $row['apellidos']; ?></td>
                    <td><?php echo $row['pacFechaNacimiento']; ?></td>
                    <td><?php echo $row['pacSexo']; ?></td>
                    <td><?php echo $row['pass']; ?></td>
                    <td><a href="modificar_usuario.php?id=<?php echo $row['id'];?>">Modificar</a></td>
                    <td><a href="eliminar_usuario.php?id=<?php echo $row['id'];?>">Eliminar</a></td>
                </tr>
                <?php
                    }
                    ?>
            </tbody>
        </table>
    </center>
    
    </body>
</html>

