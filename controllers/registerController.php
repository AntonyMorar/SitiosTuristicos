<?php
    include("../config/dbs.php");
    session_start();
    $valid_extensions = array('jpeg', 'jpg', 'png', 'peng', 'gif', 'bmp'); // Extensiones válidas del archivo
    $path = '../uploads/users/'; //Directorio final

    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) &&  isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['password'])){
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $age = mysqli_real_escape_string($db, $_POST['age']);
        $gender = mysqli_real_escape_string($db, $_POST['gender']);
        $email = mysqli_real_escape_string($db, strtolower($_POST['email']));
        $password = mysqli_real_escape_string($db, $_POST['password']);

        $img = $_FILES["image"]["name"]; //Guarda la imágen original del cliente
        $tmp = $_FILES["image"]["tmp_name"]; //Guarda el nombre del archivo temporal

        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION)); // Obtener la extensión del archivo cargado
        $final_image = rand(1000,1000000).$username.'.'.$ext;

        // Verificat si la extensión es válida
        if(in_array($ext, $valid_extensions)) { 
            $path = $path.strtolower($final_image); 

            if(move_uploaded_file($tmp,$path)) {
                $path = substr($path, 1);
                //insert form data in the database
                $sql = "INSERT INTO pf_usuarios(nombre, username, edad, genero, foto, correo, contrasenia) VALUES('$name', '$username', $age , '$gender','$path','$email', '$password')";
                $result = mysqli_query($db,$sql) or die(mysqli_error($db));
                echo $result;
                //echo $insert?'ok':'err';
            }
        } else if($_FILES["image"]["size"] == 0){ //Cuando no se selecciona ninguna imagen de perfil se asigna una temporal
            $path = './src/images/profileTemp.png'; 
            $sql = "INSERT INTO pf_usuarios(nombre, username, edad, genero, foto, correo, contrasenia) VALUES('$name', '$username', $age , '$gender','$path','$email', '$password')";
            $result = mysqli_query($db,$sql) or die(mysqli_error($db));
            echo $result;
        }else {
            echo 'El archivo no tiene una extensión válida';
        }
    }
    
?>
