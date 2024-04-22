<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliocemas</title>
    <link rel="shortcut icon" href="../../assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/bibliocemas/bibliocemas.css">
    <link rel="stylesheet" href="../../assets/css/fonst.css">
    <link rel="stylesheet" href="../../assets/css/scrollbar.css">
</head>
<body>
    <header class="header">
        <nav class="menu">
            <img src="../assets/img/logo.png" alt="">
            <ul class="menu_list">
                <li>
                    <a href="../index.php">Home</a>
                </li>
                <li>
                    <a href="#">Libros</a>
                </li>
                <li>
                    <a href="#alquilar">Alquielar</a>
                </li>
                <li>
                    <a href="#">Uniformes</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="bibliot">
            <img src="https://concepto.de/wp-content/uploads/2015/03/biblioteca-e1550105787397-800x400.jpg" alt="">
            <p>Bibliocemas</p>
        </div>
        <div class="book_container">
            <div class="books">
                <img class="book_portada" src="https://grajedamena.ufm.edu/wp-content/uploads/2019/05/el-senor-presidente_rjdqtn.jpg" alt="#">
                <p class="book_titulo">Titulo</p>
            </div>
            <div class="books">
                <img class="book_portada" src="https://grajedamena.ufm.edu/wp-content/uploads/2019/05/el-senor-presidente_rjdqtn.jpg" alt="#">
                <p class="book_titulo">Titulo</p>
            </div>
            <div class="books">
                <img class="book_portada" src="https://grajedamena.ufm.edu/wp-content/uploads/2019/05/el-senor-presidente_rjdqtn.jpg" alt="#">
                <p class="book_titulo">Titulo</p>
            </div>
            <div class="books">
                <img class="book_portada" src="https://grajedamena.ufm.edu/wp-content/uploads/2019/05/el-senor-presidente_rjdqtn.jpg" alt="#">
                <p class="book_titulo">Titulo</p>
            </div>
            <div class="books">
                <img class="book_portada" src="https://grajedamena.ufm.edu/wp-content/uploads/2019/05/el-senor-presidente_rjdqtn.jpg" alt="#">
                <p class="book_titulo">Titulo</p>
            </div>
            <div class="books">
                <img class="book_portada" src="https://grajedamena.ufm.edu/wp-content/uploads/2019/05/el-senor-presidente_rjdqtn.jpg" alt="#">
                <p class="book_titulo">Titulo</p>
            </div>
        </div>

        <div class="alquilar" id="alquilar">
            <div class="descriptioon_alquilar">
                <h2>Alquilar Libros</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus voluptas, adipisci voluptatem ipsum dolorum eius! Rem veniam aliquid, eum ullam eaque culpa consequatur porro nobis tempore? Vitae, repellat? Aut, sequi.</p>
            </div>
            <div class="form_alquilar">
                <form action="#" method="post">
                    <label for="fullname">nombre completo:</label>
                    <input type="text" name="fullname" id="fullname" require placeholder="Nombre Completo">
                    <label for="email">Correo Electronico:</label>
                    <input type="email" name="email" id="email" require placeholder="correo Electronico">
                    <label for="curso">curso:</label>
                    <input type="text" name="curso" id="curso" require placeholder="Curso">
                    <label for="book">nombre del libro:</label>
                    <input type="text" name="book" id="book" require placeholder="Introdusca el nombre del Libro">
                    <button type="submit">Alquilar</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>