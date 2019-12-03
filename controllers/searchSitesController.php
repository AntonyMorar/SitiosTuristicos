<?php
    //Cargamos archivos a ocupar
    include("../config/dbs.php");
    require_once "HTML/Template/IT.php";
    $template = new HTML_Template_IT('../templates');
    $template->loadTemplatefile("sitesList.html", true, true);
    
    // Si se envía el formulario
    if(isset($_POST['search'])){
        // Se cargan valores del post de ajax
        $search=$_POST['search'];
        $ubication=$_POST['ubication'];
        $category=$_POST['category'];
        $ranking=floatval($_POST['ranking']);
        $ranking_top = $ranking + 1;

        if($ranking <= -1){
            $query = "SELECT u.*, AVG(o.calificacion) AS ranking
            FROM pf_sitios u LEFT OUTER JOIN pf_opiniones o ON u.idSitio = o.idSitio
            WHERE (u.nombre LIKE '%$search%') AND (U.categoria LIKE '%$category%') AND (u.ubicacion LIKE '%$ubication%')
            GROUP BY u.idSitio";
        }else{
            $query = "SELECT u.*, AVG(o.calificacion) AS ranking
            FROM pf_sitios u LEFT OUTER JOIN pf_opiniones o ON u.idSitio = o.idSitio
            WHERE (u.nombre LIKE '%$search%') AND (U.categoria LIKE '%$category%') AND (u.ubicacion LIKE '%$ubication%')
            GROUP BY u.idSitio
            HAVING AVG(o.calificacion) BETWEEN $ranking AND $ranking_top"; //Armamos query
        }

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
            $template->setVariable("UBICACION", $line['ubicacion']);
            $template->setVariable("RANKING", $line['ranking']);
            
            $template->parseCurrentBlock("FILA");
        }
        //Liberamos espacio
        mysqli_free_result($result);
        //Imprimimos el codigo html resultante
        $template->show();
    }
?>