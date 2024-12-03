<?php
    if(isset($_SESSION['usuario'])){
        header("location:inicio");
        exit();
    }
?>
<form id="frm_login" class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-body p-4">
                    <h3 class="text-center mb-4 text-primary">Inicio de sesion</h3>
                    <div class="text-center mb-4">
                    <img src="./public/img/imagen3.JPG" class="rounded-circle" width="60%" alt="Login">
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="usuario" name="usuario" type="text" placeholder="Email" required>
                        <label for="usuario" class="text-muted"><i class="fa-solid fa-envelope me-2"></i>e-mail</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
                        <label for="password" class="text-muted"><i class="fa-solid fa-lock me-2"></i>Password</label>
                    </div>
                    <button class="btn btn-primary w-100 mb-3" type="button" id="btn_iniciar">
                        <i class="fa-solid fa-door-open me-2"></i>Iniciar sesión
                    </button>
                    <a href="registro" class="btn btn-danger w-100 mb-3">
                        <i class="fa-solid fa-chalkboard-user me-2"></i>Registro
                    </a>
                    <div class="text-center">
                        <a href="#" class="text-muted">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="./public/js/login.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>





