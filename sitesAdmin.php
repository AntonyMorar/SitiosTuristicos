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
            <h1 class="title">Todos los sitios</h1>
            <button class="buttonGen" data-toggle="modal" data-target="#modalAgregarSitio">Agregar Sitio</button>
        </div>
        <div id="results"></div>

        <!-- Modal -->
        <div class="modal fade" id="modalAgregarSitio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Agregar Sitio</h4>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="buttonSec" data-dismiss="modal">Close</button>
                        <button type="button" class="buttonGen">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!--===============================================================================================-->
        <script src="src/js/sitesAdminGet.js"></script>

</body>

</html>