$(document).ready(function () {
    $('#register').click(function () {
        var username = $("#username").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var name = $("#name").val();
        var age = $("#age").val();
        var gender = $('input[name=gender]:checked', '#regForm').val();
        var dataString = 'username=' + username + '&email=' + email + '&password=' + password + '&name=' + name + '&age=' + age + '&gender=' + gender;

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
                        $("#succes").html("You are registered successfully. Go to login");
                    } else {
                        $("#register").val('Registrarse')
                        $("#error").html("Error al crear un nuevo usuario, intenta de nuevo más tarde.");
                    }
                }
            });
        }
        return false;
    });

    $("#but_upload").click(function(){

        var fd = new FormData();
        var files = $('#file')[0].files[0];
        fd.append('file',files);

        $.ajax({
            url: 'config/uploadFile.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if(response != 0){
                    profilePic = response;
                    $("#img").attr("src",response); 
                    $(".preview img").show(); // Display image element
                }else{
                    alert('file not uploaded');
                }
            },
        });
    });
});