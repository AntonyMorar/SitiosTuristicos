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
         <h1 class="title">Crea tu cuenta</h1>

         <form id="regForm">
            <div class="inputPairDouble">
               <div class="inputPair">
                  <label for="username">*Username</label><input type="text" name="username" id="username" required/>
               </div>
               <div class="inputPair">
                  <label for="email">*Correo</label><input type="email" name="email" id="email" required/>
               </div>
            </div>

            <div class="inputPairDouble">
               <div class="inputPair">
                  <label for="password">*Contraseña</label><input type="password" name="password" id="password" required/>
               </div>
               <div class="inputPair">
                  <label for="name">*Nombre Completo</label><input type="text" name="name" id="name" required/>
               </div>
            </div>

            <div class="inputPairDouble">
               <div class="inputPair short">
                  <label for="age">*Edad</label><input type="number" name="age" id="age"  min="0" max="120" required/>
               </div>
               <div class="inputPair long">
                  <label>*Género</label>
                  <div class="inputGender">
                     <input type="radio" name="gender" value="M" /><label for="M">Hombre</label>
                     <input type="radio" name="gender"  value="F"><label for="F">Mujer</label>
                     <input type="radio" name="gender"  value="B"><label for="B">No binario</label>
                     <input type="radio" name="gender"  value="O"><label for="O">No Revelar</label>
                  </div>
               </div>
            </div>

            <div class="inputPair">
               <label>Foto de perfil</label><input type="file" accept="image/*" name="image"  id="uploadImage"/>
            </div>
            <button type="submit" form="regForm" class="buttonGen" id="register">Registrarse</button>
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