$(document).ready(function () {

    $('#login').click(function () {
        var username = $("#username").val();
        var password = $("#password").val();
        var dataString = 'username=' + username + '&password=' + password;
        if ($.trim(username).length > 0 && $.trim(password).length > 0) {
            $.ajax({
                type: "POST",
                url: "controllers/loginController.php",
                data: dataString,
                cache: false,
                beforeSend: function () {
                    $("#login").val('Cargando...');
                },
                success: function (data) {
                    if (data) {
                        window.location.href = "index.php";
                    } else {
                        $("#login").val('Iniciar Sesíon')
                        $("#error").html("Error: Nombre de usuario o contraseña no válida.");
                    }
                }
            });
        }
        return false;
    });

});