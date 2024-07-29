document.addEventListener("DOMContentLoaded", function() {
    const welcomeMessage = document.querySelector(".welcome");
    const loginContainer = document.querySelector(".login-container");

    // Mostrar el mensaje de bienvenida con una animación
    setTimeout(function() {
        welcomeMessage.style.animation = "fadeOut 2s forwards";
    }, 3000);

    // Ocultar el mensaje de bienvenida y mostrar el formulario de inicio de sesión
    setTimeout(function() {
        welcomeMessage.style.display = "none";
        loginContainer.style.display = "block";
        loginContainer.style.animation = "fadeIn 2s forwards";
    }, 5000);
});
