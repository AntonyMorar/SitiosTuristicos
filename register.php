<?php
session_start();
if(!empty($_SESSION['login_user']))
{
   header('Location: index.php');
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
         <h1 class="title">Crea tu cuenta</h1>

         <form method="post" id="regForm" enctype="multipart/form-data">
            <div class="inputPairDouble">
               <div class="inputPair">
                  <label for="username">Username</label><input type="text" name="username" id="username" class="box" />
               </div>
               <div class="inputPair">
                  <label for="email">Correo</label><input type="email" name="email" id="email" class="box" />
               </div>
            </div>

            <div class="inputPairDouble">
               <div class="inputPair">
                  <label for="password">Contraseña</label><input type="password" name="password" id="password"
                     class="box" />
               </div>
               <div class="inputPair">
                  <label for="name">Nombre Completo</label><input type="text" name="name" id="name" class="box" />
               </div>
            </div>

            <div class="inputPairDouble">
               <div class="inputPair short">
                  <label for="age">Edad</label><input type="number" name="age" id="age" class="box" min="0" max="120" />
               </div>
               <div class="inputPair">
                  <label>Género</label>
                  <div class="inputGender">
                     <input type="radio" name="gender" class="box" id="M" value="M" /><label for="M">Hombre</label>
                     <input type="radio" name="gender" class="box" value="F" id="F"><label for="F">Mujer</label>
                     <input type="radio" name="gender" class="box" value="B" id="B"><label for="B">No binario</label>
                     <input type="radio" name="gender" class="box" value="O" id="O"><label for="O">No Revelar</label>
                  </div>
               </div>
            </div>


            <div class="inputPair">
               <label>Foto de perfil</label><input type="file" id="file" name="file" class="box" />
            </div>
            <input type="submit" value="Registrarse" id="register" class="buttonGen" />
         </form>
         <div class="errorGlobal" id="error"></div>
         <div class="exitoGlobal" id="succes"></div>
         <p>¿Ya tiene una cuenta? <a href="login.php">Inicia Sesión</a></p>
      </div>
   </div>

   <!--===============================================================================================-->
   <!--===============================================================================================-->
   <script src="src/js/registerPost.js"></script>
</body>

</html>