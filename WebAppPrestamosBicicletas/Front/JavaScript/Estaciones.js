

function guardarEstacion(){
    if($('#btnGuardar').text() == "Guardar"){
        $('#frmAdmin').submit(function(event)
        {
            var action = pathAplication+"estaciones/insertar";
            $(this).attr('action', action);
        });
    }
    else if($('#btnGuardar').text() == "Actualizar"){
        $('#frmAdmin').submit(function(event)
        {
            var action = pathAplication+"estaciones/actualizar";
            $(this).attr('action', action);
        });
    }  
    return true;
    
}