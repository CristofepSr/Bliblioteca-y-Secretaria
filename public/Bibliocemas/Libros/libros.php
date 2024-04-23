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
                    <a href="#alquilar">Alquilar</a>
                </li>
                <li>
                    <a href="#">Uniformes</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="libs">
            <img src="https://img.freepik.com/foto-gratis/abundante-coleccion-libros-antiguos-estantes-madera-generados-ia_188544-29660.jpg" alt="Libs">
            <p>Libros</p>
        </div>

    <div class="books" id="books">
    </div>

</div>
    </main>
    <script type="module">
    import books from '../../../assets/js/libros.js';

    function createBooks(book) {
        const cart = document.createElement('div');
        cart.classList.add('cart');
        
        if (book.portada) {
            const img = document.createElement('img');
            img.src = book.portada;
            cart.appendChild(img);
        }

        const cart_description = document.createElement('div');
        cart_description.classList.add('cart_description')
        cart.appendChild(cart_description)

        const name = document.createElement('p');
        name.textContent = book.nombre;
        name.classList.add('title');
        cart_description.appendChild(name);

        const ver = document.createElement('a');
        ver.textContent = "Ver"; // Set appropriate text for the link
        ver.href = book.linkVer; // Set href attribute for the link
        cart_description.appendChild(ver);

        const descargar = document.createElement('a');
        descargar.textContent = "Descargar"; // Set appropriate text for the link
        descargar.href = book.linkDescargar; // Set href attribute for the link
        cart_description.appendChild(descargar);

        return cart;
    }

    const container = document.getElementById('books');

    books.forEach(book => {
        if (book.nombre !== '') {
            const cart = createBooks(book);
            container.appendChild(cart);
        }
    });        
</script>

</body>
</html>
