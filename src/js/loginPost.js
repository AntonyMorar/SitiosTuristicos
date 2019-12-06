$(document).ready(function () {
    $("#loginForm").on('submit', (function (e) {
        e.preventDefault();
        $("#error").text('')
        $.ajax({
            type: "POST",
            url: "controllers/loginController.php",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                $("#loginBtn").text('Cargando...');
            },
            success: function (data) {
                if (data) {
                    $("#loginForm")[0].reset(); // Pone en blanco todos los campos del formulario
                    $("#loginBtn").text('Iniciar Sesíon')
                    if(data == 1){
                        window.location.href = "index.php";
                    }
                } else {
                    $("#loginBtn").text('Iniciar Sesíon')
                    $("#error").html("Error al iniciar sesión, intenta de nuevo más tarde.");
                    $("#loginForm")[0].reset(); // Pone en blanco todos los campos del formulario
                }
            }
        });
    }));
});