<?php
    //Cargamos archivos a ocupar
    include("../config/dbs.php");
    session_start();
    $userID = $_SESSION['login_user'];
    require_once "HTML/Template/IT.php";
    $template = new HTML_Template_IT('../templates');
    $template->loadTemplatefile("contactList.html", true, true);
    
    //Armamos query
    $query = "SELECT cont.idUsuario, cont.nombre, cont.username, cont.edad, cont.género, cont.foto, cont.correo, cont.fecha_registro FROM pf_listacontactos AS list
    JOIN pf_usuarios AS u ON list.idUsuario = u.idUsuario
    JOIN pf_usuarios AS cont ON list.idContacto = cont.idUsuario
    WHERE u.idUsuario = $userID";
    //Ejecutamos query
    $result = mysqli_query($db, $query) or die("La consulta para obtener contactos fallo");
    //Deslpegamos query
    while($line = mysqli_fetch_assoc($result))
    {
        // Fijamos el bloque con la informacion de cada usuario
		$template->setCurrentBlock("FILA");
		 	
		// Desplegamos la informacion de cada presidentes
		$template->setVariable("NOMBRE", utf8_encode($line['nombre']));
		$template->setVariable("USERNAME", utf8_encode($line['username']));
		$template->setVariable("FOTO", utf8_encode($line['foto']));
        $template->setVariable("ID", $line['idUsuario']);
        
        $template->parseCurrentBlock("FILA");
    }
    //Liberamos espacio
    mysqli_free_result($result);
    //Imprimimos el codigo html resultante
    $template->show();
?>