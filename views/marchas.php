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
                            <img src="./public/img/marc2.jpg" alt="Marcha">
                            <h3>marcha</h3>
                        </div>
                        <div class="face back">
                        <p>Precio:$1400.</p>

                            <a href="#">Gr8 - Marcha Nueva Para Ford Motor 302 Rápida De Imanes Compatible</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-inner">
                        <div class="face front">
                            <img src="./public/img/marc3.jpg" alt="Alternador">
                            <h3>marcha</h3>
                        </div>
                        <div class="face back">
                            <h3>Detalles</h3>
                            <a href="#">Marcha Reman Compatible con Ford Motor 302 Rápida De Imanes Compatible</a>
                            <p>Precio:$1400.</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-inner">
                        <div class="face front">
                            <img src="./public/img/marc5.jpg" alt="marcha">
                            <h3>Marcha</h3>
                        </div>
                        <div class="face back">
                            <h3>Detalles</h3>
                            <p>Precio:$1700.</p>

                            <a href="#">Repuesto de arranque para Honda Accord EX LX 2013-2017, Civic 2016-2019, CR-V 2015-2016 2.4L L4 Engine 10914 31200-5A2-A51</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-inner">
                        <div class="face front">
                            <img src="./public/img/marc7.jpg" alt="Alternador">
                            <h3>Marcha</h3>
                        </div>
                        <div class="face back">
                            <h3>Detalles</h3>
                            <p>Precio:$1500.</p>
                            <a href="#">DB Electrical SDR0086 - Arrancador compatible con Chevrolet Astro Van, Blazer, Express Vans, S10, Silverado GMC Jimmy, Safari, Savana, Sierra, Sonoma 4.3L 1999-2004 12563176 12563719
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-inner">
                        <div class="face front">
                            <img src="./public/img/marc9.jpg" alt="Marcha">
                            <h3>Marcha</h3>
                        </div>
                        <div class="face back">
                            <h3>Detalles</h3>
                            <p>Precio:$1700.</p>
                            <a href="#">Boatrip 17986 - Reemplazo de arranque para GMC Acadia 07-16, 08-17 Buick Enclave Lacrosse, Chevy Traverse Malibu Impala, Cadillac SRX STS XTS, Pontiac Saturn Suzuki 3.0L 3.6L V6 Motor OEM #: 12645298
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-inner">
                        <div class="face front">
                            <img src="./public/img/marc8.jpg" alt="Alternador">
                            <h3>Marcha</h3>
                        </div>
                        <div class="face back">
                            <h3>Precio:$1900</h3>
                            <p>Este alternador es ideal para todo tipo de vehículos.</p>
                            <a href="#">Más información</a>
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
