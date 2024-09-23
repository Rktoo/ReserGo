document.addEventListener('DOMContentLoaded', function () {
    const changeNameCheckbox = document.getElementById('changeNameCheckbox');
    const nameField = document.getElementById('nameField');
    const changePasswordCheckbox = document.getElementById('changePasswordCheckbox');
    const passwordFields = document.getElementById('passwordFields');
    const btnSubmit = document.querySelector('#submitbtn_');
    const inputCheckBox = document.querySelectorAll("input[type='checkbox']");
    const deleteAccount = document.querySelector("#deleteAccount_");


    // Fonction pour afficher ou cacher les champs selon l'état des checkbox
    function toggleFields() {
        nameField.classList.toggle('hidden', !changeNameCheckbox.checked);
        passwordFields.classList.toggle('hidden', !changePasswordCheckbox.checked);
        document.querySelectorAll('.submit').forEach((btn) => {
            if (btn.textContent.includes("le nom")) {
                btn.classList.toggle('bg-gray-400', !changeNameCheckbox.checked)
                btn.classList.toggle('hover:bg-gray-500', !changeNameCheckbox.checked)
                if (btn.classList.contains('bg-gray-400')) {
                    btn.disabled = true;
                } else {
                    btn.disabled = false;

                }
            }
            else if (btn.textContent.includes("le mot de passe")) {
                btn.classList.toggle('bg-gray-400', !changePasswordCheckbox.checked)
                btn.classList.toggle('hover:bg-gray-500', !changePasswordCheckbox.checked)
                if (btn.classList.contains('bg-gray-400')) {
                    btn.disabled = true;
                } else {
                    btn.disabled = false;

                }
            }
            else {
                return;
            }
        });
    }

    // Fonction pour activer ou désactiver le bouton de soumission
    function disableForm(btn) {
        // Vérifier si au moins une case est cochée
        const isAnyChecked = changeNameCheckbox.checked || changePasswordCheckbox.checked;
        btnSubmit.disabled = !isAnyChecked; // Désactive le bouton si aucune case n'est cochée
    }

    // Initialiser l'état des champs et du bouton au chargement
    toggleFields();
    disableForm();

    // Ajouter les écouteurs d'événements sur les checkbox
    inputCheckBox.forEach(function (inputC) {
        inputC.addEventListener('change', function () {
            toggleFields(); // Afficher/cacher les champs selon la checkbox
            disableForm();  // Activer/désactiver le bouton de soumission
        });
    });


    // Ouverture de la modale pour suppression de compte 
    deleteAccount.addEventListener('click', function () {

    });
});
