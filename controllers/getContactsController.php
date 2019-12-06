<?php
    //Cargamos archivos a ocupar
    include("../config/dbs.php");
    session_start();
    $userID = mysqli_real_escape_string($db,$_SESSION['login_user']);
    require_once "HTML/Template/IT.php";
    $template = new HTML_Template_IT('../templates');
    $template->loadTemplatefile("contactList.html", true, true);
    
    //Armamos query
    $query = "SELECT cont.idUsuario, cont.nombre, cont.username, cont.edad, cont.genero, cont.foto, cont.correo, cont.fecha_registro FROM pf_listacontactos AS list
    JOIN pf_usuarios AS u ON list.idUsuario = u.idUsuario
    JOIN pf_usuarios AS cont ON list.idContacto = cont.idUsuario
    WHERE u.idUsuario = $userID";
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