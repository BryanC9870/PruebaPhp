function callForms(Trae)
    {
        switch(Trae)
        {

            case 1: 

            ruta="Modulos/Insert/FormIngresar.php"
            TraerFormularios(ruta);

            break;

            case 2: 


            ruta="Modulos/Show/ShowArticulos.php"
            TraerFormularios(ruta);

            break;

            case 3: 


            ruta="Modulos/Update/FormUpdate.php"
            TraerFormularios(ruta);

            break;


        }


    }


function TraerFormularios(ruta)
    {
        var parametros="";
        $.ajax({
            type: 'POST',
            url: ruta,
            beforeSend: function()
            {
                $('#Container').html('');
            },
            success: function(response)
            {
                $('#Container').html(response);
            }
        });
    }