const cerrar_sesion = () => {
    let data = new FormData();
    data.append("metodo", "cerrar_sesion");

    // Realizar la solicitud POST
    fetch("./app/controller/Login.php", {
        method: "POST",
        body: data
    })
    .then(respuesta => respuesta.json())
    .then(respuesta => {
        Swal.fire({
            title: '¡Sesión cerrada!',
            text: respuesta[1], // Mensaje que viene desde el servidor
            icon: 'success',
            confirmButtonText: 'Aceptar'
        }).then(() => {
            window.location = "login"; // Redirige a la página de login
        });
    });
}

$("#btn_cerrar").on('click', () => {
    // Comprobar si el usuario ha iniciado sesión
    // Este es un ejemplo, asegúrate de tener una forma de verificar si la sesión está activa.
    const estaAutenticado = true;  // Cambia esto a la condición adecuada (puede ser una variable de sesión, cookie, etc.)

    if (estaAutenticado) {
        // Si está autenticado, muestra el SweetAlert2 de confirmación
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡Se cerrará tu sesión!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sí, cerrar sesión',
            cancelButtonText: 'No, cancelar',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                // Si el usuario confirma, se llama a la función cerrar_sesion
                cerrar_sesion();
            }
        });
    } else {
        // Si no está autenticado, muestra un mensaje de advertencia
        Swal.fire({
            title: 'No estás autenticado',
            text: "Para cerrar sesión, primero debes iniciar sesión.",
            icon: 'error',
            confirmButtonText: 'Aceptar'
        });
    }
});
