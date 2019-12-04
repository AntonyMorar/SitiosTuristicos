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
        <div class="titleContainer">
            <h1 class="title">Lista de contactos</h1>
            <a href="searchContact.php" class="buttonGen">Buscar más contactos</a>
        </div>

        <div id="results"></div>
    </div>

    <!--===============================================================================================-->
    <script src="src/js/contactsGet.js"></script>

</body>

</html>