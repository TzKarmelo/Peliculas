<?php
session_start();
include("includes/conexion.php");
include("includes/funciones.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Header -->
    <?php include("includes/header.php") ?>
    <!-- fin Header -->

    <title>Films Logueado</title>

    <!-- Boostrap -->
    <?php include("includes/boostrap.php") ?>
    <!-- fin Boostrap -->

    <link href="css/films_logEstilo.css" rel="stylesheet">
</head>

<body class="background" ;>

    <!-- Navigator -->
    <?php include("includes/navLog.php"); ?>
    <!-- fin Navigator -->

    <div class="row divRow">
        <div class="col-sm-4 divCol">
            <div id="carouselExampleFade" class="carousel slide carousel-fade carro" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/671.jpg" class="d-block w-100" alt="...">
                    </div>
                    <?php
                    foreach (glob("img/*.jpg") as $filename) {
                        echo '<div class="carousel-item">';
                        echo "<img src='$filename'";
                        echo " class='d-block w-100' alt='...'>";
                        echo '</div>';
                    }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="col-sm-4 divAdm">
            <span class="spanAcc" ><?php echo $_SESSION['controlReg']?></span>
            <p>Bienvenid@ <?php echo ucfirst($_SESSION['nombre']) ?></p>
            <p>Hoy es <?php $fechaActual = date('d-m-Y');
                        echo $fechaActual; ?>.</p>
            <br>
            <button class="button" onclick='window.location.href="films_buscar.php"'>Buscar-Peliculas</button><br><br>
            <button class="button" onclick='window.location.href="films_bd.php"'>Base-Datos</button><br><br>
            <button class="button" onclick='window.location.href="films_index.php"'>Cerrar Sesión</button><br><br>
        </div>
    </div>

    <!-- footer -->
    <div class="divFoot"> <?php include("includes/pie.php") ?></div>
    <!-- fin footer -->

</body>
</html>