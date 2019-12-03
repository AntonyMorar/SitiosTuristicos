$(document).ready(function (e) {
    $("#regForm").on('submit', (function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "controllers/registerController.php",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                $("#register").val('Cargando...');
            },
            success: function (data) {
                if (data) {
                    $("#error").html(data)
                    $("#succes").html("Usuario registrado con éxito. Ir al inicio de sesión");
                } else {
                    $("#register").val('Registrarse')
                    $("#error").html("Error al crear un nuevo usuario, intenta de nuevo más tarde.");
                }
            }
        });
    }));
});