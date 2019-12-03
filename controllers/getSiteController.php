<?php
    //Cargamos archivos a ocupar
    include("../config/dbs.php");
    require_once "HTML/Template/IT.php";
    $template = new HTML_Template_IT('../templates');
    $template->loadTemplatefile("site.html", true, true);
    
    if(isset($_GET['id'])){
        // Cargamos el parametro id y lo guardamos en una variable
        $siteID = $_GET["id"];
        //Armamos query
        $query = "SELECT u.*, AVG(o.calificacion) AS ranking FROM pf_sitios u LEFT OUTER JOIN pf_opiniones o ON u.idSitio = o.idSitio WHERE u.idSitio = $siteID GROUP BY u.idSitio";
        //Ejecutamos query
        $result = mysqli_query($db, $query) or die("La consulta para obtener el sitio fallo");
        //Deslpegamos query
        $line = mysqli_fetch_assoc($result);

        $template->setVariable("NOMBRE", $line['nombre']);
        $template->setVariable("CATEG", $line['categoria']);
        $template->setVariable("UBI", $line['ubicacion']);
        $template->setVariable("DESC", $line['descripcion']);
        $template->setVariable("RANKING", $line['ranking']);

        //Liberamos espacio
        mysqli_free_result($result);
        //Imprimimos el codigo html resultante
        $template->show();
    }
?>