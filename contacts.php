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
        <h1>Lista de contactos</h1>
        <a href="searchContact.php">Buscar contactos</a>

        <div id="results"></div>
    </div>

    <!--===============================================================================================-->
    <script src="src/js/contactsGet.js"></script>

</body>

</html>