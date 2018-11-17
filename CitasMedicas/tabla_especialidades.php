<html>
    <head></head><header>
            <h3>Sesión activa - Bienvenido Administrador</h3>
            <h3 style='text-align:right'><a href='cerrar_sesion.php'>Cerrar sesión</a></h3>
            
        </header>
    <body>
         <nav>
            <ul>
                <li><a href="modulo_admi.php">Inicio</a></li>
                <li><a href="tabla_citas.php">Citas</a></li>
                <li><a href="tabla_medicos.php">Medicos</a></li>
                <li><a href="tabla_usuarios.php">Usuarios</a></li>
                <li><a href="tabla_especialidades.php">Especialidades</a></li>
            </ul>
            
        </nav>
    <center>
        <table border="1">
            <thead>
                <tr>
                    <th colspan="1"><a href="agregar_especialidad.php">Nueva Especialidad</a></th>
                    <th colspan="8">Lista de Especialidades</th>
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
$query="SELECT * FROM especialidades";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc()){
?>
                <tr>
                    <td><?php echo $row['idespecialidad']; ?></td>
                    <td><?php echo $row['espNombre']; ?></td>
                    
                    <td><a href="modificar_especialidad.php?idespecialidad=<?php echo $row['idespecialidad'];?>">Modificar</a></td>
                    <td><a href="eliminar_especialidad.php?idespecialidad=<?php echo $row['idespecialidad'];?>">Eliminar</a></td>
                </tr>
                <?php
                    }
                    ?>
            </tbody>
        </table>
    </center>
    
    </body>
</html>

