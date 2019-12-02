<?php 
    $myId=$_SESSION['login_user'];
?>

<header>
    <h1>Sitios Turísticos</h1>

    <nav>
        <a href="index.php">Sitios</a>
        <a href="profile.php?id=<?php echo $myId; ?>">Mi perfil</a>
        <a href="contacts.php">Contactos</a>
        <a href ="config/logout.php">Cerrar Sesión</a>
    </nav>
</header>