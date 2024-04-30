<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliocemas</title>
    <link rel="shortcut icon" href="../../assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/bibliocemas/bibliocemas.css">
    <link rel="stylesheet" href="../../assets/css/bibliocemas/carts.css">
    <link rel="stylesheet" href="../../assets/css/bibliocemas/menu.css">
    <link rel="stylesheet" href="../../assets/css/fonst.css">
    <link rel="stylesheet" href="../../assets/css/scrollbar.css">
</head>
<body>
    <header class="header">
        <nav class="menu">
            <img src="../../assets/img/logo.png" alt="">
            <ul class="menu_list">
                <li>
                    <a href="../index.php">Home</a>
                </li>
                <li>
                    <a href="./Libros/libros.php">Libros</a>
                </li>
                <li>
                    <a href="#alquilar">Alquielar</a>
                </li>
                <li>
                    <a href="#">Contact Us</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="bibliot">
            <img src="https://concepto.de/wp-content/uploads/2015/03/biblioteca-e1550105787397-800x400.jpg" alt="">
            <p>Bibliocemas</p>
        </div>

        <div class="books" id="books">
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
<script type="module">
    import books from '../../assets/js/libros.js'

    function createBooks(book) {
        const randomIndex = Math.floor(Math.random() * books.length);
        const bookRandom = books[randomIndex];
        const cart = document.createElement('div');
        cart.classList.add('cart');
        
        if (book.portada) {
            const img = document.createElement('img');
            img.src = bookRandom.portada;
            cart.appendChild(img);
        }

        const cart_description = document.createElement('div');
        cart_description.classList.add('cart_description')
        cart.appendChild(cart_description)

        const name = document.createElement('p');
        name.textContent = bookRandom.nombre;
        name.classList.add('title');
        cart_description.appendChild(name);

        const ver = document.createElement('a');
        ver.textContent = "Ver"; 
        ver.href = bookRandom.linkVer;
        ver.setAttribute('target', '_blank');
        cart_description.appendChild(ver);


        return cart;
    }

    const container = document.getElementById('books');

    const maxIterations = 9;
for (let i = 0; i < maxIterations && i < books.length; i++) {
    const book = books[i];
    if (book.nombre !== '') {
        const cart = createBooks(book);
        container.appendChild(cart);
    }
}

</script>

</body>
</html>