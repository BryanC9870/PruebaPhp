// Función para inserción de artículos

function ProcesarArticulo() 
    {
       
       
            var Nombre = $('#nombre').val();
            var Contenido = $('#contenido').val();
            var Autor = $('#nombre-autor').val();
            var Fecha_creacion = $('#CajaNumero3').val();

            if(Nombre == "" || Contenido == "")
                {
                    swal("ERROR", "Se encontraron campos vacíos", "error");
                }
            else
                {
                    var parametros =
                    {
                    
                    "Nombre": Nombre,
                    "Contenido": Contenido,
                    "Autor": Autor,
                    "Fecha_creacion": Fecha_creacion,
                    "nameProcess": "IngresarArticulo",
                
                    };

                    $.ajax({
                        data: parametros,
                        url: 'php/funciones.php',
                        type: 'POST',
                        
                        beforeSend: function () {
                            $("#Alert").html("Procesando...");
                        },
                        success: function(response)
                        {
                            console.log(response);
                            swal("Confirmación", "Regristro Exitoso", "success");
                            $("#Alert").html(response);
                        }
                    });
                }

    }

// Función para inserción de artículos //



// Actualización y eliminación de articulos



function CargarArticulos(idArticulo)
    {  
            
            var CargarArticulo = idArticulo;
            var Process="TraerArticulo";
            var Parametros={"nameProcess":Process,"idArticulo":CargarArticulo};

            $.ajax({

                data: Parametros,
                type: 'POST',
                url: 'php/funciones.php',
                beforeSend: function(){
                 // $('#FormularioUpdate').html('Espere por favor...');
                   
                },
                success: function(response)
                { 
                            var Datos = JSON.parse(response);	
                            document.getElementById("articuloid").value = Datos[0].idArticulo;
                            document.getElementById("articulonombre").value = Datos[0].Nombre;
                            document.getElementById("contenidoarticulo").value = Datos[0].Contenido;
                            document.getElementById("nombreautor").value = Datos[0].Autor;
                            document.getElementById("Cajadate").value = Datos[0].Fecha_creacion;
                
                }
            });
    } 

//////////////////////////////////////////////////



    ///////////////////// Cargar articulos

    function ActualizarArticulo()

   
    {   
        
        //console.log("hola mundo");
        var idArticulos  = $('#articuloid').val();
        var Nombres = $('#articulonombre').val();
        var Contenidos = $('#contenidoarticulo').val();
        var Autores = $('#nombreautor').val();
        var Fechas_creaciones = $('#Cajadate').val();

        if(Nombres == "" || Contenidos == "")
            {
                swal("ERROR", "Se encontraron campos vacíos", "error");
            }
        else
            {
                var parameters =
                {
                
                "idArticulo": idArticulos,
                "Nombre": Nombres,
                "Contenido": Contenidos,
                "Autor": Autores,
                "Fecha_creacion": Fechas_creaciones,
                "nameProcess": "UpdateArticulo",
            
                };

                $.ajax({
                    data: parameters,
                    url: 'php/funciones.php',
                    type: 'POST',
                    
                    beforeSend: function () {
                        $("#Alert").html("Procesando...");
                    },
                    success: function(response)
                    {
                        console.log(response);
                        swal("Confirmación", "Actualización Exitosa", "success");
                        $("#Alert").html(response);
                    }
                });
            }

    }

/*

    function BorrarArticulos(IDRegistro)

    {
    
        swal({   

                    title: "¿Estas seguro de eliminar el registro?",   
                    text: "Este paso marcará el resto de tu vida...",   
                    type: "warning",   
                    showCancelButton: true,   
                    confirmButtonColor: "#DD6B55",   
                    confirmButtonText: "¡OK!",   
                    cancelButtonText: "Cancelar",   
                    closeOnConfirm: false,   
                    closeOnCancel: true }, 

                    function(isConfirm)
                    
                    {   
                          if (isConfirm) 
                                
                                {


                                    var parametros = {

                                        "IDRegistro" : IDRegistro,
                                        "NombreProceso20": "DeleteRegistro"
                        
                                    };


                                    $.ajax({

                                        data: parametros,
                                        url: '../contenido/php/funcionRU.php',
                                        type: 'POST',
                            
                                            beforeSend: function () 
                                                {
                                                    $("#Resultado").html("Procesando, espere por favor...");
                                                },
                                            success: function (response) 
                                            
                                                {
                                                    //LimpiarCajas();
                                                    $("#Resultado").html(response);
                                                    var url="../Modulos/Registros/MostrarRegistros.php" 
                                                    cargar(url,"TablaRecarga"); 
                            
                                                }
                                        });
                                      
                                } 
                          
                          else 

                                {     
                                
                                } 
              });


       
    }


*/


// Cerrar Sesión

function CerrarSesion()
    {

        swal({   

            title: "Confirmación",   
            text: "Estas seguro de cerrar sesión?",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "¡OK!",   
            cancelButtonText: "Cancelar",   
            closeOnConfirm: false,   
            closeOnCancel: false }, 

            function(isConfirm)
                {   
                    if (isConfirm) 
                        {    
                            window.location.href = "index.html";     
                        } 
                    else 
                        {     
                            window.location.href = "welcome.php";  
                        } 
                });
    }








          
         