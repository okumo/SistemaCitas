<html>
    <head>
        <title>
            MODULO DEL ADMINISTRADOR
        </title>
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
        <footer>
            
        </footer>
    </body>
</html>