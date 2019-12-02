<?php
   include('config/session.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include("templates/headTags.php");?>
</head>

<body>
  <div id="root">
    <?php include("templates/header.php");?>
    <?php require_once("controllers/userController.php")?>

    <h1>Bienvenido <?php echo $login_session; ?></h1>
    <table width="398" border="0" align="center" cellpadding="0">
      <tr>
        <td height="26" colspan="2">Información del perfil </td>
      </tr>
      <tr>
        <td valign="top">
          <div align="left">Nombre:</div>
        </td>
        <td valign="top"><?php echo $name ?></td>
      </tr>
      <tr>
        <td valign="top">
          <div align="left">Username:</div>
        </td>
        <td valign="top"><?php echo $username ?></td>
      </tr>
      <tr>
        <td valign="top">
          <div align="left">Edad:</div>
        </td>
        <td valign="top"><?php echo $age ?></td>
      </tr>
      <tr>
        <td valign="top">
          <div align="left">Género:</div>
        </td>
        <td valign="top"><?php echo $gender ?></td>
      </tr>
      <tr>
        <td valign="top">
          <div align="left">Correo:</div>
        </td>
        <td valign="top"><?php echo $email ?></td>
      </tr>
      <tr>
        <td valign="top">
          <div align="left">Se unio:</div>
        </td>
        <td valign="top"><?php echo $rel_register_date ?></td>
      </tr>
    </table>
    <p align="center"><a href="index.php"></a></p>
  </div>

  <!--===============================================================================================-->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</body>

</html>