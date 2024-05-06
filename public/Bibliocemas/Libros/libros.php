<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link rel="shortcut icon" href="../../../assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/bibliocemas/libros.css">
    <link rel="stylesheet" href="../../../assets/css/bibliocemas/carts.css">
    <link rel="stylesheet" href="../../../assets/css/bibliocemas/menu.css">
    <link rel="stylesheet" href="../../../assets/css/bibliocemas/footer.css">

    <!-- especiales -->
    <link rel="stylesheet" href="../../../assets/css/fonst.css">
    <link rel="stylesheet" href="../../../assets/css/scrollbar.css">
</head>

<body>
    <header class="header">
        <nav class="menu">
            <h1 class="logo_txt">Bibliocemas</h1>
            <ul class="menu_list">
                <li>
                    <a href="../bibliocemas.php">Inicio</a>
                </li>
                <li>
                    <a href="./libros.php">Libros</a>
                </li>
                <li>
                    <a href="./alquilar.html">Alquilar</a>
                </li>
                <li>
                    <a href="../contact_us.html">Contact Us</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="filtral">
            <ul class="filtral__list">
                <li onclick="filtral('contabilidad')">Contabilidad</li>
                <li onclick="filtral('informatica')">Informatica</li>
                <li onclick="filtral('mercadeo')">Mercadeo</li>
                <li onclick="filtral('electrisidad')">Electrisidad</li>
                <li onclick="filtral('gastronomia')">Gastronomia</li>
                <li onclick="filtral('lenguaespañola')">Lengua Española</li>
                <li onclick="filtral('matemática')">Matemática</li>
                <li onclick="filtral('naturares')">Naturares</li>
                <li onclick="filtral('sociales')">Sociales</li>
            </ul>
        </div>

        <div class="books" id="books">
        </div>

    </main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Bibliocemas</h4>
                    <ul>
                        <li><a href="#">Nuestra mision</a></li>
                        <li><a href="#">Comparte tus sugerencias</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Tienda online</h4>
                    <ul>
                        <li><a href="#">Uniformes</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Siguenos</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/p/Centro-Educativo-Manuel-Acevedo-Serrano-F-y-A-100063508002864/?locale=es_LA" target="_blank"><img src="../../../assets/img/svg/facebook.svg" alt=""></a>
                        <a href="https://www.instagram.com/cemas_1963/" target="_blank"><img src="../../../assets/img/svg/instagram.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="module" src="../../../assets/js/mostroFiltradoBooks.js"></script>

</body>

</html>