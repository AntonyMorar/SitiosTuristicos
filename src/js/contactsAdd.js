function agregarContacto(id){
	$.ajax(//Manda a llamar el script php
        {
            url: 'controllers/postContactsController.php',//Ubicación del script
            data: {id: id},//Datos de entrada
            dataType: 'html',//Tipo de datos de salida
            type: 'POST',//Forma en la que se mandaran losdatos de entradas
            success: agregarContactoSuccess,//Función a realizar en caso de obtener los datos de salida de manera exitosa
            error: agregarContactoErrors//Funcion a realizar en caso de error
        }
	);
	
    return true;
}

function agregarContactoSuccess(result,status,xhr)
{
	alert("Contacto agregado")
}

function agregarContactoErrors(xhr,status,error)
{
	alert(xhr);//Muestra mensaje de alerta
}