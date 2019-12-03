<?php
    include("../config/dbs.php");
    session_start();
    $valid_extensions = array('jpeg', 'jpg', 'png', 'peng', 'gif', 'bmp'); // Extensiones válidas del archivo
    $path = '../uploads/users/'; //Directorio final

    if(isset($_POST['username']) && isset($_POST['password'])){
        $img = $_FILES["image"]["name"]; //Guarda la imágen original del cliente
        $tmp = $_FILES["image"]["tmp_name"]; //Guarda el nombre del archivo temporal
        $errorimg = $_FILES["image"][“error”]; // Almacena cualquier código de error

        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION)); // Obtener la extensión del archivo cargado
        $final_image = rand(1000,1000000).$img;

        // Verificat si la extensión es válida
        if(in_array($ext, $valid_extensions)) { 
            $path = $path.strtolower($final_image); 

            if(move_uploaded_file($tmp,$path)) 
            {
            echo "<img src='$path' />";
            $name = $_POST['name'];
            $username = $_POST['username'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            //insert form data in the database
            $sql = "INSERT INTO pf_usuarios(nombre, username, edad, genero, foto, correo, contrasenia) VALUES('$name', '$username', $age , '$gender','$path','$email', '$password')";
            $result = mysqli_query($db,$sql) or die("La consulta de registro falló");
            echo $result;
            //echo $insert?'ok':'err';
            }
        } else {
            echo 'Extensión de archivo inválida';
        }
    }
    
?>
