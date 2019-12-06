<?php
session_start();
if(!empty($_SESSION['login_user']))
{
   header('Location: index');
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
   <?php include("templates/headTags.php");?>
</head>

<body>
   <div class="login">
      <div class="loginCard">
         <img src="./src/images/sitiosLogo.png" alt="Sitios Turisticos" class="logo">
         <h1 class="title">Inicia sesión</h1>

         <form method="post" id="loginForm">
            <div class="inputPair">
               <label>Usuario</label><input type="text" name="username" class="box" id="username" />
            </div>
            <div class="inputPair">
            <label>Contraseña</label><input type="password" name="password" class="box" id="password" />
            </div>
            <input type="submit" value="Iniciar Sesíon" id="login" class="buttonGen"/>
         </form>
         <div class="errorGlobal" id="error"></div>
         <p>¿Nuevo en Sitios Turísticos? <a href="register.php">Regístrate</a></p>
      </div>
   </div>

   <!--===============================================================================================-->
   <script src="src/js/loginPost.js"></script>

</body>

</html>