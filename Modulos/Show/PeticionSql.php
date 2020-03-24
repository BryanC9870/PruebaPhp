<?php
    require_once('ConnectionBd.php');
    $SqlQuery = "SELECT articulos.idArticulo, articulos.Nombre, articulos.Contenido, articulos.Autor, articulos.Fecha_creacion  FROM articulos  ORDER BY idArticulo";
    if ($Result = $connection->query($SqlQuery)) 
        {                                        
        /* SE PODRIA PROBAR CON ->fetch_array(), para traerlo como objeto y no como array*/    
        while ($row = $Result->fetch_array())                                                                                                    
            {
                echo '<tr>';
                echo '<td>' . mb_convert_encoding($row['idArticulo'], "UTF-8") . '</td>';
                echo '<td>' . mb_convert_encoding($row['Nombre'], "UTF-8") . '</td>';
                echo '<td>' . mb_convert_encoding($row['Contenido'], "UTF-8") . '</td>';
                echo '<td>' . mb_convert_encoding($row['Autor'], "UTF-8") . '</td>';
                echo '<td>' . mb_convert_encoding($row['Fecha_creacion'], "UTF-8") . '</td>';
                echo '<td><button id="ActualizarArticulo" class="btn btn-warning" onclick="callForms(3); CargarArticulos(' . mb_convert_encoding($row['idArticulo'], "UTF-8") . ');" >Actualizar</button></td>';
                echo '<td><button id="EliminarArticulo" class="btn btn-danger" onclick="BorrarArticulos(' . mb_convert_encoding($row['idArticulo'], "UTF-8") . ');" >Eliminar</button></td>';
            }
        }
?>

