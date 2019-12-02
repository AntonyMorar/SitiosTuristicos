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

        <h1>Sitios Turísticos</h1>

        <div id="search">
            <form enctype="multipart/form-data" id="searchForm">
                <input type="text" name="search" placeholder="Buscar...">
                <p>Filtrar por:</p>
                <label for="ubication">Ubicación:</label>
                <input type="text" name="ubication" placeholder="Todas">
                <label for="category">Categoría:</label>
                <select name="category">
                    <option value="" selected>Todas</option> 
                    <option value="Ciudad">Ciudad</option>
                    <option value="Parque">Parque</option>
                    <option value="ParPlayaque">Playa</option>
                    <option value="Desierto">Desierto</option>
                    <option value="Selva">Selva</option>
                    <option value="Bosque">Bosque</option>
                    <option value="Museo">Museo</option>
                    <option value="Arquitectura">Arquitectura</option>
                    <option value="Lago">Lago</option>
                    <option value="Otro">Otro</option>
                </select>
                <label for="ranking">Ranking:</label>
                <select name="ranking">
                    <option value="-1" selected>Todas</option> 
                    <option value="0">&#9734;</option>
                    <option value="1">&#9733;</option>
                    <option value="2">&#9733;&#9733;</option>
                    <option value="3"> &#9733;&#9733;&#9733;</option>
                    <option value="4">&#9733;&#9733;&#9733;&#9733;</option>
                    <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                </select>
                <button type=submit>Buscar</button>
            </form>
        </div>

        <div id="recomendations">
            <h2>Recomendaciones</h2>

        </div>

        <div id="results">

        </div>
    </div>

    <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="src/js/searchSites.js"></script>
</body>

</html>