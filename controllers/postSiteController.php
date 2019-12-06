<?php
    //Cargamos archivos a ocupar
    include("../config/dbs.php"); //Importamos los datos de la base de datos
    
    // Si se envía el formulario
    if(isset($_POST['name']) && isset($_POST['category']) && isset($_POST['ubication']) && isset($_POST['description']) && isset($_POST['long'])&& isset($_POST['lat'])){
        // Se cargan valores del post de ajax
        $name=mysqli_real_escape_string($db, $_POST['name']);
        $category=mysqli_real_escape_string($db, $_POST['category']);
        $ubication=mysqli_real_escape_string($db, $_POST['ubication']);
        $description=mysqli_real_escape_string($db, $_POST['description']);
        $long=mysqli_real_escape_string($db, $_POST['long']);
        $lat=mysqli_real_escape_string($db, $_POST['lat']);

        $query = "INSERT INTO pf_sitios(nombre, categoria, ubicacion, descripcion, lat, longitud) VALUES ('$name', '$category','$ubication','$description', $long, $lat)";
        //Ejecutamos query
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
        //Deslpegamos query
        echo $result;
    }else{
        echo "Completar todos los campos";
    }
?>