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
    
    <title>Films Grabar</title>
</head>

<body>
    <?php

    $tmdb_id = $_SESSION['tmdb_id'];
    $titulo = $_SESSION['titulo'];
    $estado = $_SESSION['estado'];
    $estreno = $_SESSION['estreno'];
    $overview = $_SESSION['overview'];
    $titulo = recogerVar($titulo);
    $tmdb_id = recogerVar($tmdb_id);
    $estado = recogerVar($estado);
    $estreno = recogerVar($estreno);
    $overview = recogerVar($overview);

    $id = trim(urlencode($tmdb_id));
    $url = "https://api.themoviedb.org/3/movie/$id?api_key=a741455342cf023e81ade2e9b630b605&language=es-ES";
    $resultado = file_get_contents("$url");
    $data = json_decode($resultado, true);
    $errorGrabar = '';

    $query = "SELECT tmdb_id FROM peliculas WHERE tmdb_id = '$tmdb_id'";
    $resultado = $mysqli->query($query);
    $filas = $resultado->num_rows;
    if ($filas > 0) {
        $errorGrabar = "La pelicula ya existe en la base de datos...<br><br>";
        $_SESSION['errorGrabar'] = $errorGrabar;
        header('Location: films_buscar.php');
    } else {
        $poster = $data['poster_path'];
        $direccion = "http://image.tmdb.org/t/p/w300/$poster?api_key=a741455342cf023e81ade2e9b630b605";
        $carpeta = "img/";

        $destino = $carpeta . $id . ".jpg";
        file_put_contents($destino, file_get_contents($direccion));
        
        $query2 = "INSERT INTO peliculas ( tmdb_id, titulo, estado, estreno, overview, imagen) VALUES ('$tmdb_id','$titulo','$estado','$estreno','$overview','$destino')";
        $res = $mysqli->query($query2);
        $_SESSION['errorGrabar'] = "";
        $_SESSION['tmdb_id'] = "";
        $_SESSION['titulo'] ="";
        $_SESSION['estado'] ="";
        $_SESSION['estreno'] ="";
        $_SESSION['overview'] ="";
        header('Location: films_bd.php');
    }
    mysqli_close($mysqli);
    ?>
</body>
</html>