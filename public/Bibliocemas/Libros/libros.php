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

    <!-- especiales -->
    <link rel="stylesheet" href="../../../assets/css/scrollbar.css">
</head>

<body>
    <header>
        <h1>Bibliocemas</h1>
        <nav class="nav">
            <ul class="nav_list">
                <li><a href="../bibliocemas.php">Inicio</a></li>
                <li><a href="./libros.php">Libros</a></li>
                <li><a href="#alquilar">Alquilar</a></li>
                <li><a href="../contact_us.html">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>

<div class="modal">
    <div class="modal-content">
        <ul class="filtral__list">
            <li onclick="filtral('contabilidad')">Contabilidad</li>
            <li onclick="filtral('informatica')">Informática</li>
            <li onclick="filtral('mercadeo')">Mercadeo</li>
            <li onclick="filtral('electrisidad')">Electricidad</li>
            <li onclick="filtral('gastronomia')">Gastronomía</li>
            <li onclick="filtral('lenguaespañola')">Español</li>
            <li onclick="filtral('matematica')">Matemática</li>
            <li onclick="filtral('naturares')">Naturales</li>
            <li onclick="filtral('sociales')">Sociales</li>
        </ul>
    </div>
</div>

        <div class="books" id="books">
        </div>
        <div id="alquilar" class="alquilar">
            <form action="../../../src/views/alquilar.php" method="post">
                <label for="fullname">Nombre Complrto</label>
                <input type="text" name="fullname" id="fullname" placeholder="Nombre Completo">
                <label for="email">Correo Electronico</label>
                <input type="email" name="email" id="email" placeholder="Correo Electronico">
                <label for>Curso</label>
                <input type="text" name="course" id="course" placeholder="Curso">
                <label for="book">Nombre del Libro</label>
                <input type="text" name="book" id="book" placeholder="Nombre del Libro">
                <input type="submit" value="Enviar">
            </form>
        </div>

    </main>
    <footer>
        <p>© 2024 Bibliocemas. Todos los derechos reservados.</p>
    </footer>
    <script type="module" src="../../../assets/js/mostroFiltradoBooks.js"></script>
    <script type="module" src="../../../assets/js/showList.js"></script>

</body>

</html>