<?php
   include("config/dbs.php");
   session_start();
   $userID = $_SESSION['login_user'];
   $ses_sql = mysqli_query($db, "SELECT tipo_usuario FROM pf_usuarios WHERE idUsuario = '$userID' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $privilege = $row['tipo_usuario'];

   $actual_path = $_SERVER['REQUEST_URI'];
   
   if(!isset($_SESSION['login_user'])){
      header("Location:login");
      die();
   }else if($privilege != 'administrador' && ($actual_path == '/admin' || $actual_path == '/admin.php' || $actual_path == '/adminSites'  || $actual_path == '/adminSites.php')){
      header("Location:index");
   }
?>
