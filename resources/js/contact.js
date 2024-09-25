import { checkFields, error, hiddenMessageWithTimeout } from "./functions";
import { messages } from "./messages";

document.addEventListener('DOMContentLoaded', () => {
    const name = document.querySelector("#name");
    const email = document.querySelector("#email");
    const message = document.querySelector("#message");

    if (name && email && message) {
        name.addEventListener('input', (e) => {
            checkFields(e.target);
        });
        email.addEventListener('input', (e) => {
            checkFields(e.target);
        });
        message.addEventListener('input', (e) => {
            checkFields(e.target);
        });

        hiddenMessageWithTimeout(name, 1500);
        hiddenMessageWithTimeout(email, 1500);
        hiddenMessageWithTimeout(message, 1500);
    }

    name.closest('form').addEventListener('submit', function (event) {
        event.preventDefault();

        if (name.value.length === 0 || email.value.length === 0 || message.value.length === 0 || error) {
            checkFields(name);
            checkFields(email);
            checkFields(message);
        } else {
            name.closest('form').submit();
        }
    });



});



