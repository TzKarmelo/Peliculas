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

    <title>Films Ficha</title>

    <!-- Boostrap -->
    <?php include("includes/boostrap.php") ?>
    <!-- fin Boostrap -->

    <link href="css/films_fiEstilo.css" rel="stylesheet">
</head>

<body class="background">

    <!-- Navigator -->
    <?php include("includes/navLog.php"); ?>
    <!-- fin Navigator -->

    <div class="row divRow">
        <div class="col-sm-8 divCol">

            <?php
            if (isset($_GET['id'])) {
                $id = trim(urlencode($_GET['id']));
                $url = "https://api.themoviedb.org/3/movie/$id?api_key=a741455342cf023e81ade2e9b630b605&language=es-ES";
                $resultado = file_get_contents("$url");
                $data = json_decode($resultado, true);
                //print_r($url);
                $urlCred = "https://api.themoviedb.org/3/movie/$id/credits?api_key=a741455342cf023e81ade2e9b630b605";
                $resultadoCred = file_get_contents("$urlCred");
                $dataCred = json_decode($resultadoCred, true);

                echo "<br>";                
            }
            ?>
            <div class="divFi">
                <button id="fiButton" onclick='history.go(-1);' >Volver a BD</button>
                <h2><i><u class="h2Fi">Ficha Completa</u></i></h2>
                <p><i><u class="p2Fi">Titulo de la pelicula :</u></i>
                    <?php
                    echo "'" . $data['title'] . "'- ( " . $data['release_date'] . " )"; ?></p>
                <p><i><u class="p2Fi">Director :</u></i>
                    <?php
                    $crew = $dataCred["crew"];
                    foreach ($crew as $key => $value) {
                        if ($value['job'] == 'Director') {
                            echo $value['name'];
                        }
                    }
                    ?>
                </p>
                <p><i><u class="p2Fi">Actores :</u></i>
                    <?php
                    $cast = $dataCred["cast"];
                    if (!$cast == "") {
                        for ($i = 0; $i < 4; $i++) {
                            echo $cast[$i]['name'];
                            echo " // ";
                        }
                    } else {
                        echo "";
                    }
                    ?>
                <p><i><u class="p2Fi">Géneros :</u></i>
                    <?php
                    $genres = $data["genres"];
                    if (!$genres == "") {
                        for ($j = 0; $j < count($genres); $j++) {
                            echo $genres[$j]['name'];
                            echo " // ";
                        }
                    } else {
                        echo "";
                    }
                    ?>
                <p><i><u class="p2Fi">Sinopsis : </u></i><?php echo $data['overview'] ?></p>
                <p><i><u class="p2Fi">Titulo Original : </u></i><?php echo $data['original_title'] ?></p>
            </div>
        </div>

        <div class="col-sm-4">
            <img id="imgSm" src="<?php echo 'https://image.tmdb.org/t/p/w300/' . $data['poster_path'] . '?api_key=a741455342cf023e81ade2e9b630b605' ?>" alt="">            
        </div>

        <!-- footer -->
        <div class="divFoot"> <?php include("includes/pie.php") ?></div>
        <!-- fin footer -->

    </div>
</body>
</html>