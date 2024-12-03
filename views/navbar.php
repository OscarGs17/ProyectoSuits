<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
  <div class="container-fluid">
  <a class="navbar-brand" href="login">
        <i class=""></i>REFACCIONARIA GS 
    </a>
    <a class="navbar-brand d-flex align-items-center" href="inicio">
      <i class="fas fa-home me-2"></i> Inicio
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="inventario">
            <i class="fas fa-boxes me-2"></i> Inventario
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacto">
            <i class="fas fa-envelope me-2"></i> Contacto
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registro">
            <i class="fas fa-clipboard-list me-2"></i> Registro
          </a>
        </li>
      </ul>
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text" data-bs-toggle="dropdown" href="#" role="button">
                Usuario
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="registro">Nuevo</a></li>
                <li><a class="dropdown-item" href="administrar">Administar</a></li>
            </ul>
        </li>

      <!-- Contenedor para Iniciar sesión y Cerrar sesión -->
      <div class="d-flex align-items-center">
        <a href="login" class="btn btn-outline-primary me-2">
          <i class="fas fa-sign-in-alt me-2"></i> Iniciar sesión
        </a>
        <button type="button" class="btn btn-danger" id="btn_cerrar">
          <i class="fas fa-sign-out-alt me-2"></i> Cerrar sesión
        </button>
      </div>
    </div>
  </div>
</nav>
