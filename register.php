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
    <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
</head>

<body>
    <div id="root">
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Crea tu cuenta</b></div>
				
            <div style = "margin:30px">
               
               <form action ="" method = "post" id="regForm" enctype="multipart/form-data">
                    <label>Username  :</label><input type = "text" name = "username" id="username" class = "box" /><br /><br />
                    <label>Correo  :</label><input type = "email" name = "email" id="email" class = "box"/><br /><br />
                    <label>Contraseña  :</label><input type = "password" name = "password" id="password" class = "box" /><br/><br />
                    <label>Nombre Completo  :</label><input type = "text" name = "name" id="name" class = "box"/><br /><br />
                    <label>Edad  :</label><input type = "number" name = "age" id="age" class = "box" /><br/><br />
                    <label>Género  :</label><br/>
                    <input type = "radio" name = "gender" class = "box" value="M"/> Hombre<br/>
                    <input type="radio" name="gender"class = "box"  value="F"> Mujer<br/>
                    <input type="radio" name="gender"class = "box"  value="B"> No binario<br/>
                    <input type="radio" name="gender"class = "box"  value="O"> Prefiero no revelar<br/><br/>
                    <label>Foto de perfil</label><input type = "file" name = "profilePic" id="profilePic" class="box" /><br /><br />
                    <input type = "submit" value = "Registrarse" id="register"/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px" id="error"></div>
					
            </div>
            
            <p>O <a href="login.php">Inicia Sesión</a></p>

         </div>
			
      </div>
    </div>

   <!--===============================================================================================-->
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <!--===============================================================================================-->
   <script src="src/js/registerPost.js"></script>
</body>

</html>