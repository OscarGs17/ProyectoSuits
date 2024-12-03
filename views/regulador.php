<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: rgb(9, 74, 136);
            color: #fff;
            margin: 0;
        }

        header {
            width: 100%;
            background-color: #000;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        header p {
            margin: 5px 0 0;
            font-size: 1.2rem;
        }

        .card {
            position: relative;
            width: 100%;
            max-width: 300px;
            height: 350px;
            perspective: 1000px;
            margin: 10px auto;
        }

        .card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: transform 0.6s;
        }

        .card:hover .card-inner {
            transform: rotateY(180deg);
        }

        .card .face {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }

        .card .front {
            background-color: #fff;
        }

        .card .front img {
            width: 100%;
            height: 70%;
            object-fit: cover;
        }

        .card .front h3 {
            margin: 0;
            padding: 10px;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
        }

        .card .back {
            background-color: rgb(3, 35, 54);
            color: #f3f3f3;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 15px;
            transform: rotateY(180deg);
        }

        .card .back h3 {
            margin: 0;
            font-size: 1.5rem;
        }

        .card .back p {
            margin: 10px 0;
        }

        .card .back a {
            color: #0d6efd;
            text-decoration: none;
            font-weight: bold;
        }

        .card .back a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- Encabezado -->
    <header>
        <h1>Catálogo de Productos</h1>
        <p>Encuentra las mejores refacciones aquí</p>
    </header>

    <!-- Contenedor principal -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <!-- Tarjetas -->
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-inner">
                        <div class="face front">
                            <img src="./public/img/reg.jpg" alt="Alternador">
                            <h3>Regulador</h3>
                        </div>
                        <div class="face back">
                            <h3>Detalles</h3>
                            <p>Este Regulador es ideal para todo tipo de vehículos.</p>
                            <a href="#">Más información</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-inner">
                        <div class="face front">
                            <img src="./public/img/reg2.jpg" alt="Alternador">
                            <h3>Regulador</h3>
                        </div>
                        <div class="face back">
                            <h3>Detalles</h3>
                            <a href="#">DB Electrical AFD6001 Regulador de voltaje compatible con/reemplazo para Ford Lincoln Mercury Car, Truck 1964-1987, Externo, Mustang 1965-1986 130506 D9PF-10316-AA D9PZ-10316-A E2AF-10316-AA</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-inner">
                        <div class="face front">
                            <img src="./public/img/reg4.jpg" alt="Alternador">
                            <h3>Regulador</h3>
                        </div>
                        <div class="face back">
                            <h3>Detalles</h3>
                            <a href="#">Kit de regulador de alternador, anillo deslizante de repuesto para For.d Club Wagon Crown Victoria Linc Navigator Maz Navajo Merc Grand Marquis Sable 1991-2008 f794br7</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-inner">
                        <div class="face front">
                            <img src="./public/img/reg3.jpg" alt="Alternador">
                            <h3>Alternador</h3>
                        </div>
                        <div class="face back">
                            <h3>Detalles</h3>
                            <a href="#">RENARD Regulador Para Alternador Compatible con FORD EXPEDITION V8 5.4L de 2003 a 2004
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-inner">
                        <div class="face front">
                            <img src="./public/img/reg5.jpg" alt="Alternador">
                            <h3>Alternador</h3>
                        </div>
                        <div class="face back">
                            <h3>Detalles</h3>
                            <p>Este alternador es ideal para todo tipo de vehículos.</p>
                            <a href="#">Regulador de alternador im622 de repuesto para Mitsubishi For.d Focus Taurus Expedition Linc MKS Navigator Mazd Tribute Mercu Mariner Milan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-inner">
                        <div class="face front">
                            <img src="./public/img/reg7.jpg" alt="Alternador">
                            <h3>Alternador</h3>
                        </div>
                        <div class="face back">
                            <h3>Detalles</h3>
                            <p>Este alternador es ideal para todo tipo de vehículos.</p>
                            <a href="#">regulador de alternador f605 de repuesto para For.d Mustang Excursion Explorer Mercu Mountaineer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
