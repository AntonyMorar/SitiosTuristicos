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
        <div id="resultsOp"></div>
    </div>

    <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="src/js/moment.min.js"></script>
    <!--===============================================================================================-->
    <script src="src/js/siteGet.js"></script>

</body>

</html>