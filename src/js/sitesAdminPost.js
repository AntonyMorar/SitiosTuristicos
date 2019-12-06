$(document).ready(function () {
    $("#agregarSitioSucces").hide(); // Esconde la alerta que inidca exito al agregar sitio
    $("#agregarSitioImagenSucces").hide(); // Esconde la alerta que inidca exito al agregar imágen

    // Se ejecuta cuando se cierra el modal de 'modalAgregarSitio'
    $('#modalAgregarImg').on('hidden.bs.modal', function () {
        $("#error").text('')
    });

    // Cuando se da submit al formulario de agregar sitio
    $("#siteForm").on('submit', (function (e) {
        e.preventDefault();
        $("#error").text('')
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
    $('#modalAgregarImg').on('show.bs.modal', function (e) {
        var myVal = $(e.relatedTarget).data('val');
        var id_helper = $(e.relatedTarget).data('id');
        $("#id_helper").val(id_helper);
        $(this).find(".modal-title").append(" a " + myVal);
    });

    // Se ejecuta cuando se cierra el modal de 'modalAgregarImg'
    $('#modalAgregarImg').on('hidden.bs.modal', function () {
        $("#errorImg").text('')
        $("#id_helper").val('');
        $(this).find(".modal-title").text("Agregar Imágen");
    });


    // Cuando se da submit al formulario de subir imágen
    $("#siteImgForm").on('submit', (function (e) {
        e.preventDefault();
        $("#errorImg").text('')

        var formData = new FormData(this);
        var id_sitio = $('#id_helper').val();
        formData.append("id_sitio", id_sitio);

        $.ajax({
            type: "POST",
            url: "controllers/postSiteImageController.php",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                $("#guardarImgBtn").text('Cargando...');
            },
            success: function (data) {
                if (data) {
                    $("#guardarImgBtn").text('Agregar Imágen')
                    if (data == 1) {
                        //$("#succes").html("Sitio Registrado con éxito");
                        $('#modalAgregarImg').modal('toggle');
                        $("#agregarSitioImagenSucces").fadeTo(2000, 500).slideUp(500, function () {
                            $("#agregarSitioImagenSucces").slideUp(500);
                        });
                        obtenerSitiosAdmin();
                    } else {
                        $("#errorImg").html(data);
                    }
                    $("#siteImgForm")[0].reset(); // Pone en blanco todos los campos del formulario
                } else {
                    $("#guardarImgBtn").text('Agregar Imágen')
                    $("#errorImg").html("Error al subir la foto, intenta de nuevo más tarde.");
                    $("#siteImgForm")[0].reset(); // Pone en blanco todos los campos del formulario
                }
            }
        });
    }));

});