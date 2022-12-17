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

    <!-- Bootstrap -->
    <?php include("includes/boostrap.php") ?>
    <!-- fin Bootstrap -->

    <link href="css/acceso_regEstilo.css" rel="stylesheet">
</head>

<body class="background">
    <?php

    //-- Navigator -->
    include ("includes/navAcceso.php") ;    
    //-- fin Navigator -->

    $error = "";
    $controlReg = "";
    $controlAcc = "";
    $nombre = "";
    $apellidos = "";
    $mail = "";
    $telefono = "";

    if (isset($_SESSION['error'])) {
        $error = $_SESSION['error'];
    }
    if (isset($_SESSION['controlReg'])) {
        $controlReg = $_SESSION['controlReg'];
    }
    if (isset($_SESSION['nombre']) or isset($_SESSION['apellidos']) or isset($_SESSION['mail']) or isset($_SESSION['telefono'])) {
        $nombre = $_SESSION['nombre'];
        $apellidos = $_SESSION['apellidos'];
        $mail = $_SESSION['mail'];
        $telefono = $_SESSION['telefono'];
    }
    ?>
    <div class="divReg">
        <div id="contenedor" >
            <form method="post" action="acceso_reg2.php" class="formReg">
                <fieldset class="fieldReg">
                    <legend>
                        <h2>Registro</h2>
                    </legend>
                    <span class="spanReg"><?php echo $error;echo $controlReg;echo $controlAcc?></span>
                    Nombre: <input type="text" name="nombre" value="<?php echo $nombre; ?>"><span class="spanErr"> * </span><br><br>
                    Apellidos: <input type="text" name="apellidos" value="<?php echo $apellidos; ?>"><span class="spanErr"> * </span><br><br>
                    Usuario: <input type="text" name="user"><span class="spanErr"> * </span><br><br>
                    Contraseña: <input type="password" name="pass"><span class="spanErr"> * </span><br><br>
                    E-mail: <input type="text" name="mail" value="<?php echo $mail; ?>"><span class="spanErr"> * </span><br><br>
                    Teléfono: <input type="text" name="telefono" value="<?php echo $telefono; ?>"><br><br>
                    <p><input class="button" type="submit" name="Enviar" value="Enviar"></p>
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
                    <div class="carousel-item">
                        <img src="img/1362.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/2923.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <div class="divFoot"> <?php include("includes/pie.php") ?></div>
        <!-- fin footer -->

    </div>
    <?php mysqli_close(($mysqli));?>
</body>
</html>
