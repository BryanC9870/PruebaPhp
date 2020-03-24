<?php 
    require_once '../../datosConexion.php';
        $connection = new mysqli($hostname, $username, $password, $database);
        if($connection->connect_errno)
            {
                echo "falla de conexion" . $connection->connect_errno . "<br>" . $connection->connect_error;
                exit();
            }
?>