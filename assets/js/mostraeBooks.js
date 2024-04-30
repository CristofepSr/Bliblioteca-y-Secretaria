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
    ver.textContent = "Ver";
    ver.href = book.linkVer;
    ver.setAttribute('target', '_blank');
    cart_description.appendChild(ver);

    return cart;
}

const container = document.getElementById('books');

// Verificar si hay libros para mostrar antes de ejecutar el forEach
if (books.length > 0) {
    books.forEach(book => {
        if (book.nombre !== '') {
            const cart = createBooks(book);
            container.appendChild(cart);
        }
    });
} else {
    // Si no hay libros, mostrar un mensaje o realizar alguna acción apropiada
    console.log("No hay libros para mostrar.");
}

function filtral(areas){
    container.innerHTML = '';

    const filtarBooks = books.filtet(books => books.area == areas);

    filtarBooks.forEach(book => {
        if (book.nombre !== '') {
            const cart = createBooks(book);
            container.appendChild(cart);
        }
    });
}