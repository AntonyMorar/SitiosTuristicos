$(document).ready(function () {
    obtenerUsuariosAdmin();
});


function obtenerUsuariosAdmin(){
    $.ajax(//Manda a llamar el script php
        {
            url: 'controllers/getUsersAdminController.php',//Ubicación del script
            dataType: 'html',//Tipo de datos de salida
            type: 'GET',//Forma en la que se mandaran losdatos de entradas
            success: obtenerUsuariosAdminSuccess,//Función a realizar en caso de obtener los datos de salida de manera exitosa
            error: obtenerUsuariosAdminErrors//Funcion a realizar en caso de error
        }
	);
    return true;
}

function obtenerUsuariosAdminSuccess(result,status,xhr)
{
	$("#results").html(result);//Pega y muestra el código de html que se obtuvo de Ajax. Lo pega en el objeto con id="cuadro"
}

function obtenerUsuariosAdminErrors(xhr,status,error)
{
	alert(xhr);//Muestra mensaje de alerta
}