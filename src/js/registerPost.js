$(document).ready(function () {
    $("#regForm").on('submit', (function (e) {
        e.preventDefault();
        $("#error").val('')
        $.ajax({
            type: "POST",
            url: "controllers/registerController.php",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                $("#register").text('Cargando...');
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
                    $("#register").text('Registrarse')
                    $("#error").html("Error al crear un nuevo usuario, intenta de nuevo más tarde.");
                    $("#regForm")[0].reset(); // Pone en blanco todos los campos del formulario
                }
            }
        });
    }));
});