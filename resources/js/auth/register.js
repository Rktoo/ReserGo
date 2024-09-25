import { checkFields, error, hiddenMessageWithTimeout } from "../functions";

document.addEventListener('DOMContentLoaded', () => {
    const name = document.querySelector("#name");
    const email = document.querySelector("#email");
    const password = document.querySelector("#password");
    const passwordConfirmation = document.querySelector("#password_confirmation");

    if (name && email && password && passwordConfirmation) {
        name.addEventListener('input', (e) => {
            checkFields(e.target);
        });
        email.addEventListener('input', (e) => {
            checkFields(e.target);
        });
        password.addEventListener('input', (e) => {
            checkFields(e.target);
        });
        passwordConfirmation.addEventListener('input', (e) => {
            checkFields(e.target);
        });

        hiddenMessageWithTimeout(name, 1500);
        hiddenMessageWithTimeout(email, 1500);
        hiddenMessageWithTimeout(password, 1500);
        hiddenMessageWithTimeout(passwordConfirmation, 1500);
    }

    email.closest('form').addEventListener('submit', function (event) {
        event.preventDefault();

        if (name.value.trim().length === 0 || email.value.trim().length === 0 || password.value.trim().length === 0 || passwordConfirmation.value.trim().lenght === 0 || error) {
            checkFields(name);
            checkFields(email);
            checkFields(password);
            checkFields(passwordConfirmation);
        } else {
            email.closest('form').submit();
        }
    });



});



