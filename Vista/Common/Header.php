<?php
//include_once('../configuracion.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprimir</title>
    <link rel="stylesheet" href="./../Assets/css/css.css">
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../node_modules/sweetalert2/dist/sweetalert2.min.css">
    <script type='text/javascript' src='../../node_modules/bootstrap/dist/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src='../../node_modules/sweetalert2/dist/sweetalert2.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
            
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-light fs-5" aria-current="page" href="../Home/Index.php">Home  | </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light fs-5" href="../Home/Index.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Comprimir archivos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../ZipArchive/comprimir.php">ZipArchive</a></li>
                                <li><a class="dropdown-item" href="../PclZip/comprimirPcl.php">PclZip</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Descomprimir archivos
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../ZipArchive/descomprimir.php">ZipArchive</a></li>
                                <li><a class="dropdown-item" href="../PclZip/descomprimirPcl.php">PclZip</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>