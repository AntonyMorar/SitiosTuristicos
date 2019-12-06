<?php
    //Cargamos archivos a ocupar
    include("../config/dbs.php"); //Importamos la base de datos
    include("../config/keys.php"); //Importamos las llaves
    require_once "HTML/Template/IT.php";
    $template = new HTML_Template_IT('../templates');
    $template->loadTemplatefile("site.html", true, true);
    
    if(isset($_GET['id'])){
        // Cargamos el parametro id y lo guardamos en una variable
        $siteID = mysqli_real_escape_string($db, $_GET["id"]);
        //Armamos query
        $query = "SELECT u.*, AVG(o.calificacion) AS ranking FROM pf_sitios u LEFT OUTER JOIN pf_opiniones o ON u.idSitio = o.idSitio WHERE u.idSitio = $siteID GROUP BY u.idSitio";
        //Ejecutamos query
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
        //Deslpegamos query
        $line = mysqli_fetch_assoc($result);

        $template->setVariable("NOMBRE", $line['nombre']);
        $template->setVariable("CATEG", $line['categoria']);
        $template->setVariable("UBI", $line['ubicacion']);
        $template->setVariable("DESC", $line['descripcion']);
        $template->setVariable("RANKING", $line['ranking']);
        $template->setVariable("LAT", $line['lat']);
        $template->setVariable("LONG", $line['longitud']);
        $template->setVariable("GMAPS_API_KEY", GMAPS_API_KEY); // Enviamos api key de google maps al template

        //Liberamos espacio
        mysqli_free_result($result);
        //Imprimimos el codigo html resultante
        $template->show();
    }
?>