import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
function focusBook(event) {
    // Reset all books to their normal size and z-index
    document.querySelectorAll('#carousel .book').forEach(book => {
        book.classList.remove('scale-125', 'z-10');
    });

    // Scale up the clicked book and bring it to the front
    event.currentTarget.classList.add('scale-400', 'z-20');
}

