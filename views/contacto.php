<?php
include('./app/config/conexion2.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- Incluir SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h2 class="text-center mb-0">Contacto</h2>
        </div>
        <div class="card-body">

    <?php
    // Procesa el formulario solo si se ha enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Asegúrate de sanitizar los datos antes de usarlos
        $nombre = htmlspecialchars($_POST['nombre']);
        $email = htmlspecialchars($_POST['email']);
        $mensaje = htmlspecialchars($_POST['mensaje']);

        // Preparar la consulta SQL para insertar los datos
        $sql = "INSERT INTO contactos (nombre, email, mensaje) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nombre, $email, $mensaje);

        // Ejecutar la consulta y mostrar un mensaje
        if ($stmt->execute()) {
            // Mostrar SweetAlert2 para éxito
            echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Mensaje enviado!',
                        text: 'Gracias, $nombre. Hemos recibido tu mensaje.',
                        confirmButtonText: 'Aceptar'
                    });
                  </script>";
        } else {
            // Mostrar SweetAlert2 para error
            echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Hubo un problema al enviar tu mensaje. Inténtalo de nuevo.',
                        confirmButtonText: 'Aceptar'
                    });
                  </script>";
        }

        // Cerrar la declaración
        $stmt->close();
    }

    // Cerrar la conexión a la base de datos, si está establecida
    if ($conn) {
        $conn->close();
    }
    ?>

    <form id="contactForm" action="" method="POST" onsubmit="return validarFormulario()">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- Cambié a la versión completa -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="<?=JS."validacion.js"?>"></script>



</body>
</html>
