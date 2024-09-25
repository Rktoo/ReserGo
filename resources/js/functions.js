import { forbiddenWords } from "./forbiddenWords";
import { messages } from "./messages";

let langAttribute = document.documentElement.getAttribute("lang");
let lang = langAttribute || 'en';
export let error = true;

export function checkFields(el) {
    const fieldLabel = el.previousElementSibling.textContent;

    if (el.nextElementSibling && el.previousElementSibling) {
        if (el.nextElementSibling.classList.contains("text-green-400")) {
            el.nextElementSibling.classList.replace("text-green-400", "text-red-400");
        } else {
            el.nextElementSibling.classList.add("text-red-400");
        }

        if (el.value.length === 0) {
            el.nextElementSibling.textContent = messages[lang].required.replace('{field}', fieldLabel);
            error = true;
        } else if (el.name === "name" && el.value.trim().length <= 4) {
            el.nextElementSibling.textContent = messages[lang].name_length.replace('{field}', fieldLabel);
            error = true;
        } else if (el.name === "email" && el.value.trim().length <= 6) {
            el.nextElementSibling.textContent = messages[lang].email_length.replace('{field}', fieldLabel);
            error = true;
        } else if (el.name === "email") {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(el.value)) {
                el.nextElementSibling.textContent = messages[lang].invalid_email;
                error = true;
            } else {
                el.nextElementSibling.classList.replace("text-red-400", "text-green-400")
                el.nextElementSibling.textContent = "Excellent";
            }
        } else if (el.name === "message" && el.value.trim().length <= 20) {
            el.nextElementSibling.textContent = messages[lang].message_length.replace('{field}', fieldLabel);
            error = true;
        } else if (el.name === "password" && el.value.trim().length <= 7) {
            el.nextElementSibling.textContent = messages[lang].password_length.replace('{field}', fieldLabel);
            error = true;
        } else if (el.name === "password_confirmation" && el.value.trim().length <= 8) {
            if (document.querySelector("#password").value.trim() !== el.value.trim()) {
                el.nextElementSibling.textContent = messages[lang].password_confirmation;
                error = true;
            } else {
                el.nextElementSibling.textContent = "";
                error = false;
            }
        } else if (el.name === "message" && checkForForbiddenWords(el.value)) {
            el.nextElementSibling.textContent = messages[lang].inappropriate_message;
            error = true;
        } else {
            el.nextElementSibling.classList.replace("text-red-400", "text-green-400")
            el.nextElementSibling.textContent = "Excellent";
            error = false;
        }
    }

}
export const checkForForbiddenWords = (text) => {
    return forbiddenWords.some(word => text.toLowerCase().includes(word));
};


export const hiddenMessageWithTimeout = (el, timeOut) => {
    const laravelMessage = el.nextElementSibling.nextElementSibling
    if (laravelMessage) {
        laravelMessage.classList.add("flex");
        const t = setTimeout(() => {
            laravelMessage.classList.replace("flex", "hidden");
        }, timeOut);
        return () => {
            clearTimeout(t);
        }
    }
}