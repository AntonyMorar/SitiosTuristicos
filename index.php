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

        <div id="search">
            <form id="searchForm">
                <div class="searchInputContainer">
                    <label for="search"><span class="glyphicon glyphicon-search"></span></label>
                    <input type="text" name="search" placeholder="Buscar..." required class="searchInput">
                    <button type=submit class="buttonGen">Buscar</button>
                </div>
                <p>Filtrar por:</p>
                <input type="text" name="ubication" placeholder="Ubicación">
                <label for="category">Categoría:</label>
                <select name="category">
                    <option value="" selected>Todas</option> 
                    <option value="Ciudad">Ciudad</option>
                    <option value="Parque">Parque</option>
                    <option value="Playa">Playa</option>
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
            </form>
        </div>

        <div id="div1">
            <h2>Recomendaciones</h2>
        </div>

        <div id="results">
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="src/js/searchSites.js"></script>
</body>

</html>