$(document).ready(function () {
    $('#register').click(function () {
        var username = $("#username").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var name = $("#name").val();
        var age = $("#age").val();
        var gender = $('input[name=gender]:checked', '#regForm').val();
        var profilePic = $("#profilePic").val();
        var dataString = 'username=' + username + '&email=' + email + '&password=' + password + '&name=' + name + '&age=' + age + '&gender=' + gender + '&profilePic=' + profilePic;
        if ($.trim(username).length > 0 && $.trim(email).length > 0 && $.trim(password).length > 0 && $.trim(name).length > 0 && $.trim(age).length > 0 && $.trim(gender).length > 0) {
            $.ajax({
                type: "POST",
                url: "controllers/registerController.php",
                data: dataString,
                cache: false,
                beforeSend: function () {
                    $("#register").val('Cargando...');
                },
                success: function (data) {
                    if (data) {
                        $("#error").html("You are registered successfully. Go to login");
                    } else {
                        $("#register").val('Registrarse')
                        $("#error").html("Error al crear un nuevo usuario, intenta de nuevo más tarde.");
                    }
                }
            });
        }
        return false;
    });

});