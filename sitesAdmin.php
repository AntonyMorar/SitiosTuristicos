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

        <!-- Modal Agregar Sitio -->
        <div class="modal fade" id="modalAgregarSitio" tabindex="-1" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Agregar Sitio</h4>
                    </div>
                    <div class="modal-body">
                        <form id="siteForm">
                            <div class="inputPair">
                                <label for="name">*Nombre</label><input type="text" name="name" required />
                            </div>
                            <div class="inputPair">
                                <label for="category">*Categoria</label>
                                <select name="category" required>
                                    <option value="" selected disabled>Seleccionar categoría</option>
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
                            </div>
                            <div class="inputPair">
                                <label for="ubication">*Ubicación</label><input type="text" name="ubication" required />
                            </div>
                            <div class="inputPair">
                                <label for="description">*Descripción</label><textarea name="description" cols="30"
                                    rows="4" required></textarea>
                            </div>
                            <div class="inputPairDouble">
                                <div class="inputPair">
                                    <label for="long">*Longitud</label><input step=any type="number" name="long" id="username"
                                        required />
                                </div>
                                <div class="inputPair">
                                    <label for="lat">*Latitud</label><input step=any type="number" name="lat" required />
                                </div>
                            </div>
                            <div class="errorGlobal" id="error"></div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="buttonSec" data-dismiss="modal">Cerrar</button>
                        <button type="submit" form="siteForm" class="buttonGen" id="guardarSitioBtn">Guardar
                            Sitio</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Agregar Imágen al sitio -->
        <div class="modal fade" id="modalAgregarImg" tabindex="-1" aria-labelledby="imageLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="imageLabel">Agregar Imágen</h4>
                    </div>
                    <div class="modal-body">
                        <form id="siteImgForm">
                            <div class="inputPair">
                                <label for="ubication">*Foto del sitio</label><input type="file" accept="image/*" name="image"  id="uploadImage" required />
                            </div>
                            <div class="errorGlobal" id="error"></div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="buttonSec" data-dismiss="modal">Cerrar</button>
                        <button type="submit" form="siteImgForm" class="buttonGen" id="guardarImgBtn">Agregar Imágen</button>
                    </div>
                </div>
            </div>
        </div>

         <!-- Alerta del sitio se agrego con exito -->
        <div class="alert alert-success alertPop" role="alert" id="agregarSitioSucces">El sitio se agrego con éxito</div>

        <!--===============================================================================================-->
        <script src="src/js/sitesAdminGet.js"></script>
        <script src="src/js/sitesAdminPost.js"></script>

</body>

</html>