<!doctype html>
    <html>
        <?php
            
            session_start();
            if(isset($_SESSION['usuario'])&& isset($_SESSION['password'])&& isset ($_SESSION ['Rol']))
                {
                    $_SESSION['usuario'];
                    $_SESSION ['Rol']; 
                }
                else
                    {
                        session_destroy();
                        header('location:index.html');
                    }
        ?>
        <head>
            <meta charset="UTF-8">
            <title>Welcome</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
            <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <link href="css/jquery.dataTables.min.css" rel="stylesheet">  
            <link href="css/buttons.dataTables.min.css" rel="stylesheet">  
            <link href="css/datatables.min.css" rel="stylesheet">
            <link href="css/dataTables.bootstrap.min.css" rel="stylesheet"> 
            
            <?php

                require_once ('librerias.php');

            ?>

            <link href="css/sweetalert.css" rel="stylesheet"> 
          
            <style>
                header 
                {
                background-color: #666;
                padding: 30px;
                text-align: center;
                font-size: 35px;
                color: white;
                }
            </style>

        </head>
        <body>
                <div class="container-fluid">
                <header>
                <h2>Articulos</h2>
                </header>
                        <?php
                                include('navbar.php');
                        ?>
                        <div id="Container" class="home-section bg-white paddingbot-60">
                        
                        </div>
                        <?php 
                               include('footer.php');
                        ?>       
                </div>
            <script src="js/Peticiones.js"></script>
            <script src="js/Validaciones.js"></script>
        </body>
</html>