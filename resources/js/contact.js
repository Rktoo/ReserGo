document.addEventListener('DOMContentLoaded', () => {
    const name = document.querySelector("#name");
    const email = document.querySelector("#email");
    const message = document.querySelector("#message");
    let error = true;
    let langAttribute = document.documentElement.firstElementChild.parentElement.getAttribute("lang");

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

    function checkFields(el) {
        // setToastError(false);
        if (el.nextElementSibling && el.previousElementSibling) {
            if (el.value.length === 0) {
                el.nextElementSibling.textContent = (`"${el.previousElementSibling.textContent}" cannot be empty.`);
                error = true;
                // setError(true);
                // _setGood(el.name, false);
            }
            else if (el.name === "name" && el.value.length <= 4) {
                console.log(el.name)
                el.nextElementSibling.textContent = (`The "${el.previousElementSibling.textContent}" field must be more than 4 characters.`);
                error = true;
                // setError(true);
                // _setGood(el.name, false);
            }
            else if (el.name === "email" && el.value.length <= 6) {
                el.nextElementSibling.textContent = (`The "${el.previousElementSibling.textContent}" field must be more than 6 characters.`);
                error = true;
                // setError(true);
                // _setGood(el.name, false);

            }
            else if (el.name === "email") {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(el.value)) {
                    el.nextElementSibling.textContent = "Please enter a valid email adress.";
                    error = true;
                    // setError(true);
                    // _setGood(el.name, false);
                } else {
                    el.nextElementSibling.textContent = "";
                    error = false;
                    // setError(false);
                    // _setGood(el.name, true);
                }
            }
            else if (el.name === "message" && el.value.length <= 20) {
                el.nextElementSibling.textContent = (`The "${el.previousElementSibling.textContent}" field must be more than 20 characters.`);
                error = true;
                // setError(true);
                // _setGood(el.name, false);
            }
            else if (el.name === "message" && checkForForbiddenWords(el.value)) {
                el.nextElementSibling.textContent = "Your message contains inappropriate language. Modify it.";
                error = true;
                // setError(true);
                // _setGood(el.name, false);
            }
            else {
                el.nextElementSibling.textContent = ""
                error = false;
                // setError(false);
                // _setGood(el.name, true);
            }
        }

    }
    const checkForForbiddenWords = (text) => {
        return forbiddenWords.some(word => text.toLowerCase().includes(word));
    };
    const forbiddenWords = [
        "abusif",
        "argent",
        "arrogant",
        "bête",
        "bouffon",
        "casse-couilles",
        "con",
        "connard",
        "crétin",
        "détestable",
        "débile",
        "enfoiré",
        "idiot",
        "imbécile",
        "incompétent",
        "insulte",
        "merde",
        "mauvais",
        "nazi",
        "pute",
        "raciste",
        "salopard",
        "sale",
        "vulgaire",
        "abuse",
        "asshole",
        "bastard",
        "bitch",
        "bloody",
        "bullshit",
        "cunt",
        "dick",
        "douchebag",
        "fuck",
        "goddamn",
        "hell",
        "idiot",
        "motherfucker",
        "nigga",
        "prick",
        "pussy",
        "retard",
        "shit",
        "slut",
        "twat",
        "vagina",
        "whore",
        "sôkôlô",
        "fanjakana",
        "ratsy",
        "bevohoka",
        "vovoka",
        "tsimoka",
        "ambodivava",
        "dahalo",
        "mpisasy",
        "mijaly",
        "harerahana",
        "fanina",
        "hatahorana",
        "mampiady",
        "maloto",
        "vato",
        "lahy",
        "mba",
        "azoko",
        "babo",
        "mpiaro",
        "mampitady",
        "fory",
        "lely",
        "dondrona",
        "lataka",
        "vody",
        "vendrana",
        "adala",
        "pory",
        "kindy",
        "kimason",
        "vendram",
        "connard",
        "connasse",
        "pute",
        "salope",
        "enculé",
        "salope",
        "casse-couilles",
        "fils de pute",
        "merde",
        "putain",
        "trou du cul",
        "vieux con",
        "baltringue",
        "bâtard",
        "bouffon",
        "caca",
        "cagué",
        "cul",
        "déconner",
        "gros con",
        "merdeux",
        "nase",
        "niquer",
        "pédé",
        "pouffiasse",
        "raclure",
        "salopard",
        "tapette",
        "tarlouze",
        "taré",
        "tête de con",
        "viande de bête",
        "zgeg",
        "kéké",
        "débile",
        "idiot",
        "bête",
        "abruti",
        "crétin",
        "andouille",
        "boulet",
        "morveux",
        "niais",
        "poulet",
        "schizo",
        "squelette",
        "vieux débris",
        "zéro",
        "débile mental",
        "mémé",
        "débile",
        "foutoir",
        "gaulois",
        "indigène",
        "raclure",
        "schizo",
        "squelette",
        "taré",
        "vieux débris",
        "vieux con",
        "débile mental",
        "foutre",
        "gland",
        "gros c**",
        "pignouf",
        "putois",
        "puceau",
        "raclure de bidet",
        "raclure de fond de tiroir",
        "singe",
        "souris",
        "tête de gland",
        "tête de mule",
        "tête de pioche",
        "tête de turc",
        "vieux con",
        "motherfucker",
        "nigga",
        "nigger",
        "piss",
        "prick",
        "pussy",
        "shit",
        "slut",
        "son of a bitch",
        "twat",
        "wanker",
        "whore",
        "bastard",
        "cocksucker",
        "cum",
        "dickhead",
        "dildo",
        "fistfuck",
        "fistfucker",
        "gook",
        "homo",
        "kike",
        "mofo",
        "muthafucka",
        "nipple",
        "pimp",
        "queer",
        "retard",
        "skank",
        "spic",
        "tits",
        "trollop",
        "wop",
        "bimbo",
        "cuntface",
        "douche",
        "fag",
        "faggy",
        "fucktard",
        "fuk",
        "jackass",
        "pussyface",
        "shithead",
        "slag",
        "smegma",
        "tosser",
        "twatface",
        "wank",
        "wanker",
        "whore"
    ];

});



