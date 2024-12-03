<?php

if (!isset($_SESSION['usuario'])) {
    header("location:login");
    exit();
}
?>
<form class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="py-4 px-3">
                    <h3 class="text-center text-dark">Registro</h3>
                    <img src="<?= IMG . "imagen2.jpg" ?>" class="mx-auto d-block rounded-circle my-3" width="50%" alt="Login">
                    
                    <!-- Campo Nombre -->
                    <div class="form-floating mb-3">
                        <input class="form-control" name="nombre" id="nombre" type="text" placeholder="Nombre">
                        <label class="text-primary" for="nombre"><i class="fa-solid fa-user me-2"></i>Nombre</label>
                    </div>

                    <!-- Campo Apellido -->
                    <div class="form-floating mb-3">
                        <input name="apellido" id="apellido" type="text" class="form-control" placeholder="Apellido">
                        <label class="text-primary" for="apellido"><i class="fa-regular fa-address-book me-2"></i>Apellido</label>
                    </div>

                    <!-- Campo Usuario -->
                    <div class="form-floating mb-3">
                        <input class="form-control" name="usuario" id="usuario" type="text" placeholder="Usuario">
                        <label class="text-primary" for="usuario"><i class="fa-solid fa-envelope me-2"></i>Usuario</label>
                    </div>

                    <!-- Campo Password -->
                    <div class="form-floating mb-3">
                        <input name="password" id="password" type="password" class="form-control" placeholder="Password">
                        <label class="text-primary" for="password"><i class="fa-solid fa-lock me-2"></i>Password</label>
                    </div>

                    <!-- Botones -->
                    <button type="button" class="btn btn-primary w-100 mb-3" id="btn_registro">
                        <i class="fa-solid fa-chalkboard-user me-2"></i>Registrar
                    </button>
                    <a href="login" class="btn btn-danger w-100">
                        <i class="fa-solid fa-door-open me-2"></i>Inicio de sesión
                    </a>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="./public/js/registro.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

