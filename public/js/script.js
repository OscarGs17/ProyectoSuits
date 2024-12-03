function validarFormulario() {
    let nombre = document.getElementById('nombre').value;
    let email = document.getElementById('email').value;
    let mensaje = document.getElementById('mensaje').value;

    if (nombre === "" || email === "" || mensaje === "") {
        Swal.fire({
            icon: 'warning',
            title: 'Campos incompletos',
            text: 'Todos los campos son obligatorios.',
            confirmButtonText: 'Ok',
            customClass: {
                confirmButton: 'btn btn-primary' // Puedes personalizar el botón con Bootstrap
            },
            buttonsStyling: false // Usar estilos de Bootstrap en lugar de los de SweetAlert
        });
        return false;
    }
    return true;
}
