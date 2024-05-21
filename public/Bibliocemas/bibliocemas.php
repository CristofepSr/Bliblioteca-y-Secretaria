<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadatos esenciales -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliocemas</title>
    
    <!-- Favicon del sitio web -->
    <link rel="shortcut icon" href="../../assets/img/logo.png" type="image/x-icon">
    
    <!-- Archivos CSS para el estilo del sitio -->
    <link rel="stylesheet" href="../../assets/css/bibliocemas/bibliocemas.css">
    <link rel="stylesheet" href="../../assets/css/bibliocemas/carts.css">
    <link rel="stylesheet" href="../../assets/css/bibliocemas/menu.css">
    <link rel="stylesheet" href="../../assets/css/bibliocemas/footer.css">
    <link rel="stylesheet" href="../../assets/css/fonst.css">
    <link rel="stylesheet" href="../../assets/css/scrollbar.css">

    <!-- Conexiones anticipadas para mejorar la carga de fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Fuente de Google -->
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Encabezado con el menú de navegación -->
    <header class="header">
        <nav class="menu">
            <h1 class="logo_txt">Bibliocemas</h1>
            <ul class="menu_list">
                <!-- Enlaces de navegación -->
                <li>
                    <a href="../index.php">Inicio</a> <!-- Página de inicio -->
                </li>
                <li>
                    <a href="./Libros/libros.php">Libros</a> <!-- Página de libros -->
                </li>
                <li>
                    <a href="./Libros/alquilar.html">Alquilar</a> <!-- Página de alquiler -->
                </li>
                <li>
                    <a class="contact" href="./contact_us.html">Contactanos</a> <!-- Página de contacto -->
                </li>
            </ul>
        </nav>
    </header>
    
    <main>
        <!-- Sección principal con la imagen de la biblioteca -->
        <div class="biblioteca">
            <img class="biblioteca_img" src="../../assets/img/biblioteca.jpeg" alt="">
            <p>Bibliocemas</p>
        </div>

        <!-- Contenedor para los libros (se llenará dinámicamente) -->
        <div class="books" id="books">
        </div>
    </main>

    <!-- Pie de página -->
    <footer class="footer">
        <div class="containe">
            <div class="row">
                <!-- Primera columna del pie de página -->
                <div class="footer-col">
                    <h4>Bibliocemas</h4>
                    <ul>
                        <li><a href="#">Nuestra mision</a></li> <!-- Enlace a la misión -->
                        <li><a href="#">Comparte tus sugerencias</a></li> <!-- Enlace para sugerencias -->
                    </ul>
                </div>
                <!-- Segunda columna del pie de página -->
                <div class="footer-col">
                    <h4>Tienda online</h4>
                    <ul>
                        <li><a href="#">Uniformes</a></li> <!-- Enlace a la tienda de uniformes -->
                    </ul>
                </div>
                <!-- Tercera columna del pie de página -->
                <div class="footer-col">
                    <h4>Siguenos</h4>
                    <!-- Enlaces a redes sociales -->
                    <div class="social-links">
                        <a href="https://www.facebook.com/p/Centro-Educativo-Manuel-Acevedo-Serrano-F-y-A-100063508002864/?locale=es_LA" target="_blank">
                            <img src="../../assets/img/svg/facebook.svg" alt="">
                        </a>
                        <a href="https://www.instagram.com/cemas_1963/" target="_blank">
                            <img src="../../assets/img/svg/instagram.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

<!-- Script para mostrar libros (usando módulos ES6) -->
<script type="module" src="../../assets/js/mostarBooks.js"></script>

</html>
