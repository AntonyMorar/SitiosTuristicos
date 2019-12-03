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
        <div id="results"></div>

        <div id="postOp">
            <h3>Escribir reseña sobre este sitio</h3>
            <p>Comparte tu opinión con otros clientes</p>
            <form id="opinionForm">
                <label for="ranking">Calificación general</label>
                <select name="ranking" id="ranking">
                    <option value="" selected disabled>Todas</option> 
                    <option value="0">&#9734;</option>
                    <option value="1">&#9733;</option>
                    <option value="2">&#9733;&#9733;</option>
                    <option value="3"> &#9733;&#9733;&#9733;</option>
                    <option value="4">&#9733;&#9733;&#9733;&#9733;</option>
                    <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                </select>
                <label for="opinion">Opinión</label>
                <textarea name="opinion" id="opinion" cols="60" rows="5" placeholder="¿Qué te gustó o que no te gustó?¿Qué lugar visitaste?"></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>

        <div id="resultsOp"></div>
    </div>

    <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="src/js/moment.min.js"></script>
    <!--===============================================================================================-->
    <script src="src/js/siteGet.js"></script>
    <script src="src/js/opinionPost.js"></script>

</body>

</html>