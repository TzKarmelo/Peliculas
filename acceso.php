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

    <title>Films Index</title>

    <!-- Bootstrap -->
    <?php include("includes/boostrap.php") ?>
    <!-- fin Bootstrap -->

    <link href="css/accesoEstilo.css" rel="stylesheet">
</head>

<body class="background">
    <?php

    //-- Navigator -->
    include ("includes/navAcceso.php") ;    
    //-- fin Navigator -->

    $error = "";
    $controlReg = "";
    $controlAcc = "";
    if (isset($_SESSION['error'])) {
        $error = $_SESSION['error'];
    }
    if (isset($_SESSION['controlReg'])) {
        $controlReg = $_SESSION['controlReg'];
    }
    if (isset($_SESSION['controlAcc'])) {
        $controlAcc = $_SESSION['controlAcc'];
    }
    if (isset($_SESSION['nombre']) or isset($_SESSION['estado']) or isset($_SESSION['apellidos']) or isset($_SESSION['login_user']) or isset($_SESSION['mail']) or isset($_SESSION['telefono'])) {
        unset($_SESSION['nombre'], $_SESSION['apellidos'], $_SESSION['estado'], $_SESSION['login_user'], $_SESSION['mail'], $_SESSION['telefono']);
    }
    ?>    
    <div class="divAcc">
        <div class="row divRow">
            <form method="post" action="acceso2.php" class="formAcc">
                <fieldset class="fieldAcc">
                    <legend>
                        <h2>Acceso</h2>
                    </legend>
                    <hr class="hrAcc">
                    <span class="spanAcc"><?php echo $error;echo $controlReg;echo $controlAcc ?></span>
                    Usuario <input class="form-control me-2" type="text" name="user" autofocus><br>
                    Contraseña <input class="form-control me-2" type="password" name="pass"><br>
                    <p><input class="button" type="submit" name="submit" value="Acceder"></p><br>
                    <p><a href="acceso_reg.php">Registro nuevo usuario</a></p>
                    <p><a href="#">Olvidaste tu contraseña?</a></p>
                </fieldset>
            </form>

            <div id="carouselExampleSlidesOnly" class="carousel slide divCarr" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/11.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/79026.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/120.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/121.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/122.jpg" class="d-block w-100" alt="...">
                    </div>                    
                </div>
            </div>
        </div>

            <!-- footer -->
            <div class="divFoot"><?php include("includes/pie.php") ?></div>
            <!-- fin footer -->

    </div>   
    <?php mysqli_close(($mysqli));?> 
</body>
</html>
