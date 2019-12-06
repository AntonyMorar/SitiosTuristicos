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
        <?php include("templates/adminNav.html");?>
        
        <div class="titleContainer">
            <h1 class="title">Todos los usuarios</h1>
        </div>
        <div id="results"></div>
    </div>

    <!--===============================================================================================-->
    <script src="src/js/adminGet.js"></script>

</body>

</html>