document.addEventListener('DOMContentLoaded', function () {
    const cancelButtons = document.querySelectorAll('#annuler_');
    const modal = document.querySelector('#confirmation-modal');
    const confirmYes = document.querySelector('#confirm-delete-btn');
    const confirmNo = document.querySelector('#cancel-btn');
    let formToSubmit = null;
    
    cancelButtons.forEach(button => {
        button.addEventListener('click', function (e) {
            const reservationId = this.getAttribute('data-id');
            formToSubmit = this.closest('form');
            confirmYes.closest('form').action = `/reservations/${reservationId}`;
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