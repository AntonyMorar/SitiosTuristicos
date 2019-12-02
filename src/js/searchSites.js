$(document).ready(function (e) {
    $("#searchForm").on('submit', function (e) {
        e.preventDefault();

        //Manda a llamar el script php
        $.ajax({
            url: 'controllers/searchSitesController.php', //Ubicación del script
            data: new FormData(this), //Datos de entrada
            processData: false,
            contentType: false,
            dataType: 'html', //Tipo de datos de salida
            type: 'POST', //Forma en la que se mandaran losdatos de entradas
            success: BuscarSitiosSuccess, //Función a realizar en caso de obtener los datos de salida de manera exitosa
            error: BuscarSitiosErrors //Funcion a realizar en caso de error
        });

        return true;
    });

    function BuscarSitiosSuccess(result, status, xhr) {
        $("#results").html(result); //Pega y muestra el código de html que se obtuvo de Ajax. Lo pega en el objeto con id="cuadro"
    }

    function BuscarSitiosErrors(xhr, status, error) {
        alert(xhr); //Muestra mensaje de alerta
    }
});