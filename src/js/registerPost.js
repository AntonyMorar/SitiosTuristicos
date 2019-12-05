$(document).ready(function (e) {
    $("#regForm").on('submit', (function (e) {
        $("#error").val('')
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
                    $("#register").val('Registrarse')
                    if(data == 1){
                        $("#succes").html("Usuario registrado con éxito. Ir al inicio de sesión");
                    }else{
                        $("#error").html(data);
                    }
                    $("#regForm")[0].reset(); // Pone en blanco todos los campos del formulario
                } else {
                    $("#register").val('Registrarse')
                    $("#error").html("Error al crear un nuevo usuario, intenta de nuevo más tarde.");
                    $("#regForm")[0].reset(); // Pone en blanco todos los campos del formulario
                }
            }
        });
    }));
});