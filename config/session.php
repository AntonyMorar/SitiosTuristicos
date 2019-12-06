<?php
   include("config/dbs.php");
   session_start();
   // Revisa si el usuario esta logeado, si no esta lo manda a login.php
   if(!isset($_SESSION['login_user'])){
      header("Location:login.php");
      die();  
   }

   $userID = $_SESSION['login_user'];
   $ses_sql = mysqli_query($db, "SELECT tipo_usuario FROM pf_usuarios WHERE idUsuario = '$userID' "); // Query que regresa privilegio del usuario
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $privilege = $row['tipo_usuario']; // Guarda el privilegio del usuario

   $actual_path = $_SERVER['REQUEST_URI']; // Guarda path actual

   //Revisa si el usuario tiene privilegios de administrador, si no tiene lo manda a index.php 
   if($privilege != 'administrador' && ($actual_path == '/admin' || $actual_path == '/admin.php' || $actual_path == '/sitesAdmin'  || $actual_path == '/sitesAdmin.php')){
      header("Location:index.php");
   }
?>
