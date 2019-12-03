$(document).ready(function () {
    obtenerUser();
});

function obtenerUser(){
    var id = $.urlParam('id');
    $.ajax(//Manda a llamar el script php
        {
            url: 'controllers/getUserController.php',//Ubicación del script
            data: {id: id},
            dataType: 'html',//Tipo de datos de salida
            type: 'GET',//Forma en la que se mandaran losdatos de entradas
            success: obtenerUserSuccess,//Función a realizar en caso de obtener los datos de salida de manera exitosa
            error: obtenerUserErrors//Funcion a realizar en caso de error
        }
	);
    return true;
}

function obtenerUserSuccess(result,status,xhr)
{
    $("#results").html(result);//Pega y muestra el código de html que se obtuvo de Ajax. Lo pega en el objeto con id="cuadro"
}

function obtenerUserErrors(xhr,status,error)
{
	alert(xhr);//Muestra mensaje de alerta
}

$.urlParam = function(name){
	var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	return results[1] || 0;
}