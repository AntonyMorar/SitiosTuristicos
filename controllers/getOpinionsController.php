<?php
    //Cargamos archivos a ocupar
    include("../config/dbs.php");
    require_once "HTML/Template/IT.php";
    $template = new HTML_Template_IT('../templates');
    $template->loadTemplatefile("opinionsList.html", true, true);
    
    if(isset($_GET['id'])){
        // Cargamos el parametro id y lo guardamos en una variable
        $siteID = mysqli_real_escape_string($db, $_GET["id"]);
        //Armamos query
        $query = "SELECT op.idOpinion, op.opinion, op.calificacion, op.fecha, us.idUsuario, us.nombre as nombre_usuario, us.username, us.foto as foto_usuario FROM pf_opiniones AS op 
        INNER JOIN pf_usuarios AS us ON us.idUsuario = op.idUsuario
        WHERE op.idSitio = $siteID
        ORDER BY op.fecha DESC";
        //Ejecutamos query
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
        //Deslpegamos query
        while($line = mysqli_fetch_assoc($result))
        {
            // Fijamos el bloque con la informacion de cada usuario
            $template->setCurrentBlock("FILA");
                
            // Desplegamos la informacion de cada presidentes
            $template->setVariable("ID", $line['idOpinion']);
            $template->setVariable("OPINION", $line['opinion']);
            $template->setVariable("CALIF", $line['calificacion']);
            $template->setVariable("FECHA", $line['fecha']);
            $template->setVariable("IDUSUARIO", $line['idUsuario']);
            $template->setVariable("NOMBREUSUARIO", $line['nombre_usuario']);
            $template->setVariable("USERNAME", $line['username']);
            $template->setVariable("FOTO_USUARIO", $line['foto_usuario']);
            
            $template->parseCurrentBlock("FILA");
        }
        //Liberamos espacio
        mysqli_free_result($result);
        //Imprimimos el codigo html resultante
        $template->show();
    }
?>