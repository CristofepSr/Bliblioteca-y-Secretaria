<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check in</title>
    <link rel="shortcut icon" href="../../assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/auth/sign_in.css">

    <link rel="stylesheet" href="../../assets/css/fonst.css">
    <link rel="stylesheet" href="../../assets/css/scrollbar.css">
</head>

<body>
    <header class="menu">
        <img src="../../assets/img/logo.png" alt="">
        <nav class="navbar">
            <ul class="navbar__list">
                <li class="navbar__item">
                    <a href="../index.php">Inicio</a>
                </li>
                <li class="navbar__item">
                    <a href="../Bibliocemas/bibliocemas.php">Bibliocemas</a>
                </li>
                <li class="navbar__item">
                    <a href="../Secretaria/secretaria.php">Secretaria</a>
                </li>
                <li class="navbar__item">
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo '<div class="dropdown">
                        <span>' . $_SESSION['username'] . '</span>
                        <ul>
                            <li><a href="./user-settings/config.php">Configuración</a></li>
                            <li><a href="../../src/views/logout.php">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                    
                ';
                    } else {
                        echo '<a href="../auth/login.php">Iniciar sesión</a>';
                    }
                    ?>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <form class="form_in" action="../../src/views/login.php" method="post">
                <label for="username">Nombre:</label>
                <input type="text" name="username" id="username" placeholder="Nombre" require>
                <label for="password">Contraseña:</label>
                <div class="password-container">
                    <input type="password" name="password" id="password" placeholder="Contraseña" require>
                    <input type="checkbox" name="seepassword" id="seepassword">
                    <label for="seepassword" class="seepassword">Mostrar Contraseña</label>
                </div>
                <input type="submit" value="Check in">

                <p class="">No tengo una cuenta <a href="./registro.php">Registrarme</a></p>
            </form>
        </div>
    </main>
    <script src="../../assets/js/seepassword.js"></script>
</body>

</html>