$(document).ready(function (e) {
    $("#opinionForm").on('submit', function (e) {
        e.preventDefault();
        var ranking = $("#ranking").val();
        var opinion = $("#opinion").val();
        var idSitio = $.urlParam('id');
        var dataString = 'ranking=' + ranking + '&opinion=' + opinion + '&idSitio=' + idSitio;
        //Manda a llamar el script php
        $.ajax({
            url: 'controllers/postOpinionsController.php', //Ubicación del script
            data: dataString, //Datos de entrada
            dataType: 'html', //Tipo de datos de salida
            type: 'POST', //Forma en la que se mandaran losdatos de entradas
            success: OpinionPostSuccess, //Función a realizar en caso de obtener los datos de salida de manera exitosa
            error: OpinionPostErrors //Funcion a realizar en caso de error
        });

        return true;
    });
});

function OpinionPostSuccess(result, status, xhr) {
    alert("Se agrego opinión con exíto!");
    obtenerOpiniones();
}

function OpinionPostErrors(xhr, status, error) {
    alert(xhr); //Muestra mensaje de alerta
}

$.urlParam = function(name){
	var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	return results[1] || 0;
}