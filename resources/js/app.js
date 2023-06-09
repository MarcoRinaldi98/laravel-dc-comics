import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const deleteBtns = document.querySelectorAll('.delete-btn');

deleteBtns.forEach(btn => {
    btn.addEventListener('click', event => {
        event.preventDefault();

        const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
        modal.show();

        document.getElementById('delete').addEventListener('click', () => {
            btn.parentElement.submit();
        });
    });
});

/* Versione con confirm()
deleteBtns.forEach(btn => {
    btn.addEventListener('click', event => {
        event.preventDefault();

        const userResponse = confirm("Sei sicuro di voler eliminare l'elemento selezionato?");

        if (userResponse) {
            btn.parentElement.submit();
        }
    });
});
*/