<?php
    include("../config/dbs.php");
    session_start(); // Reanudamos la sesión existente
    $userID = $_SESSION['login_user']; // Guardamos ID del usuario logeado

    if(isset($_POST['id'])){
        // username and password sent from form 
        $contactID=mysqli_real_escape_string($db,$_POST['id']);

        $sql = "INSERT INTO pf_listacontactos (idUsuario, idContacto) VALUES ('$userID','$contactID')";
        $result = mysqli_query($db,$sql) or die(mysqli_error($db));
        echo $result;
    }
?>
