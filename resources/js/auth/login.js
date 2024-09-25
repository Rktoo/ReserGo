import { checkFields, error, hiddenMessageWithTimeout } from "../functions";

document.addEventListener('DOMContentLoaded', () => {
    const email = document.querySelector("#email");
    const password = document.querySelector("#password");


    if (email && password) {
        email.addEventListener('input', (e) => {
            checkFields(e.target);
        });
        password.addEventListener('input', (e) => {
            checkFields(e.target);
        });

        hiddenMessageWithTimeout(email, 1500);
        hiddenMessageWithTimeout(password, 1500);
    }

    email.closest('form').addEventListener('submit', function (event) {
        event.preventDefault();

        if (email.value.length === 0 || password.value.length === 0 || error) {
            checkFields(email);
            checkFields(password);
        } else {
            email.closest('form').submit();
        }
    });


});



