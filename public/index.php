<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamento de Secretaría y Bibliocemas</title>
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <header>
        <h1>Departamento de Secretaría y Bibliocemas</h1>
        <nav class="nav">
            <ul class="nav_list">
                <li><a href="./index.php">Inicio</a></li>
                <li><a href="#departamentos">Departamentos</a></li>
                <li><a href="#equipo">Equipo</a></li>
                <li>
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo '<div class="dropdown">
                        <span>' . $_SESSION['username'] . '</span>
                        <ul>
                            <li><a href="./admin/admin.php">Admin</a></li>
                            <li><a href="../src/views/logout.php">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                    
                ';
                    } else {
                        echo '<a href="./auth/login.php">Iniciar sesión</a>';
                    }
                    ?>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="departamentos" class="departamentos">
            <h2>Departamentos</h2>
            <div class="areas">
                <div class="area">
                    <a href="./Secretaria/secretaria.php">
                        <img src="../assets/img/secretaria.jpg" alt="Secretaria">
                        <h3>Secretaria</h3>
                    </a>
                </div>
                <div class="area">
                    <a href="./Bibliocemas/bibliocemas.php">
                        <img src="../assets/img/bibliocemas.jpg" alt="Bibliocemas">
                        <h3>Bibliocemas</h3>
                    </a>
                </div>
            </div>
        </section>


        <section id="equipo" class="equipo">
            <h2>Equipo De Desarrollo</h2>
            <div class="members">
                <article class="member">
                    <div class="info">
                        <img src="https://i.postimg.cc/xjp9Jbfx/Aurora-Coronado.jpg" alt="">
                        <div class="text">
                            <h3>Fulano de Tal</h3>
                            <p><strong>Cargo:</strong> Product Owner</p>
                        </div>
                    </div>
                </article>
                <article class="member">
                    <div class="info">
                        <img src="https://i.postimg.cc/xjp9Jbfx/Aurora-Coronado.jpg" alt="">
                        <div class="text">
                            <h3>Fulano de Tal</h3>
                            <p><strong>Cargo:</strong>Development</p>
                        </div>
                    </div>
                </article>
                <article class="member">
                    <div class="info">
                        <img src="https://i.postimg.cc/xjp9Jbfx/Aurora-Coronado.jpg" alt="">
                        <div class="text">
                            <h3>Fulano de Tal</h3>
                            <p><strong>Cargo:</strong>Development</p>
                        </div>
                    </div>
                </article>
                <article class="member">
                    <div class="info">
                        <img src="https://i.postimg.cc/xjp9Jbfx/Aurora-Coronado.jpg" alt="">
                        <div class="text">
                            <h3>Fulano de Tal</h3>
                            <p><strong>Cargo:</strong> Scrum Master</p>
                        </div>
                    </div>
                </article>
                <article class="member">
                    <div class="info">
                        <img src="https://i.postimg.cc/xjp9Jbfx/Aurora-Coronado.jpg" alt="">
                        <div class="text">
                            <h3>Fulano de Tal</h3>
                            <p><strong>Cargo:</strong>Development</p>
                        </div>
                    </div>
                </article>
                <article class="member">
                    <div class="info">
                        <img src="https://i.postimg.cc/xjp9Jbfx/Aurora-Coronado.jpg" alt="">
                        <div class="text">
                            <h3>Fulano de Tal</h3>
                            <p><strong>Cargo:</strong>Development</p>
                        </div>
                    </div>
                </article>
            </div>

        </section>


    </main>
    <footer>
        <p>© 2024 Departamento de Secretaría y Bibliocemas. Todos los derechos reservados.</p>
    </footer>

</html>