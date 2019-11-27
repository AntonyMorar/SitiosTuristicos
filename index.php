<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Inicio</title>
   </head>
   
   <body>
      <h1>Bienvenido <?php echo $login_session; ?></h1> 
      <img src="<?= $login_session; ?>" alt="<?= $login_session; ?>">
      <h2><a href = "logout.php">Cerrar Sesión</a></h2>
   </body>
   
</html>