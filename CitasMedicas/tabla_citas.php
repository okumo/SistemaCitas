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
                    <th colspan="1"><a href="agregar_cita.php">Nueva Cita</a></th>
                    <th colspan="8">Lista de Citas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Id de cita</td>
                     <td>Fecha de Cita</td>
                      <td>Hora de cita</td>
                       <td>Paciente</td>
                        <td>Medico</td>
                         <td>Estado de Cita</td>
                         <td>Observaciones</td>
                         <td colspan="2"><center>Operacion</center></td>
<?php
include("conexion.php");
$query="SELECT * FROM citas";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc()){
?>
                <tr>
                    <td><?php echo $row['idcita']; ?></td>
                    <td><?php echo $row['citfecha']; ?></td>
                    <td><?php echo $row['cithora']; ?></td>
                    <td><?php echo $row['citPaciente']; ?></td>
                    <td><?php echo $row['citMedico']; ?></td>
                    <td><?php echo $row['citestado']; ?></td>
                    <td><?php echo $row['citobservaciones']; ?></td>
                    <td><a href="modificar_cita.php?idcita=<?php echo $row['idcita'];?>">Modificar Cita</a></td>
                    <td><a href="eliminar_cita.php?idcita=<?php echo $row['idcita'];?>">Eliminar Cita</a></td>
                </tr>
                <?php
                    }
                    ?>
            </tbody>
        </table>
    </center>
    
    </body>
</html>

