$(document).ready(function () {
    obtenerContactos();
});


function obtenerContactos(){
    $.ajax(//Manda a llamar el script php
        {
            url: 'controllers/getContactsController.php',//Ubicación del script
            dataType: 'html',//Tipo de datos de salida
            type: 'GET',//Forma en la que se mandaran losdatos de entradas
            success: obtenerContactosSuccess,//Función a realizar en caso de obtener los datos de salida de manera exitosa
            error: obtenerContactosErrors//Funcion a realizar en caso de error
        }
	);
    return true;
}

function obtenerContactosSuccess(result,status,xhr)
{
    console.log("se añadio el pinche contacto");
	$("#results").html(result);//Pega y muestra el código de html que se obtuvo de Ajax. Lo pega en el objeto con id="cuadro"
}

function obtenerContactosErrors(xhr,status,error)
{
	alert(xhr);//Muestra mensaje de alerta
}