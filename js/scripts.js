$(document).ready(function () {

    //Verifica si el pop up ya se mostró
    var popupShown = localStorage.getItem('popupShown');

    if (!popupShown) {
        setTimeout(function () {
            // Crea el HTML para el pop up
            var html = '<div class="popup">' +
                '<button class="close-btn" style>X</button>' +
                '<h2>¡Bienvenido!</h2>' +
                '<p>Por favor, inicia sesión o regístrate para acceder a todo el contenido.</p>' +
                '<button class="login-btn">Iniciar sesión</button>' +
                '<button class="register-btn">Registrarse</button>' +
                '</div>';

            // Agrega el pop up al final del body
            $('body').append(html);

            // Agrega eventos de click para los botones de login y registro
            $('.login-btn').click(function () {
                window.location.href = "iniciar.php";
            });

            // Agrega eventos de click para los botones de login y registro
            $('.register-btn').click(function () {
                window.location.href = "registro.php";
            });

            //Evento para cerrar el pop up
            $('.close-btn').click(function () {
                $('.popup').hide();
            })

        }, 5000); // 5000 milisegundos (5 segundos)

        //Almacena un valor en localStorage para indicar que el pop up ya salió
        localStorage.setItem('popupShown', true);
    }

});