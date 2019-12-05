<?php 
    $myId=$_SESSION['login_user'];
?>

<header>
    <div class="logo">
        <a href="index"><img src="./src/images/sitiosLogoBlanco.png" alt="Sitios Turísticos"></a>
    </div>
    <div class="navContainer">
      <nav>
          <a href="index" class="effect-underline"><span class="glyphicon glyphicon-tag"></span>Sitios</a>
          <a href="contacts" class="effect-underline"><span class="glyphicon glyphicon-book"></span>Contactos</a>
          <?php
              if ($privilege == 'administrador') {
                echo '<a href="admin" class="effect-underline"><span class="glyphicon glyphicon-cog"></span> Admin</a>';
              }
          ?>
      </nav>
      <div class="dropdown">
            <a class="effect-underline" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Perfil <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="profile?id=<?php echo $myId; ?>">Tu Perfil</a></li>
              <li><a href ="config/logout">Cerrar Sesión</a></li>
            </ul>
      </div>
    </div>
</header>