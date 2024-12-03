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
                            <img src="./public/img/alt.jpg" alt="Alternador">
                            <h3>Alternador</h3>
                        </div>
                        <div class="face back">
                            <h3>Detalles</h3>
                            <p>Este alternador es ideal para todo tipo de vehículos.</p>
                            <a href="#">Más información</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-inner">
                        <div class="face front">
                            <img src="./public/img/alt3.jpg" alt="Alternador">
                            <h3>Alternador</h3>
                        </div>
                        <div class="face back">
                            <h3>Detalles</h3>
                            <a href="#">SHICHU Alternador compatible con Odyssey 2013-2017 3.5L V6, reemplazo del alternador 104211-8520 11775 31100-RV0-A11</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-inner">
                        <div class="face front">
                            <img src="./public/img/alt4.jpg" alt="Alternador">
                            <h3>Alternador</h3>
                        </div>
                        <div class="face back">
                            <h3>Detalles</h3>
                            <a href="#">DB Electrical Alternador 400-44054 compatible con/reemplazo para 4.0 4.0L Frontier Pathfinder Xterra 05 06 07 2005 2006 2007 LR1110-725, LR1110-725B 23100-EA201, 231000 -EA20 B</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-inner">
                        <div class="face front">
                            <img src="./public/img/alt5.jpg" alt="Alternador">
                            <h3>Alternador</h3>
                        </div>
                        <div class="face back">
                            <h3>Detalles</h3>
                            <a href="#">Alternator 400-52252R Compatible with Acura MDX RL TL Honda Odyssey Pilot Ridgeline 3.2L 3.5L 3.7L 11099 11150 31100-RDJ-A01</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-inner">
                        <div class="face front">
                            <img src="./public/img/alt6.jpg" alt="Alternador">
                            <h3>Alternador</h3>
                        </div>
                        <div class="face back">
                            <h3>Detalles</h3>
                            <a href="#">ROADFAR - Alternador de repuesto para retroexcavadora John Deere 400-24009 310/310G/310SG/315/315D/410 12161</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <div class="card-inner">
                        <div class="face front">
                            <img src="./public/img/alt7.jpg" alt="Alternador">
                            <h3>Alternador</h3>
                        </div>
                        <div class="face back">
                            <h3>Detalles</h3>
                            <a href="#">Alternador automotriz V6 3.5L para Honda Accord 2013-2017, Crosstour 2013-2015, Acura RDX 2016-2018, 11670, 104211-8300</a>
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
