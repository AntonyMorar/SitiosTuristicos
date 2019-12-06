<?php
    //Cargamos archivos a ocupar
    include("../config/dbs.php");
    session_start(); // Reanudamos la sesión existente
    $userID = $_SESSION['login_user']; // Guardamos ID del usuario logeado
    require_once "HTML/Template/IT.php";
    $template = new HTML_Template_IT('../templates');
    $template->loadTemplatefile("contactListSearch.html", true, true);
    
    //Armamos query
    $con=mysqli_real_escape_string($db, $_POST['contacto']);
    $query = "SELECT idUsuario, nombre, username, foto FROM pf_usuarios WHERE (idUsuario <> $userID) AND (nombre LIKE '%$con%' OR username LIKE '%$con%')";
    //Ejecutamos query
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    //Deslpegamos query
    while($line = mysqli_fetch_assoc($result))
    {
        // Fijamos el bloque con la informacion de cada usuario
		$template->setCurrentBlock("FILA");
		 	
		// Desplegamos la informacion de cada presidentes
		$template->setVariable("NOMBRE", $line['nombre']);
		$template->setVariable("USERNAME", $line['username']);
		$template->setVariable("FOTO", $line['foto']);
        $template->setVariable("ID", $line['idUsuario']);
        
        $template->parseCurrentBlock("FILA");
    }
    //Liberamos espacio
    mysqli_free_result($result);
    //Imprimimos el codigo html resultante
    $template->show();
?>