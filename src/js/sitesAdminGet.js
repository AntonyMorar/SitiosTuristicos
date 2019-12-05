$(document).ready(function () {
    obtenerSitiosAdmin();
});


function obtenerSitiosAdmin(){
    $.ajax(//Manda a llamar el script php
        {
            url: 'controllers/getSitesAdminController.php',//Ubicación del script
            dataType: 'html',//Tipo de datos de salida
            type: 'GET',//Forma en la que se mandaran losdatos de entradas
            success: obtenerSitiosAdminSuccess,//Función a realizar en caso de obtener los datos de salida de manera exitosa
            error: obtenerSitiosAdminErrors//Funcion a realizar en caso de error
        }
	);
    return true;
}

function obtenerSitiosAdminSuccess(result,status,xhr)
{
	$("#results").html(result);//Pega y muestra el código de html que se obtuvo de Ajax. Lo pega en el objeto con id="cuadro"
}

function obtenerSitiosAdminErrors(xhr,status,error)
{
	alert(xhr);//Muestra mensaje de alerta
}