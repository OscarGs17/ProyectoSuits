<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cards Layout</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 100px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
        }

        .card-body {
            background-color: #ffffff;
            padding: 1.5rem;
        }

        .card-text {
            font-size: 1rem;
            color: #495057;
            line-height: 1.5;
        }

        .card img {
            border-radius: 15px 15px 0 0;
            object-fit: cover;
            height: 200px;
        }

        .btn-custom {
            background-color: #007bff;
            color: white;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        details {
            background-color: #f1f1f1;
            border-radius: 10px;
            padding: 1rem;
            transition: background-color 0.3s ease;
        }

        details:hover {
            background-color: #e9ecef;
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 1rem 0;
            margin-top: 3rem;
        }

        footer p {
            margin-bottom: 0;
        }

        .container {
            padding: 2rem 0;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .card {
                margin-bottom: 20px;
            }
        }

        .content {
            position: relative;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content h3 {
            font-size: 3rem;
            font-weight: bold;
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            text-transform: uppercase;
        }

        .content h3:nth-child(1) {
            color: transparent;
            -webkit-text-stroke: 2px #03a9e4;
        }

        .content h3:nth-child(2) {
            color: rgba(3, 169, 224, 0.9);
            animation: animate 4s ease-in-out infinite;
        }

        @keyframes animate {
            0%,
            100% {
                clip-path: polygon(0% 45%, 15% 44%, 32% 50%, 54% 60%, 100% 70%, 100% 100%, 0% 100%);
            }

            50% {
                clip-path: polygon(0% 60%, 16% 65%, 34% 66%, 51% 70%, 100% 80%, 100% 100%, 0% 100%);
            }
        }
    </style>
</head>

<body>
    <header class="bg-black text-center py-.5">
        <div class="content position-relative">
            <!-- Título con efecto -->
            <h3 class="position-absolute w-100 text-center">Bienvenido al inventario de Refacciones</h3>
            <h3 class="position-absolute w-100 text-center">Bienvenido al inventario de Refacciones</h3>
        </div>
        <!-- Contenido adicional debajo del título -->
       
    </header>

    <!-- Tarjetas de Ejemplo -->
    <div class="container mt-5">
        <div class="row">
            <!-- Primera tarjeta -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./public/img/alt.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">BOSCH AL7597N Alternador premium 100% nuevo, compatible con Ford Ranger; Mazda B2300; 110 amperios.</p>
                        <div class="text-center mt-3">
                            <a href="alternadores" class="btn btn-custom btn-sm">
                                <i class="fas fa-user-plus"></i> Ver más
                            </a>
                        </div>
                    </div>
                    <details class="mt-3">
                        <summary class="bg-light p-3 rounded shadow text-center fw-bold">
                            Más información
                        </summary>
                        <section class="bg-light p-4 rounded">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <i class="bi bi-shield-lock-fill text-primary me-2"></i>
                                    Ingeniería superior: idéntica en ajuste y función a las piezas originales.
                                </li>
                            </ul>
                        </section>
                    </details>
                </div>
            </div>

            <!-- Segunda tarjeta -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./public/img/reg.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Regulador Alternador Saturn Vue 2.2l 02-07 Sist Valeo</p>
                        <a href="regulador" class="btn btn-custom btn-sm">
                            <i class="fas fa-user-plus"></i> Ver más
                        </a>
                        <details class="mt-3">
                            <summary class="bg-light p-3 rounded shadow text-center fw-bold">
                                Más información
                            </summary>
                            <section class="bg-light p-4 rounded">
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <i class="bi bi-shield-lock-fill text-primary me-2"></i>
                                        Descripción detallada del regulador.
                                    </li>
                                </ul>
                            </section>
                        </details>
                    </div>
                </div>
            </div>

            <!-- Tercera tarjeta -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./public/img/marc.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Marcha Bosch Volskwagen Sedan Todos Pmgr 9 Dientes Tipo Original</p>
                        <a href="marchas" class="btn btn-custom btn-sm">
                            <i class="fas fa-user-plus"></i> Ver más
                        </a>
                        <details class="mt-3">
                            <summary class="bg-light p-3 rounded shadow text-center fw-bold">
                                Más información
                            </summary>
                            <section class="bg-light p-4 rounded">
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <i class="bi bi-shield-lock-fill text-primary me-2"></i>
                                        Acerca de este artículo
                                        SISTEMA OEM: BOSCH
                                        VOLTS: 12V
                                        NUMERO DE DIENTES: 9
                                        GIRO: CCW IZQUIERDO - ANTIHORARIO
                                        LESTER: 19006, 16450
                                        DATOS EXTRAS: TIPO ORIGINAL
                                        TRANSPORTE
                                        Informar de
                                    </li>
                                </ul>
                            </section>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 WallsGS</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>
