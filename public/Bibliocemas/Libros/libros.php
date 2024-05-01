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
    <link rel="stylesheet" href="../../../assets/css/fonst.css">
    <link rel="stylesheet" href="../../../assets/css/scrollbar.css">
</head>
<body>
    <header class="header">
        <nav class="menu">
            <img src="../../../assets/img/logo.png" alt="">
            <ul class="menu_list">
                <li>
                    <a href="../bibliocemas.php">Home</a>
                </li>
                <li>
                    <a href="./libros.php">Libros</a>
                </li>
                <li>
                <a href="./alquilar.html">Alquilar</a>
                </li>
                <li>
                <a href="../contact us.html">Contact Us</a>
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
    <script type="module" src="../../../assets/js/mostroFiltradoBooks.js"></script>

</body>
</html>
