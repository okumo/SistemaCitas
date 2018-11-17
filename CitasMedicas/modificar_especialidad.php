
    <head>
        <title>Guardar Cita</title>
        <header>
            <h3>Sesión activa - Bienvenido Administrador</h3>
            <h3 style='text-align:right'><a href='cerrar_sesion.php'>Cerrar sesión</a></h3>
            
        </header>
        
       
<?php
$idcita=$_REQUEST['idcita'];
        try{
	$conexion = new PDO('mysql:host=localhost;dbname=citasmedicas','root','');
}catch(PDOException $e){
	echo "Error: ". $e->getMessage();
}
//SELECT PARA MEDICOS
$medicos = $conexion -> prepare("SELECT * FROM medicos");
$medicos ->execute();
$medicos = $medicos ->fetchAll();
//SELECT PARA PACIENTES
$usuario = $conexion -> prepare("SELECT * FROM usuarios where id not in (1)");
$usuario ->execute();
$usuario = $usuario ->fetchAll();
//SELECT PARA CITAS
$citas=$conexion->prepare("SELECT * FROM citas where idcita=$idcita");
$citas->execute();
$citas=$citas->fetchAll();
?>
    </head>
    <body><nav>
            <ul>
                <li><a href="modulo_admi.php">Inicio</a></li>
                <li><a href="tabla_citas.php">Citas</a></li>
                <li><a href="tabla_medicos.php">Medicos</a></li>
                <li><a href="tabla_usuarios.php">Usuarios</a></li>
                <li><a href="tabla_especialidades">Especialidades</a></li>
            </ul>
            
        </nav>
    <center>
        
        <form action="modificar_cita_proceso.php?idcita=<?php echo $idcita;?>" method="POST">
            <label>Fecha:</label>
            <input type="date" name="fecha" placeholder="Fecha:" required value="<?php echo $row['fecha'];?>"/><p>
            <label>Hora:</label>
            <input type="time" name="hora" value="<?php echo $row['hora'];?>" max="20:30" min="08:00" step="60" required ><p>
            <label>Paciente:</label>
            <select name="usuario" class="mayusculas" required> 
	            <?php foreach ($usuario as $sql1): ?>
			<?php echo "<option value='". $sql1['nombres']. "'>". $sql1['nombres']." ".$sql1['apellidos']."</option>"; ?>
				<?php endforeach; ?>
            </select><p>
            <label>Medicos:</label>
            <select name="medico" class="mayusculas" required> 
	                        <?php foreach ($medicos as $Sql): ?>
<?php echo "<option value='". $Sql['mednombres']. "'>". $Sql['mednombres']." ". $Sql['medapellidos']. "</option>"; ?>
		<?php endforeach; ?>
                        </select><p>
                        
                        <label REQUIRED>Estado:</label>
                        <select name="estado">
                        	<option value="asignado">Asignado</option>
                        	<option value="atendido">Atendido</option>                    	
                        </select><p>
               <label>Observaciones:</label><p>
                        <textarea placeholder="Observacion:" name="observaciones" REQUIRED value="<?php echo $citas['observaciones'];?>"></textarea><p>
                <input type="submit" name="enviar" value="Guardar Cambios"> 
       <input type="button" onclick="location.href='tabla_citas.php'" value="Cancelar" name="boton" />
        </form>
    </center>
    
    </body>
</html>