document.addEventListener("DOMContentLoaded", function () {
    const modal = document.querySelector("#redirect-modal");
    const countdownElement = document.querySelector("#countdown");
    const closeModalButton = document.querySelector("#close-modal");

    let countdown = 4;
    let countdownInterval;

    // Fonction pour afficher la modal et démarrer le compte à rebours
    function showModal() {
        let contentText = "";
        countdownElement.textContent = `${countdown} secondes`;
        modal.classList.remove("hidden"); // Afficher la modal
        modal.classList.add("flex");
        countdownInterval = setInterval(() => {
            countdown--;
            if (countdown === 0) {
                clearInterval(countdownInterval);
                window.location.href = "/";
            } else if (countdown < 2) {
                contentText = `${countdown} seconde`;
            } else {
                contentText = `${countdown} secondes`;
            }

            countdownElement.textContent = contentText;
        }, 1000);
    }

    const serviceId = window.location.pathname.split('/').pop();
    if (!serviceId || isNaN(serviceId)) {
        showModal();
    }

    // Arrêter la redirection si l'utilisateur clique sur "Rester sur cette page"
    closeModalButton.addEventListener("click", () => {
        clearInterval(countdownInterval);
        modal.classList.remove("flex");
        modal.classList.add("hidden"); // Masquer la modal
    });
});

