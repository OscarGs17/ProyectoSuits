<?php
if (!isset($_SESSION['usuario'])) {
    header("location:login");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= CSS . "table.css"; ?>">
    <link rel="stylesheet" href="<?= CSS . "administrar.css"; ?>">
    <title>Administración de usuarios</title>
</head>


<body>

    <div class="container mt-4" id="contenedor-tabla">
        <table id="myTable" class="table table-dark table-striped p-5" >
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody id="t_usuarios">
            </tbody>
        </table>
    </div>

    

    <!-- Scripts -->
    <script src="<?= JS . "jquery.js"; ?>"></script> <!-- Aquí mantiene solo uno de los dos -->
    <script src="<?= JS . "table.js"; ?>"></script>
    <script src="<?= JS . "navar.js"; ?>"></script>
    <script src="<?= JS . "administrar.js"; ?>"></script>

    <!-- CDN Scripts (en caso de no usar los locales) -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>