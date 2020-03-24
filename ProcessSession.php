<hmtl>

<head>
        <script src="js/sweetalert.js"></script>
        <script src="js/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/sweetalert.css">

</head>

    <?php
        require_once 'ConnectionBd.php';
        $senduser = strtoupper($_POST['input-name']);
        $sendpassword = $_POST['input-password'];
        $passwordencrypted = SHA1($sendpassword); 
        
    try{

        $sqlcommand = $connection->prepare("SELECT * FROM usuarios WHERE usuario = ? AND password = ?");

        $sqlcommand->bind_param("is", $senduser,$passwordencrypted);
        $sqlcommand->execute();
        $sqlcommand->bind_result($iduser,$nameuser,$password,$rol,$estado);
        $sqlcommand->fetch();
 
        if($iduser == $senduser && $password == $passwordencrypted && $estado == "ACTIVO")
        {
        

         session_destroy();
         session_start();

         $_SESSION ['usuario']=$iduser;
         $_SESSION ['NombreUsuario']=$nameuser;
         $_SESSION ['password']=$password;
         $_SESSION ['Rol']=$rol;

         $iduser = $_SESSION ['usuario'];
         $nameuser = $_SESSION ['NombreUsuario'];

         header('location:welcome.php');

        }
       
        else
        {
            ?>

            <script>
                    swal({ 
                            
                            title: "Error",   
                            text: "Usuario o contraseña incorrectos!",   
                            type: "error",     
                            confirmButtonColor: "#DD6B55",   
                            confirmButtonText: "¡OK!",    
                            closeOnConfirm: false}, 
                        
                            function(isConfirm)

                            {   
                                    if (isConfirm) 

                                    {    
                                        window.location.href = "index.html";  
                                            
                                    }

                            });
            </script>

        <?php
        }
        
       $sqlcommand->close();
            
    }
    catch(Exception $e) 
    {
        echo 'Error: ',  $e->getMessage(), "\n";
    }
        
        /*$sqlcommand = "SELECT usuario FROM usuarios WHERE usuario='$senduser' AND password='$passwordencrypted' LIMIT 1";
        
        if(mysqli_num_rows($sqlcommand)===1) {

            echo "<br> EL USUARIO Y LA CONTRASEÑA ES CORRECTO";  
            print "<br> EL USUARIO Y LA CONTRASEÑA ES CORRECTO";  

           
            session_destroy();
            session_start();

            $_SESSION ['usuario']=$row[0];
            $_SESSION ['NombreUsuario']=$row[1];
            $_SESSION ['password']=$row[2];
            $_SESSION ['Rol']=$row[4];

            $user = $_SESSION ['usuario'];
            $names = $_SESSION ['NombreUsuario'];

            header('location:welcome.php');
        }
        //"select * from usuarios where usuario='".$senduser."' AND estado='ACTIVO'";
       
           /* if ($result = $connection->query($sqlcommand) === TRUE) {

                $result = $connection->query($sqlcommand);
                {
                    $row = $result->fetch_row();
                }


                if($row[0] == $senduser && $row[2] == $passwordencrypted)
                {
                    echo "<br> EL USUARIO Y LA CONTRASEÑA ES CORRECTO";  
                    print "<br> EL USUARIO Y LA CONTRASEÑA ES CORRECTO";  
    
                   
                    session_destroy();
                    session_start();
    
                    $_SESSION ['usuario']=$row[0];
                    $_SESSION ['NombreUsuario']=$row[1];
                    $_SESSION ['password']=$row[2];
                    $_SESSION ['Rol']=$row[4];
    
                    $user = $_SESSION ['usuario'];
                    $names = $_SESSION ['NombreUsuario'];
    
                    header('location:welcome.php');
                    
                    
                }
    
            } 
            
           
        
        else
            {

                //header('location:index.html');

               ?>

                <script>
                        swal({ 
                                
                                title: "Error",   
                                text: "Usuario o contraseña incorrectos!",   
                                type: "error",     
                                confirmButtonColor: "#DD6B55",   
                                confirmButtonText: "¡OK!",    
                                closeOnConfirm: false}, 
                            
                                function(isConfirm)

                                {   
                                        if (isConfirm) 

                                        {    
                                            window.location.href = "index.html";  
                                                
                                        }

                                });
                </script>

            <?php

            //echo "<br> EL USUARIO Y LA CONTRASEÑA ES INCORRECTO";  
                //print "<br> EL USUARIO Y LA CONTRASEÑA ES INCORRECTO";  

            } */
    ?>

</html>