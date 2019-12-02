$(document).ready(function () {
    obtenerSite();
});


function obtenerSite(){
    var idParam = $.urlParam('id');
    $.ajax(//Manda a llamar el script php
        {
            url: 'controllers/getSiteController.php?',//Ubicación del script
            data: {id: idParam},
            dataType: 'html',//Tipo de datos de salida
            type: 'GET',//Forma en la que se mandaran losdatos de entradas
            success: obtenerSiteSuccess,//Función a realizar en caso de obtener los datos de salida de manera exitosa
            error: obtenerSiteErrors//Funcion a realizar en caso de error
        }
	);
    return true;
}

function obtenerOpiniones(){
    var idParam = $.urlParam('id');
    $.ajax(//Manda a llamar el script php
        {
            url: 'controllers/getOpinionsController.php?',//Ubicación del script
            data: {id: idParam},
            dataType: 'html',//Tipo de datos de salida
            type: 'GET',//Forma en la que se mandaran losdatos de entradas
            success: obtenerOpinionesSuccess,//Función a realizar en caso de obtener los datos de salida de manera exitosa
            error: obtenerOpinionesErrors//Funcion a realizar en caso de error
        }
	);
    return true;
}

function obtenerSiteSuccess(result,status,xhr)
{
    $("#results").html(result);//Pega y muestra el código de html que se obtuvo de Ajax. Lo pega en el objeto con id="cuadro"
    obtenerOpiniones();
}

function obtenerOpinionesSuccess(result,status,xhr)
{
	$("#resultsOp").html(result);//Pega y muestra el código de html que se obtuvo de Ajax. Lo pega en el objeto con id="cuadro"
}

function obtenerSiteErrors(xhr,status,error)
{
	alert(xhr);//Muestra mensaje de alerta
}

function obtenerOpinionesErrors(xhr,status,error)
{
	alert(xhr);//Muestra mensaje de alerta
}

$.urlParam = function(name){
	var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	return results[1] || 0;
}