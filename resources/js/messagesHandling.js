let messages = document.querySelectorAll("#messages_");

if (messages) {
    messages.forEach(message => {
        const t = setInterval(() => {
            message.setAttribute("class", "hidden")
        }, 2500);
        return () => {
            clearInterval(t);
        }
    })
}