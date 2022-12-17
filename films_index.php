<?php
session_start();
session_unset();
include("includes/conexion.php");
include("includes/funciones.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Header -->
    <?php include("includes/header.php") ?>
    <!-- fin Header -->

    <title>Films Index</title>

    <!-- Boostrap -->
    <?php include("includes/boostrap.php") ?>
    <!-- fin Boostrap -->

    <link href="css/indexEstilo.css" rel="stylesheet">
</head>

<body class="background">

    <!-- Navigator -->
    <?php include("includes/navIndex.php") ?>
    <!-- fin Navigator -->

    <div class="textoIntro">
        <p>Bienvenido al la web MyFilms, un proyecto educativo donde podrás realizar busquedas en la API de Películas TMBD para buscar las pelis que más te gusten y añadirlas a la base de datos compartida con otros usuarios registrados para disfrutar de la información cinematográfica en cualquier momento... </p>
        <button class="button" onclick='window.location.href="acceso.php";'>Acceder</button>
        <button class="button" onclick='window.location.href="acceso_reg.php";'>Regístrate</button>
    </div><br><br>

    <div class="divEstrenos">
        <h1 class="h1Estrenos">Próximas películas en los cines</h1>
        <div id="contenedor">
            <?php
            $url = "https://api.themoviedb.org/3/movie/upcoming?api_key=a741455342cf023e81ade2e9b630b605&language=es-ES&page=1";
            $resultado = file_get_contents("$url");
            $data = json_decode($resultado, true);
            $peliculas = $data['results'];
            $numpag = $data['total_pages'];
            $pag = $data['page'];

            foreach ($peliculas as  $valor) {
            ?>
                <div class="divCard">

                    <?php if (!empty($valor['poster_path'])) {
                        $imagen = 'https://image.tmdb.org/t/p/w300/' . $valor['poster_path'] . '?api_key=a741455342cf023e81ade2e9b630b605';
                    } else {
                        $imagen = 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/da/Imagen_no_disponible.svg/1200px-Imagen_no_disponible.svg.png';
                    } ?>

                    <div class="card-body">
                        <img src="<?php echo $imagen ?>" alt="" class="imgCard">
                        <h5 class="card-title h5Card"><?php echo $valor['title'] ?></h5>
                    </div>

                    <?php if (!empty($valor['release_date'])) {
                        $releaseD = $valor['release_date'];
                    } else {
                        $releaseD = '...';
                    } ?>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Estreno: <?php echo $releaseD ?></li>
                        <li class="list-group-item liCard"><?php echo cortar_texto($valor['overview'], 15) ?> ...</li>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- footer -->
    <div class="divFoot"> <?php include("includes/pie.php") ?></div>
    <!-- fin footer -->

</body>
</html>