<html>
    <head>
        <title>MODULO PARA AGREGAR MEDICO</title>
    </head>
    <body>
    <center>
        <h2>
           Agregar Nuevo  Medico 
        </h2>
        <form action="operacion_guardar_medico.php" method="POST">
            <input type="text" name="identificacion" placeholder="Identificacion..." value=""/><p>
            <input type="text" name="nombre" placeholder="Nombre..." value=""/><p>
            <input type="text" name="apellido" placeholder="Apellidos..." value=""/><p>
            <input type="text" name="especialidad" placeholder="Especialidad..." value=""/><p>
            <input type="number" name="telefono" placeholder="Teléfono..." value=""/><p>
                <input type="text" name="correo" placeholder="Correo..." value=""/><p>
            <input type="date" name="nacimiento" placeholder="Nacimiento..." value=""/><p>
            <input type="submit" value="Aceptar"/>     
        </form>
        
    </center>
    
    </body>
</html>

