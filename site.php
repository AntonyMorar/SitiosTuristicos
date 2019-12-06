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
        <div id="resultsSite"></div>

        <div id="postOp" class="review">
            <h3>Escribir reseña sobre este sitio</h3>
            <p>Comparte tu opinión con otros clientes</p>
            <form id="opinionForm">
                <div class="opinionFormInner">
                    <label for="ranking">Calificación general</label>
                    <select name="ranking" id="ranking" required>
                        <option value="" selected disabled>Todas</option>
                        <option value="0">&#9734;</option>
                        <option value="1">&#9733;</option>
                        <option value="2">&#9733;&#9733;</option>
                        <option value="3">&#9733;&#9733;&#9733;</option>
                        <option value="4">&#9733;&#9733;&#9733;&#9733;</option>
                        <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                    </select>
                <label for="opinion">Opinión</label>
                <textarea name="opinion" id="opinion" cols="60" rows="5"
                    placeholder="¿Qué te gustó o que no te gustó?¿Qué lugar visitaste?" required></textarea>
                <button type="submit" class="buttonGen">Enviar</button>
            </div>
            </form>
        </div>

        <div id="resultsOp"></div>
    </div>

    <!--===============================================================================================-->
    <script src="src/js/siteGet.js"></script>
    <script src="src/js/opinionPost.js"></script>

</body>

</html>