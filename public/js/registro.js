const iniciar_registro = () => {
    let data = new FormData();
    data.append("nombre", $("#nombre").val());
    data.append("apellido", $("#apellido").val());
    data.append("usuario", $("#usuario").val());
    data.append("password", $("#password").val());
    data.append("metodo", "iniciar_registro");

    fetch("./app/controller/Registro.php", {
        method: "POST",
        body: data,
    })
        .then((respuesta) => respuesta.json())
        .then((respuesta) => {
            if (respuesta[0] == 1) {
                Swal.fire({
                    icon: "success",
                    title: "¡Registro exitoso!",
                    text: respuesta[1],
                    confirmButtonText: "Continuar",
                }).then(() => {
                    window.location = "login"; // Redirigir al login
                });
            } else {
                Swal.fire({
                    icon: "error",
                    title: "Error en el registro",
                    text: respuesta[1],
                    confirmButtonText: "Intentar nuevamente",
                });
            }
        })
        .catch((error) => {
            Swal.fire({
                icon: "error",
                title: "Error inesperado",
                text: "Ocurrió un problema al realizar el registro. Por favor, intente nuevamente.",
                confirmButtonText: "Aceptar",
            });
            console.error("Error en la solicitud:", error);
        });
};

$("#btn_registro").on("click", () => {
    iniciar_registro();
});
