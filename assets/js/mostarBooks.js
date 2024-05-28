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
    ver.textContent = "Ver Libro";
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