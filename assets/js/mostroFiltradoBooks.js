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

function filtral(area) {
    const container = document.getElementById('books');
    container.innerHTML = ''; // Clear existing books

    // Filter books based on area
    const filteredBooks = books.filter(book => book.area === area);

    if (filteredBooks.length > 0) {
        filteredBooks.forEach(book => {
            const cart = createBooks(book);
            container.appendChild(cart);
        });
    } else {
        let noBook = document.createElement('p');
        noBook.textContent = 'No Hay Libros Disponibles En Esta Area';
        noBook.classList.add('noBook');
        container.appendChild(noBook);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const categoryList = document.querySelectorAll('.filtral__list li');
    categoryList.forEach(item => {
        item.addEventListener('click', function() {
            filtral(this.textContent.toLowerCase()); // Pass the lowercase area name to filtral
        });
    });

    // Populate books initially
    const container = document.getElementById('books');
    if (books.length > 0) {
        books.forEach(book => {
            if (book.nombre !== '') {
                const cart = createBooks(book);
                container.appendChild(cart);
            }
        });
    } else {
        console.log("No hay libros para mostrar.");
    }
});