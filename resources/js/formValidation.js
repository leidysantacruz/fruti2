function validateForm() {
    var nombres = document.forms["myForm"]["nombres"].value;
    var apellidos = document.forms["myForm"]["apellidos"].value;
    var edad = document.forms["myForm"]["edad"].value;
    var telefono = document.forms["myForm"]["telefono"].value;
    var email = document.forms["myForm"]["email"].value;
    var password = document.forms["myForm"]["password"].value;

    if (nombres === "") {
        document.getElementById("nombresError").innerText = "Por favor, ingresa tu nombre.";
        return false;
    } else {
        document.getElementById("nombresError").innerText = ""; // Limpia el mensaje de error
    }

    if (apellidos === "") {
        document.getElementById("apellidosError").innerText = "Por favor, ingresa tus apellidos.";
        return false;
    } else {
        document.getElementById("apellidosError").innerText = "";
    }

    if (edad === "" || isNaN(edad)) {
        document.getElementById("edadError").innerText = "Por favor, ingresa una edad válida.";
        return false;
    } else {
        document.getElementById("edadError").innerText = "";
    }

    if (telefono === "" || isNaN(telefono)) {
        document.getElementById("telefonoError").innerText = "Por favor, ingresa un número de teléfono válido.";
        return false;
    } else {
        document.getElementById("telefonoError").innerText = "";
    }

    if (email === "" || !emailIsValid(email)) {
        document.getElementById("emailError").innerText = "Por favor, ingresa un correo electrónico válido.";
        return false;
    } else {
        document.getElementById("emailError").innerText = "";
    }

    if (password === "" || password.length < 8) {
        document.getElementById("passwordError").innerText = "La contraseña debe tener al menos 8 caracteres.";
        return false;
    } else {
        document.getElementById("passwordError").innerText = "";
    }
}

function emailIsValid(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}
