const email = document.getElementById("email");

email.addEventListener("input", function(event) {
    if (email.validity.typeMismatch) {
        email.setCustomValidity("¡Se esperaba una dirección de correo electrónico!");
    }else{
        email.setCustomValidity("");
    }
});

var input = document.getElementById('name');

input.oninvalid = function(event) {
    if (!input) {
        event.target.setCustomValidity('Por favor utiliza solo letras minusculas');

    }
    else{
        input.setCustomValidity("");
    }
    }
