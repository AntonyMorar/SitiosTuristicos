<?php 
    $myId=$_SESSION['login_user'];
?>

<header>
    <div class="logo">
        <a href="index.php"><img src="./src/images/sitiosLogoBlanco.png" alt="Sitios Turísticos"></a>
    </div>
    <div class="navContainer">
      <nav>
          <a href="index.php" class="effect-underline"><span class="glyphicon glyphicon-tag"></span>Sitios</a>
          <a href="contacts.php" class="effect-underline"><span class="glyphicon glyphicon-book"></span>Contactos</a>
          <?php
              if ($privilege == 'administrador') {
                echo '<a href="admin.php" class="effect-underline"><span class="glyphicon glyphicon-cog"></span> Admin</a>';
              }
          ?>
      </nav>
      <div class="dropdown">
            <a class="effect-underline" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Perfil <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="profile.php?id=<?php echo $myId; ?>">Tu Perfil</a></li>
              <li><a href ="config/logout.php">Cerrar Sesión</a></li>
            </ul>
      </div>
    </div>
</header>