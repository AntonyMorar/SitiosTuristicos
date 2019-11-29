<?php
    include("../config/dbs.php");
    session_start();

    if(isset($_POST['username']) && isset($_POST['password'])){
        $sourcePath = $_FILES['profilePic']['tmp_name']; // Storing source path of the file in a variable
        $targetPath = "upload/".$_FILES['profilePic']['name']; // Target path where file is to be stored
        move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file

        // username and password sent from form 
        $name=mysqli_real_escape_string($db,$_POST['name']);
        $username=mysqli_real_escape_string($db,$_POST['username']);
        $age=mysqli_real_escape_string($db,$_POST['age']); 
        $gender=mysqli_real_escape_string($db,$_POST['gender']); 

        $email=mysqli_real_escape_string($db,$_POST['email']);
        $password=mysqli_real_escape_string($db,$_POST['password']); 

        $sql = "INSERT INTO pf_usuarios(nombre, username, edad, género, foto, correo, contraseña) VALUES('$name', '$username', $age , '$gender','$targetPath','$email', '$password')";
        $result = mysqli_query($db,$sql);
        echo $result;
    }
?>
