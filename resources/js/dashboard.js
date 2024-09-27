document.addEventListener('DOMContentLoaded', function () {
    const cancelButtons = document.querySelectorAll('#annuler_');
    const modal = document.querySelector('#confirmation-modal');
    const confirmYes = document.querySelector('#confirm-delete-btn');
    const confirmNo = document.querySelector('#cancel-btn');
    let formToSubmit = null;

    let currentUrl = "";

    switch (window.location.pathname) {
        case "/dashboard": currentUrl = "dashboard/reservations/";
            break;
        case "/reservations": currentUrl = "reservations/delete/";
            break;
        default: currentUrl = "services/"
            break;
    }

    cancelButtons.forEach(button => {
        button.addEventListener('click', function (e) {
            const reservationId = this.getAttribute('data-id');
            confirmYes.closest('form').setAttribute('action', `${currentUrl}${reservationId}`);
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        });
    });

    confirmYes.addEventListener('click', function () {
        if (formToSubmit) {
            formToSubmit.submit();
        }
    });

    confirmNo.addEventListener('click', function () {
        modal.classList.remove('flex');
        modal.classList.add('hidden');
        formToSubmit = null;
    });
});