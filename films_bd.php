<?php
session_start();
include("includes/conexion.php");
include("includes/funciones.php");
include("includes/votaciones.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <!-- Header -->
    <?php include("includes/header.php") ?>
    <!-- fin Header -->
    <title>Films Base Datos</title>

    <!-- Boostrap -->
    <?php include("includes/boostrap.php") ?>
    <!-- fin Boostrap -->

    <link href="css/films_bdEstilo.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
        function ratestar($id, $puntuacion) {
            $.ajax({
                type: 'GET',
                url: 'includes/votaciones.php',
                data: 'votarElemento=' + $id + '&puntuacion=' + $puntuacion,
                success: function(data) {
                    alert(data);
                    location.reload();
                }
            });
        }
    </script>

    <style type="text/css">
        .estrellas {
            text-shadow: 0 0 1px #F48F0A;
            cursor: pointer;
        }

        .estrella_dorada {
            color: gold;
        }

        .estrella_normal {
            color: black;
        }
    </style>
</head>

<body class="background" ;>

    <!-- Navigator -->
    <?php include("includes/navLog.php"); ?>
    <!-- fin Navigator -->

    <div class="row divRow">
        <div class="col-sm-10 divCol">
            <?php

            $V = new Votacion();

            $TAMANO_PAGINA = 10;

            if (isset($_GET["pagina"])) {
                $pagina = $_GET["pagina"];
                $inicio = ($pagina - 1) * $TAMANO_PAGINA;
            } else {
                $inicio = 0;
                $pagina = 1;
            }

            $query = "SELECT * FROM peliculas";
            $resultado = mysqli_query($mysqli, $query);

            $total_registros = mysqli_num_rows($resultado);
            $total_paginas = ceil($total_registros / $TAMANO_PAGINA);

            echo "Número de películas encontradas: " . $total_registros . "<br>";
            echo "Se muestran páginas de " . $TAMANO_PAGINA . " películas cada una.<br>";
            echo "Mostrando la página " . $pagina . " de " . $total_paginas . "<p><br>";

            $query2 = "SELECT * FROM peliculas LIMIT $inicio, $TAMANO_PAGINA";
            $resultados = mysqli_query($mysqli, $query2);

            // Paginación superior

            if (($pagina - 1) > 0) {
                echo "<a id='pag' href='films_bd.php?pagina=" . ($pagina - 1) . "'>< Anterior </a>";
            } else {
                echo "<a id='pagS' href='#'>< Anterior </a>";
            }

            for ($i = 1; $i <= $total_paginas; $i++) {
                if ($pagina == $i) {
                    echo "<a id='pagS' href='#'> " . $pagina . " </a>";
                } else {
                    echo "<a id='pag' href='films_bd.php?pagina=$i'>$i</a> ";
                }
            }

            if (($pagina + 1) <= $total_paginas) {
                echo "<a id='pag' href='films_bd.php?pagina=" . ($pagina + 1) . "'> Siguiente ></a>";
            } else {
                echo "<a id='pagS' href='#'> Siguiente ></a>";
            }

            // Fin paginación

            echo '<table class="table tableBd"><thead>';
            echo '<tr>';
            echo '<th>ID</th><th>Titulo</th><th>Estreno</th><th>Votaciones<th>Carátula</th><th>Ficha</th>';
            echo '</tr></thead>';
            echo '<tbody class="table-group-divider">';

            if ($total_registros) {
                while ($valor = mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
                    echo '<tr valign="middle">';
                    echo '<td>' . $valor['id'] . '</td><td>' . $valor['titulo'] . '</td><td>' . $valor['estreno'] . '</td><td>' . $V->obtener_la_puntuacion_de($valor['id']) . $V->mostrar_estrellitas_para($valor['id']) . 'Toca la estrella para votar</td><td><img class="imgDb" src="img/';
                    echo $valor['tmdb_id'];
                    echo '.jpg"></td><td><a class="button" href="films_bd_ficha.php?id=' . $valor['tmdb_id'] . '">Ficha</a>';
                    echo '<tr>';
                }
                echo '</tbody></table>';
                mysqli_free_result($resultados);

                // Paginación inferior

                if (($pagina - 1) > 0) {
                    echo "<a id='pag' href='films_bd.php?pagina=" . ($pagina - 1) . "'>< Anterior </a>";
                } else {
                    echo "<a id='pagS' href='#'>< Anterior </a>";
                }

                for ($i = 1; $i <= $total_paginas; $i++) {
                    if ($pagina == $i) {
                        echo "<a id='pagS' href='#'> " . $pagina . " </a>";
                    } else {
                        echo "<a id='pag' href='films_bd.php?pagina=$i'>$i</a> ";
                    }
                }

                if (($pagina + 1) <= $total_paginas) {
                    echo "<a id='pag' href='films_bd.php?pagina=" . ($pagina + 1) . "'> Siguiente ></a>";
                } else {
                    echo "<a id='pagS' href='#'> Siguiente ></a>";
                }

                // Fin paginación
            }
            ?>

            <!-- footer -->
            <div class="divFoot"> <?php include("includes/pie.php") ?></div>
            <!-- fin footer -->

        </div>
    </div>
</body>

</html>