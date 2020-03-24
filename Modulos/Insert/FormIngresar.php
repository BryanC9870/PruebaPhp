<!doctype html>
    <html>
        <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" />
        <script src="js/bootstrap-datetimepicker.js"></script>
        <script src="js/bootstrap-datetimepicker.min.js"></script>
        <script src="js/ActivarDateTimes.js"></script>
       
            <script>

                $('#datetimepickerb').datetimepicker({
                    format: 'YYYY-MM-DD'       
                });

               
            </script>
        </head>
            <div class="container">
                <div class="card border-primary mb-3">
                    <div class="card-header">
                        <h2>Ingresar Artículo</h2>
                    </div>
                            <div class="card-body text-dark">
                                <form class="needs-validation" method="post" novalidate>
                                    <div class="form-group">
                                        <label for="uname">Nombre del Articulo</label>
                                            <input type="text" class="form-control" id="nombre" placeholder="Ingresar Nombre" name="nombre" required>
                                            <div class="valid-feedback">Validar.</div>
                                            <div class="invalid-feefback">Por favor ingrese un nombre valido.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Content">Contenido</label>
                                        <textarea class="form-control" id="contenido" rows="3" placeholder="Contenido del artículo" required></textarea>
                                        <div class="valid-feedback">Validar</div>
                                        <div class="invalid-feedback">Por favor ingresar un contenido valido.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="autor">Nombre del autor</label>
                                        <input type="text" class="form-control" id="nombre-autor" placeholder="nombre del autor" name="nombre-autor">
                                        <div class="valid-feedback">Validar</div>
                                        <div class="invalid-feedback">Por favor ingresar un autor valido</div>
                                    </div>
                                                    
                                    <div class="form-group">
                                        <label for="FechaSalida">Fecha de publicación</label>
                                            <div class='input-group date' id='datetimepickerb' >
                                                <input type="datetime" class="form-control" name="CajaNumero3" id="CajaNumero3" placeholder="Fecha de publicación" />
                                                        <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                            </div>
                                    </div>
                                    <div class="form-group">              
                                        <button class="btn btn-primary " type="button" onclick="ProcesarArticulo();">Ingresar Artículo</button>
                                    </div>
                            </form>
                        <div style="padding:12px">
                            <span id="Alert" style="padding:20px;"></span>
                        </div>
                    </div>
                </div>
            </div>

            <br><br>