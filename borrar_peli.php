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

    <title>Films Borrar Peli</title>   
</head>

<body>
    <?php
    $tmdb_id = $_SESSION['tmdb_id'];
    $query = "DELETE FROM peliculas WHERE tmdb_id = $tmdb_id";
    $resultado = $mysqli->query($query);
    header('Location: panel_control_peliculas.php');
    mysqli_close($mysqli);
    ?>
</body>
</html>