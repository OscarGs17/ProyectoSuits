let tabla, id_usuario;

const obtener_datos = () => {
    let data = new FormData();
    data.append('metodo', 'obtener_usuarios');
    
    fetch("app/controller/usuario.php", {
        method: "POST",
        body: data
    })
    .then(respuesta => respuesta.json())
    .then((respuesta) => {
        console.log(respuesta);
        if (tabla) {
            tabla.clear().rows.add(respuesta).draw(); 
        } else {
            tabla = $('#myTable').DataTable({
                data: respuesta, 
                columns: [
                    { data: 'nombre' }, 
                    { data: 'apellido' }, 
                    { data: 'usuario' },  
                    {
                        data: 'id_usuario',
                        render: function(data, type, row) {
                            return `
                                <button class="btn btn-warning me-3 editar"
                                    data-bs-toggle="modal" data-bs-target="#actualizar"
                                    onclick="mostrar_datos(${data})"
                                >
                                    Editar
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                                <button class="btn btn-danger eliminar"
                                    onclick="eliminar_usuario(${data})"
                                >
                                    Eliminar
                                    <i class="bi bi-trash3-fill"></i>
                                </button>
                            `;
                        }
                    } 
                ],
                "lengthChange": false,
                "pageLength": 8,
                language: { url: "./public/json/lenguaje.json" }
            });
        }
    });
};

document.addEventListener('DOMContentLoaded', () => {
    obtener_datos();
});

const mostrar_datos = (id) => {
    id_usuario = id;
    let data = new FormData();
    data.append("id_usuario", id);
    data.append("metodo", "mostrar_datos");

    fetch("./app/controller/usuario.php", {
        method: "POST",
        body: data
    }).then(respuesta => respuesta.json())
    .then(respuesta => {           
        console.log(respuesta); // Verifica aquí la respuesta completa

        if(respuesta) { // Asegúrate de que la respuesta no esté vacía
            document.getElementById('nombre').value = respuesta['nombre'] || ''; 
            document.getElementById('apellidoP').value = respuesta['apellido'] || '';  
            document.getElementById('apellidoM').value = respuesta['apellido_materno'] || ''; // Cambia la clave si es necesario
            document.getElementById('usuario').value = respuesta['usuario'] || '';  
        } else {
            console.error("No se encontraron datos para este usuario.");
        }
    }).catch(error => {
        console.error('Error al obtener los datos:', error);
    });
};


const actualizar = () => {
    let data = new FormData();
    data.append("id_usuario", $("#id_usuario_act").val());
    data.append("nombre", $("#edit_nombre").val());
    data.append("apellido", $("#apellido").val());
    data.append("password", $("#edit_password").val());
    data.append("metodo", "actualizar_datos");

    fetch("./app/controller/usarios.php", {
        method: "POST",
        body: data
    })
    .then(respuesta => respuesta.json())
    .then(respuesta => { 
        if (respuesta[0] == 1) {
            alert(respuesta[1]);
            consulta();  
            $("#editarModal").modal('hide');
        } else {
            alert(respuesta[1]);
        }
    });
};

const eliminar_usuario = (id) => {
    Swal.fire({
        icon: "warning",
        text: "¿Quieres eliminar este usuario?",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Eliminar usuario"
    }).then((result) => {
        if (result.isConfirmed) {
            let data = new FormData();
            data.append("id_usuario", id);
            data.append("metodo", "eliminar_usuario");

            fetch("./app/controller/usuario.php", {
                method: "POST",
                body: data
            }).then(respuesta => respuesta.json())
            .then(async respuesta => { 
                if (respuesta[0] == 1) {
                    await Swal.fire({ icon: "success", title: `${respuesta[1]}` });
                    obtener_datos();  // Recarga la lista de usuarios
                } else {
                    await Swal.fire({ icon: "error", title: `Error: ${respuesta[1]}` });  // Mejor manejo de error
                }
            });
        }
    });                                                                                                                                                                 
}
