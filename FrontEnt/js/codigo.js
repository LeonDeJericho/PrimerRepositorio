$(document).on("ready",listo);/**on es cuando*/
function listo()
{

	$("#botonAjax").on("click",prueba);
}
function prueba()
{ 

	var idPersonaAjax = $("#idPersonaAjax").val();
 	var metodo = "obtenerPersona";
	$.ajax({

        data:  "",
        url:   'Controlador/prueba.php?metodo='+metodo+'& idPersona='+idPersonaAjax,
        type:  'get',
        beforeSend: function () {
           $("#resultadoAjax").html("Procesando, espere por favor...");
        },
        success:  function (response) {
            $("#resultadoAjax").html(response);
        }
    });
}