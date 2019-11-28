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
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Inicia sesión</b></div>
				
            <div style = "margin:30px">
               
               <form action ="controllers/loginController.php" method = "post">
                  <label>Usuario  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Contraseña  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = "Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>
    </div>

    <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.1.0.js"></script>
    <!--===============================================================================================-->
    <script src="src/js/moment.min.js"></script>
</body>

</html>