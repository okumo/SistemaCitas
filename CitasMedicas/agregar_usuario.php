<html>
    <head>
        <title>MODULO PARA AGREGAR UN NUEVO USUARIO - ADMINISTRADOR</title>
    </head>
    <body>
    <center>
        <h2>
           Agregar Nuevo Usuario 
        </h2>
        <form action="operacion_guardar.php" method="POST">
            <input type="text" name="usuario" placeholder="Usuario..." value=""/><p>
            <input type="text" name="nombre" placeholder="Nombre..." value=""/><p>
            <input type="text" name="apellido" placeholder="Apellidos..." value=""/><p>
            <input type="password" name="password" placeholder="Contraseña..." value=""/><p>
            <input type="date" name="Fecnacimiento" placeholder="Nacimiento..." value=""/><p>
                <select name="sexo">
                    <option>Masculino</option>
                    <option>Femenino</option>
                </select><p>
            <input type="submit" value="Aceptar"/>     
        </form>
        
    </center>
    
    </body>
</html>

