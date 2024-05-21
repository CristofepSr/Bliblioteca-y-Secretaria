<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/fonst.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
<header class="menu">
    <img src="../assets/img/logo.png" alt="">
    <nav class="navbar">
        <ul class="navbar__list">
            <li class="navbar__item">
                <a href="./admin/admin.php">Inicio</a>
            </li>
            <li class="navbar__item">
                <a href="./Bibliocemas/bibliocemas.php">Bibliocemas</a>
            </li>
            <li class="navbar__item">
                <a href="./Secretaria/secretaria.php">Secretaria</a>
            </li>
            <li class="navbar__item">
                <?php
                if (isset($_SESSION['username'])) {
                        echo '<div class="dropdown">
                        <span>'. $_SESSION['username']. '</span>
                        <ul>
                            <li><a href="./user-settings/config.php">Configuración</a></li>
                            <li><a href="../src/views/logout.php">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                    
                ';
                } else {
                    echo '<a href="./auth/login.php">Iniciar sesión</a>';
                }
                ?>
            </li>
            <a href=""></a>
        </ul>
    </nav>
</header>


</body>

</html>