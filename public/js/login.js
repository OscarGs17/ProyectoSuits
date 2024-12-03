const mensaje_error = (msj) => {
    Swal.fire({
        icon: "warning",
        title: "Error!",
        text: msj,
        confirmButtonText: "Aceptar",
    });
};

const mensaje_exito = (msj) => {
    Swal.fire({
        icon: "success",
        title: "Correcto!",
        text: msj,
        confirmButtonText: "Aceptar",
    });
};

const iniciar_sesion = () => {
    // Obtener valores de los campos
    const usuario = $("#usuario").val().trim();
    const password = $("#password").val().trim();

    // Validar que los campos no estén vacíos
    if (!usuario || !password) {
        mensaje_error("Por favor, complete todos los campos.");
        return; // Detener ejecución si los campos están vacíos
    }

    // Crear el objeto FormData
    let data = new FormData();
    data.append("usuario", usuario);
    data.append("password", password);
    data.append("metodo", "iniciar_sesion");

    // Realizar la solicitud
    fetch("./app/controller/Login.php", {
        method: "POST",
        body: data,
    })
        .then((respuesta) => respuesta.json())
        .then((respuesta) => {
            if (respuesta[0] == 1) {
                mensaje_exito(respuesta[1]); // Mostrar mensaje de éxito
                setTimeout(() => {
                    window.location = "inicio"; // Redirigir después de un pequeño delay
                }, 2000);
            } else {
                mensaje_error(respuesta[1]); // Mostrar mensaje de error
            }
        })
        .catch((error) => {
            mensaje_error("Ocurrió un error al iniciar sesión.");
            console.error("Error en la solicitud:", error);
        });
};

// Evento del botón de iniciar sesión
$("#btn_iniciar").on("click", () => {
    iniciar_sesion();
});
