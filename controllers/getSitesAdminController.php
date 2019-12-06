<?php
    //Cargamos archivos a ocupar
    include("../config/dbs.php");
    require_once "HTML/Template/IT.php";
    $template = new HTML_Template_IT('../templates');
    $template->loadTemplatefile("sitesListAdmin.html", true, true);
    
    //Armamos query
    $query = "SELECT s.*, COUNT(fs.idFoto) AS no_fotos FROM pf_sitios AS s
    LEFT JOIN pf_fotositios AS fs ON fs.idSitio = s.idSitio
    WHERE (s.categoria LIKE '%%')
    GROUP BY s.idSitio
    ORDER BY fecha DESC";
    //Ejecutamos query
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    //Deslpegamos query
    while($line = mysqli_fetch_assoc($result))
    {
        // Fijamos el bloque con la informacion de cada usuario
		$template->setCurrentBlock("FILA");
		 	
		// Desplegamos la informacion de cada presidentes
		$template->setVariable("ID", $line['idSitio']);
		$template->setVariable("NOMBRE", $line['nombre']);
		$template->setVariable("CATEGORIA", $line['categoria']);
        $template->setVariable("UBICACION", $line['ubicacion']);
        $template->setVariable("DESC", $line['descripcion']);
        $template->setVariable("LONG", $line['longitud']);
        $template->setVariable("LAT", $line['lat']);
        $template->setVariable("NO_FOTOS", $line['no_fotos']);
        
        $template->parseCurrentBlock("FILA");
    }
    //Liberamos espacio
    mysqli_free_result($result);
    //Imprimimos el codigo html resultante
    $template->show();
?>