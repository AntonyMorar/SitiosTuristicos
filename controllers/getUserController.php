<?php
      //Cargamos archivos a ocupar
      include("../config/dbs.php");
      require_once "HTML/Template/IT.php";
      $template = new HTML_Template_IT('../templates');
      $template->loadTemplatefile("profileInfo.html", true, true);

      if (isset($_GET['id'])) {
        // Cargamos el parametro id y lo guardamos en una variable
        $profileID = $_GET['id'];
        // Armamos query
        $sql = "SELECT idUsuario, tipo_usuario, nombre, username, edad, genero, foto, correo, fecha_registro FROM pf_usuarios WHERE idUsuario=$profileID";
        // Ejecutamos query
        $result = mysqli_query($db,$sql) or die(mysqli_error($db));
        //Deslpegamos query
        $line = mysqli_fetch_assoc($result);

        $template->setVariable("NOMBRE", $line['nombre']);
        $template->setVariable("USERNAME", $line['username']);
        $template->setVariable("EDAD", $line['edad']);
        $template->setVariable("GENERO", $line['genero']);
        $template->setVariable("CORREO", $line['correo']);
        $template->setVariable("FOTO", $line['foto']);
        $template->setVariable("FECHA_REGISTRO", $line['fecha_registro']);

        //Liberamos espacio
        mysqli_free_result($result);
        //Imprimimos el codigo html resultante
        $template->show();
      }
    ?>