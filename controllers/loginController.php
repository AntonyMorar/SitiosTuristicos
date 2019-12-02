<?php
    include("../config/dbs.php");
    session_start();

    if(isset($_POST['username']) && isset($_POST['password'])){
        // username and password sent from form 
        $username=mysqli_real_escape_string($db,$_POST['username']); 
        $password=mysqli_real_escape_string($db,$_POST['password']); 

        $sql = "SELECT idUsuario FROM pf_usuarios WHERE username = '$username' and contraseña = '$password'";
        $result = mysqli_query($db,$sql) or die("La consulta de login fallo");
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count=mysqli_num_rows($result);
        
        // If result matched $username and $password, table row  must be 1 row
        if($count==1){
            $_SESSION['login_user']=$row['idUsuario']; //Storing user session value.
            echo $row['idUsuario'];
        }
    }
?>