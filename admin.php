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

        <div class="titleContainer row">
            <h1 class="title">Todos los usuarios</h1>
            <form>
                <input type="text" placeholder="Buscar usuario" name="search">
                <select name="category" name="type">
                    <option value="" selected>Todos</option>
                    <option value="normal">Normal</option>
                    <option value="administrador">Administrador</option>
                </select>
                <button class="buttonGen">Buscar</button>
            </form>
        </div>
        <div id="results"></div>
    </div>

    <!--===============================================================================================-->
    <script src="src/js/adminGet.js"></script>

</body>

</html>