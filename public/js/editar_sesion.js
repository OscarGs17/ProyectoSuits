
        $(document).ready(function() {
            $('#btn-editar').on('click', function() {
                $.ajax({
                    url: '/suits/unidad3/prueba/app/controller/obtener_datos_usuario.php', // Cambia la ruta según tu estructura
                    method: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        if (data.success) {
                            // Asignar los valores a los campos del modal
                            $('#nombre').val(data.usuario.nombre);
                            $('#apellidoP').val(data.usuario.apellidoP);
                            $('#apellidoM').val(data.usuario.apellidoM);
                            $('#usuario').val(data.usuario.usuario);
                            $('#pass').val(''); // Mantener vacío para que el usuario ingrese la nueva contraseña
                        } else {
                            alert('Error al obtener los datos del usuario.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error en la petición:", error);
                        alert('Error al obtener los datos del usuario.');
                    }
                });
            });

            $(document).on('click', '#actualizar-datos', function(event) {
                console.log("Botón 'Guardar cambio' clickeado");

                let nombre = $('#nombre').val();
                let apellidoP = $('#apellidoP').val();
                let apellidoM = $('#apellidoM').val();
                let usuario = $('#usuario').val();
                let pass = $('#pass').val(); 

                console.log("Datos capturados:", {
                    nombre: nombre,
                    apellidoP: apellidoP,
                    apellidoM: apellidoM,
                    usuario: usuario,
                    pass: pass,
                });

                // Validar campos
                if (!nombre || !apellidoP || !apellidoM || !usuario || !pass) {
                    alert("Todos los campos son obligatorios.");
                    return;
                }

                fetch('/suits/unidad3/prueba/app/controller/editar_sesion.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: `nombre=${nombre}&apellidoP=${apellidoP}&apellidoM=${apellidoM}&usuario=${usuario}&pass=${pass}` // Cambié la forma de enviar los datos
                })
                .then(response => response.json())
                .then(data => {
                    console.log("Respuesta del servidor:", data);

                    if (data.success) {
                        alert('Datos actualizados correctamente');
                        
                        // Confirmar si el usuario desea cerrar sesión
                        if (confirm("¿Deseas cerrar sesión?")) {
                            // Cerrar sesión
                            fetch('/suits/unidad3/prueba/app/controller/cerrar_sesion.php', {
                                method: 'POST',
                            }).then(() => {
                                window.location.href = '/suits/unidad3/prueba/login.php';
                            });
                        } else {
                            $('p.text-white.fs-2.m-0').text(usuario); 
                            $('#actualizar').modal('hide'); // Cerrar modal
                        }
                    } else {
                        alert('Error: ' + data.error);
                    }
                })
                .catch(error => {
                    console.error("Error en la petición:", error);
                    alert('Error al actualizar los datos.');
                });
            });
        });
    
