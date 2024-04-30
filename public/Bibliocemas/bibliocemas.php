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
    <link rel="stylesheet" href="../../assets/css/bibliocemas/footer.css">

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

        <div class="books" id="books">
        </div>



<!-- Este es el pie de pagina -->

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
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Tienda online</h4>
                    <ul>
                        <li><a href="#">Uniformes</a></li>
                      
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>
 


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

    books.forEach(book => {
        if (books.length > 0)
            if (book.nombre !== '') {
                const cart = createBooks(book);
                container.appendChild(cart);
            }
        }); 
</script>

</body>
</html>