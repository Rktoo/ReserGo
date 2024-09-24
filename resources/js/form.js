document.getElementById('price').addEventListener('input', function (e) {
    let value = e.target.value;

    // Permet uniquement les chiffres et les décimales
    value = value.replace(/[^0-9.]/g, '');
    
    // Gérer le cas où il y a plusieurs points
    let parts = value.split('.');
    if (parts.length > 2) {
        value = parts[0] + '.' + parts.slice(1).join('');
    }
    
    // Limiter les décimales à 2 chiffres
    if (parts[1] && parts[1].length > 2) {
        value = parts[0] + '.' + parts[1].slice(0, 2);
    }
    
    e.target.value = value;
});

