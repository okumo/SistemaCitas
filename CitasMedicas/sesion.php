
            <?php
        session_start();
            if(isset($_SESSION['u_usuario'])){
            
        }
        else{
            header("Location: index.php");
        }
                 ?>
