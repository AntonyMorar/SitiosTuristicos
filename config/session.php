<?php
   include("config/dbs.php");
   session_start();
   
   $userID = $_SESSION['login_user'];
   $ses_sql = mysqli_query($db,"select username from pf_usuarios where idUsuario = '$userID' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("Location:login.php");
      die();
   }
?>
