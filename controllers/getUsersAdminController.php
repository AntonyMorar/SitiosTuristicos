<?php
    //Cargamos archivos a ocupar
    include("../config/dbs.php");
    require_once "HTML/Template/IT.php";
    $template = new HTML_Template_IT('../templates');
    $template->loadTemplatefile("userListAdmin.html", true, true);
    
    //Armamos query
    $query = "SELECT * FROM pf_usuarios ORDER BY fecha_registro DESC";
    //Ejecutamos query
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    //Deslpegamos query
    while($line = mysqli_fetch_assoc($result))
    {
        // Fijamos el bloque con la informacion de cada usuario
		$template->setCurrentBlock("FILA");
		 	
		// Desplegamos la informacion de cada presidentes
		$template->setVariable("ID", $line['idUsuario']);
		$template->setVariable("TIPO", $line['tipo_usuario']);
		$template->setVariable("NOMBRE", $line['nombre']);
        $template->setVariable("USERNAME", $line['username']);
        $template->setVariable("EDAD", $line['edad']);
        $template->setVariable("GENERO", $line['genero']);
        $template->setVariable("FOTO", $line['foto']);
        $template->setVariable("CORREO", $line['correo']);
        $template->setVariable("FECHA_REGISTRO", $line['fecha_registro']);
        
        $template->parseCurrentBlock("FILA");
    }
    //Liberamos espacio
    mysqli_free_result($result);
    //Imprimimos el codigo html resultante
    $template->show();
?>