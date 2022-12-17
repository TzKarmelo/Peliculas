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
    <title>Films Administrador Peliculas</title>

    <!-- Boostrap -->
    <?php include("includes/boostrap.php") ?>
    <!-- fin Boostrap -->
    <link href="css/panel_pelEstilo.css" rel="stylesheet">    
</head>

<body class="background">
    <!-- Navigator -->
    <?php include ("includes/navAdmin.php") ;?>
    <!-- fin Navigator -->

    <div class="row divRow">
        <div class="col-sm-10 divCol">
            <?php
            $query = "SELECT * FROM peliculas";
            $resultado = mysqli_query($mysqli, $query);
            
            echo '<table class="table tablePel"><thead>';
            echo '<tr>';
            echo '<th>ID</th><th>Titulo</th><th>Estreno</th><th>Carátula</th><th>Editar</th>';
            echo '</tr></thead>';
            echo '<tbody class="table-group-divider">';

            foreach ($resultado as $valor) {
                echo '<tr valign="middle">';
                echo '<td>' . $valor['id'] . '</td><td>' . $valor['titulo'] . '</td><td>' . $valor['estreno'] . '</td><td><img id="imgPel" src="img/';
                echo $valor['tmdb_id'];
                echo '.jpg"></td><td><a id="bot" class="button" href="editar_peli.php?id=' . $valor['tmdb_id'] . '" >Editar</a></td>';
                echo '<tr>';
            }
            echo '</tbody></table>';
            ?>
            <!-- footer -->
            <div class="divFoot"> <?php include("includes/pie.php") ?></div>
            <!-- fin footer -->
        </div>
    </div>
</body>
</html>