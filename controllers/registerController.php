<?php
    include("../config/dbs.php");
    session_start();

    if(isset($_POST['username']) && isset($_POST['password'])){
        // username and password sent from form 
        $name=mysqli_real_escape_string($db,$_POST['name']);
        $username=mysqli_real_escape_string($db,$_POST['username']);
        $age=mysqli_real_escape_string($db,$_POST['age']); 
        $gender=mysqli_real_escape_string($db,$_POST['gender']); 
        $email=mysqli_real_escape_string($db,$_POST['email']);
        $password=mysqli_real_escape_string($db,$_POST['password']); 

        $sql = "INSERT INTO pf_usuarios(nombre, username, edad, género, foto, correo, contraseña) VALUES('$name', '$username', $age , '$gender','fotou1.png','$email', '$password')";
        $result = mysqli_query($db,$sql) or die("La consulta de registro fallo");
        echo $result;
    }
    
?>
