function Actualizar(contacto)
{		
	if(contacto=="")//En caso de string vacio
	{
		contacto="?";
	}

	$.ajax(//Manda a llamar el script php
        {
            url: 'controllers/searchContactController.php',//Ubicación del script
            data: {contacto: contacto},//Datos de entrada
            dataType: 'html',//Tipo de datos de salida
            type: 'POST',//Forma en la que se mandaran losdatos de entradas
            success: ActualizarSuccess,//Función a realizar en caso de obtener los datos de salida de manera exitosa
            error: ActualizarErrors//Funcion a realizar en caso de error
        }
	);
	
    return true;
    
}

function ActualizarSuccess(result,status,xhr)
{
	$("#results").html(result);//Pega y muestra el código de html que se obtuvo de Ajax. Lo pega en el objeto con id="cuadro"
}

function ActualizarErrors(xhr,status,error)
{
	alert(xhr);//Muestra mensaje de alerta
}