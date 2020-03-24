<?php 

$nameProcess = $_POST['nameProcess'];

switch($nameProcess) {
    
    case 'IngresarArticulo': 

            require_once 'ConnectionBd.php';

                $sqlprepare = $connection->prepare("INSERT INTO articulos (Nombre, Contenido, Autor, Fecha_creacion) VALUES (?, ?, ?, ?)");
                $sqlprepare->bind_param("ssss", $Nombre, $Contenido, $Autor, $Fecha_creacion);

                // set parameters and execute
                $Nombre= $_POST['Nombre'];
                $Contenido = $_POST['Contenido'];        
                $Autor = $_POST['Autor'];        
                $Fecha_creacion = $_POST['Fecha_creacion'];
                $sqlprepare->execute();

                echo "Nuevo articulo publicado";

                $sqlprepare->close();
                $connection->close(); 


    break;



    case 'TraerArticulo':

             require_once 'ConnectionBd.php';

                    
                            $idArticulo= $_POST['idArticulo'];
                        
                            $SqlQuery="SELECT * FROM `articulos` WHERE `idArticulo`='".$idArticulo."'";
                            // $query2="SELECT HoraIngreso FROM `registros` WHERE `IDRegistro`='".$IDRegistro."'";
                            // $query3="SELECT HoraSalida FROM `registros` WHERE `IDRegistro`='".$IDRegistro."'";
                            // echo $query2;
                            // echo $query3;
                            $SearchArticulos=$connection->query($SqlQuery);
                            $Vector= array();
                        
                            while($row= $SearchArticulos->fetch_array())

                                {

                                    $Vector[]=$row; 

                                }

                            echo json_encode($Vector);

    break;



    case 'UpdateArticulo': 

        require_once 'ConnectionBd.php';

       /* $idArticulo= $_POST['idArticulo'];
        $Nombre= $_POST['Nombre'];
        $Contenido = $_POST['Contenido'];        
        $Autor = $_POST['Autor'];        
        $Fecha_creacion = $_POST['Fecha_creacion'];


          $sql = "UPDATE articulos SET Contenido = '".$Contenido."', Autor = '".$Autor."', Fecha_creacion = '".$Fecha_creacion."' WHERE Nombre = '".$Nombre."'";

          if ($connection->query($sql) === TRUE) {
              echo "Record updated successfully";
              echo "<script>console.log('exitoooooooooooooooooo:' );</script>";
          } else {
              echo "Error updating record: " . $connection->error;
              echo "<script>console.log('fallooooooooooooooo:' );</script>";
          }

          $connection->close(); */
 

             $sqlprepared = $connection->prepare("UPDATE articulos SET Nombre = ?, Contenido = ?, Autor = ?,  Fecha_creacion = ?  WHERE idArticulo = ?");
             $sqlprepared->bind_param("ssssi", $Nombre, $Contenido, $Autor, $Fecha_creacion, $idArticulo);

              // set parameters and execute

              $idArticulo= $_POST['idArticulo'];
              $Nombre= $_POST['Nombre'];
              $Contenido = $_POST['Contenido'];        
              $Autor = $_POST['Autor'];        
              $Fecha_creacion = $_POST['Fecha_creacion'];
              $sqlprepared->execute();

              echo "Nuevo articulo publicado";

              $sqlprepared->close();
              $connection->close(); 


    break;
}