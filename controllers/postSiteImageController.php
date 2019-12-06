<?php
    include("../config/dbs.php");
    $valid_extensions = array('jpeg', 'jpg', 'png', 'peng', 'gif', 'bmp'); // Extensiones válidas del archivo
    $path = '../uploads/sites/'; //Directorio final donde se guarda la imágen

    $id_sitio = mysqli_real_escape_string($db, $_POST['id_sitio']);

    $img = $_FILES["image"]["name"]; //Guarda el nombre de la imágen original del sitio
    $tmp = $_FILES["image"]["tmp_name"]; //Guarda el nombre del archivo temporal

    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION)); // Obtener la extensión del archivo cargado
    $final_image = rand(1000,1000000).'site.'.$ext;

    // Verificat si la extensión es válida
    if(in_array($ext, $valid_extensions)) { 
        $path = $path.strtolower($final_image); 

        // Si el archivo se copio correctamente guarda la referencia en la base de datos
        if(move_uploaded_file($tmp,$path)) {
            $path = substr($path, 1);
            //insert image path data in the database
            $query = "INSERT INTO pf_fotositios(idSitio, foto) VALUES($id_sitio, '$path')";
            $result = mysqli_query($db,$query) or die(mysqli_error($db));
            echo $result;
        }
    } else {
        echo 'El archivo no tiene una extensión válida';
    }
    
?>
