<?php
    session_start();
?>
<script src="js/ListarTablas.js"></script>
<script src="js/Peticiones.js"></script>
<script src="js/CallForms.js"></script>
    <div class="col-sm-13" style="padding:12px">
        <div class="row" style="padding:25px" id="TablaRecarga">
            <h1 class="page-header">Actualizar Artículos</h1>
                <!--TABLA RESPONSIVA--> 
                    <div class="bs-example" data-example-id="simple-responsive-table">
                        <div class="table-responsive" padding>
                            <table class="cell-border row-border" id="tabla">
                                <br>
                                    <br>
                                        <br>
                                            <thead>
                                                    <tr>
                                                        <th>ID ARTÍCULO</th>
                                                        <th>NOMBRES DEL ARTÍCULO</th>
                                                        <th>CONTENIDO</th>
                                                        <th>NOMBRES Y APELLIDOS DEL AUTOR</th>
                                                        <th>FECHA DE PUBLICACIÓN</th>
                                                        <th>ACTUALIZAR</th>
                                                        <th>ELIMINAR</th>
                                                    </tr>
                                            </thead>
                                        <tbody id="ResultadoTabla">
                                        <?php
                                            include('PeticionSql.php');
                                        ?>
                                    </tbody>
                            </table>
                    </div>
                </div>
        </div>
    </div>