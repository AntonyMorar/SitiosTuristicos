<?php
    //Cargamos archivos a ocupar
    include("../config/dbs.php"); //Importamos los datos de la base de datos
    session_start(); // Reanudamos la sesión existente
    $userID = $_SESSION['login_user']; // Guardamos ID del usuario logeado
    
    // Si se envía el formulario
    if(isset($_POST['ranking']) && isset($_POST['opinion'])){
        // Se cargan valores del post de ajax
        $ranking=$_POST['ranking'];
        $opinion=$_POST['opinion'];
        $idSitio=$_POST['idSitio'];

        $query = "INSERT INTO pf_opiniones (idSitio, idUsuario, opinion, calificacion) VALUES ($idSitio, $userID, '$opinion', $ranking)";
        echo $query;
        //Ejecutamos query
        $result = mysqli_query($db, $query) or die("Fallo al ingresar nueva opinion");
        //Deslpegamos query
        echo $result;
    }else{
        echo "Completar todos los campos";
    }
?>