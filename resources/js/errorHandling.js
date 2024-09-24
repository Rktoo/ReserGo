let errors = document.querySelectorAll("#errors_");

if (errors)
{
    errors.forEach(error => {
        const t = setInterval(() => {
            error.setAttribute("class", "hidden")
        }, 1500);
        return () => {
            clearInterval(t);
        }
    })
}