$(document).ready(function () {
    $("#agregarSitioSucces").hide(); // Esconde la alerta que inidca exito

    // Cuando se da submit al formulario de agregar sitio
    $("#siteForm").on('submit', (function (e) {
        e.preventDefault();
        $("#error").val('')
        $.ajax({
            type: "POST",
            url: "controllers/postSiteController.php",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                $("#guardarSitioBtn").text('Cargando...');
            },
            success: function (data) {
                if (data) {
                    $("#guardarSitioBtn").text('Guardar Sitio')
                    if (data == 1) {
                        //$("#succes").html("Sitio Registrado con éxito");
                        $('#modalAgregarSitio').modal('toggle');
                        $("#agregarSitioSucces").fadeTo(2000, 500).slideUp(500, function () {
                            $("#agregarSitioSucces").slideUp(500);
                        });
                        obtenerSitiosAdmin();
                    } else {
                        $("#error").html(data);
                    }
                    $("#siteForm")[0].reset(); // Pone en blanco todos los campos del formulario
                } else {
                    $("#guardarSitioBtn").text('Guardar Sitio')
                    $("#error").html("Error al crear un nuevo usuario, intenta de nuevo más tarde.");
                    $("#siteForm")[0].reset(); // Pone en blanco todos los campos del formulario
                }
            }
        });
    }));

    // Se ejecuta cuando se abre el modal de 'modalAgregarImg'
    $('#modalAgregarImg').on('show.bs.modal', function (event) {
        var myVal = $(event.relatedTarget).data('val');
        $(this).find(".modal-title").append(" a " + myVal);
    });

    // Se ejecuta cuando se cierra el modal de 'modalAgregarImg'
    $('#modalAgregarImg').on('hidden.bs.modal', function () {
        $(this).find(".modal-title").text("Agregar Imágen");
    });

});