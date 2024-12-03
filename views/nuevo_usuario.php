<?php
if (!isset($_SESSION['usuario'])) {
    header("location:login");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?=CSS."nuevo_usuario.css"?>">
    <title>Nuevo usuario</title>
</head>
<body>
    

    <div class="container">
        <div class="d-flex justify-content-center">
            <form class="p-3 mt-5" id="formulario_registro_usuario">
                
                <div class="input-group mb-3">
                    <i class="bi bi-person-fill input-group-text fs-3"></i>
                    <input type="text" class="form-control" placeholder="Ingrese su nombre" id="nombre" name="nombre">
                </div>
                
                <div class="input-group mb-3">
                    <i class="bi bi-gender-male input-group-text fs-3"></i>
                    <input type="text" class="form-control" placeholder="Ingrese su apellido paterno" id="paterno" name="paterno">
                </div>
                
                <div class="input-group mb-3">
                    <i class="bi bi-gender-female input-group-text fs-3"></i>
                    <input type="text" class="form-control" placeholder="Ingrese su apellido materno" id="materno" name="materno">
                </div>

                <div class="input-group mb-3">
                    <i class="bi bi-person-fill-lock input-group-text fs-3"></i>
                    <input type="text" class="form-control" placeholder="Ingrese su nombre de usuario" id="usuario" name="usuario">
                </div>
                
                <div class="input-group mb-2">
                    <i class="bi bi-key-fill input-group-text fs-3"></i>
                    <input type="password" class="form-control" placeholder="Ingrese su contraseña" id="pass" name="pass">
                </div>
                
                <div class="mt-3 c-button">
                    <button type="button" id="btn-nuevo-usuario" class="btn w-100 text-white fs-4">Agregar Usuario</button>
                </div>
            </form>
        </div>
    </div>

    <script src="<?=JS."navar.js"?>"></script>
    <script src="<?=JS."nuevo_usuario.js"?>"></script>
</body>
</html>