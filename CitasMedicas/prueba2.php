<html>
    <head>
        <title>
            Sesion
        </title>
            <?php
        session_start();
            if(isset($_SESSION['u_usuario'])){
            echo "ERES USUARIO";
            echo "<a href='cerrar_sesion.php'>Cerrar sesión</a>";
        }
        else{
            header("Location: index.php");
        }
                 ?>
    </head>
    <body>
        
    </body>
</html>