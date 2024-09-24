// document.addEventListener('DOMContentLoaded', () => {
//     const name = document.querySelector("#name");
//     const email = document.querySelector("#email");
//     const message = document.querySelector("#message");

//     const handleChange = (event) => {
//         const { name, value } = event.target;

//         checkFields(event.target);

//         setForm(prev => {
//             return ({
//                 ...prev,
//                 [name]: value
//             })
//         });
//     }

//     const checkFields = (el) => {
//         setToastError(false);
//         if (el.nextElementSibling && el.previousElementSibling) {

//             if (el.value.length === 0) {
//                 el.nextElementSibling.textContent = (`"${el.previousElementSibling.textContent}" cannot be empty.`);
//                 setError(true);
//                 _setGood(el.name, false);
//             }
//             else if (el.name === "name" && el.value.length <= 4) {
//                 el.nextElementSibling.textContent = (`The "${el.previousElementSibling.textContent}" field must be more than 4 characters.`);
//                 setError(true);
//                 _setGood(el.name, false);
//             }
//             else if (el.name === "email" && el.value.length <= 6) {
//                 el.nextElementSibling.textContent = (`The "${el.previousElementSibling.textContent}" field must be more than 6 characters.`);
//                 setError(true);
//                 _setGood(el.name, false);

//             }
//             else if (el.name === "email") {
//                 const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//                 if (!emailRegex.test(el.value)) {
//                     el.nextElementSibling.textContent = "Please enter a valid email adress.";
//                     setError(true);
//                     _setGood(el.name, false);
//                 } else {
//                     el.nextElementSibling.textContent = "";
//                     setError(false);
//                     _setGood(el.name, true);
//                 }
//             }
//             else if (el.name === "message" && el.value.length <= 20) {
//                 el.nextElementSibling.textContent = (`The "${el.previousElementSibling.textContent}" field must be more than 20 characters.`);
//                 setError(true);
//                 _setGood(el.name, false);
//             }
//             else if (el.name === "message" && checkForForbiddenWords(el.value)) {
//                 el.nextElementSibling.textContent = "Your message contains inappropriate language. Modify it.";
//                 setError(true);
//                 _setGood(el.name, false);
//             }
//             else {
//                 el.nextElementSibling.textContent = ""
//                 setError(false);
//                 _setGood(el.name, true);
//             }
//         }

//     }

//     const _setGood = (el, bool) => {
//         switch (el) {
//             case "name": bool ? setGoodName(true) : setGoodName(false);
//                 break;
//             case "email": bool ? setGoodEmail(true) : setGoodEmail(false);
//                 break;
//             default: bool ? setGoodMessage(true) : setGoodMessage(false);
//                 break;
//         }
//     }

//     const checkForForbiddenWords = (text) => {
//         return forbiddenWords.some(word => text.toLowerCase().includes(word));
//     }

// });