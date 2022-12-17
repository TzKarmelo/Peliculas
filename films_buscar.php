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

    <title>Films Buscar</title>

    <!-- Boostrap -->
    <?php include("includes/boostrap.php") ?>
    <!-- fin Boostrap -->

    <link href="css/films_busEstilo.css" rel="stylesheet">     
</head>

<?php
        $errorGrabar = "";        
        if (isset($_SESSION['errorGrabar'])) {
            $errorGrabar= $_SESSION['errorGrabar'];
        }
?>

<body class="background">

    <!-- Navigator -->
    <?php include ("includes/navLog.php") ;?>
    <!-- fin Navigator -->

    <div class="divBus">
        <form class="d-flex float-right" name="form1" method="POST" action="">
            <input class="form-control me-2" type="text" name="search" placeholder="Busca tu pelicula" autofocus><br>
            <input class="button" type="submit" name="submit" value="Buscar" ><br>
        </form><br>
    </div>
    <span class="spanBus"><?php echo $errorGrabar ?></span>
    <div class="divCon">
        <div id="contenedor">
            <?PHP            
            if (isset($_REQUEST['search'])) {                
                $search = urlencode($_REQUEST['search']);
                $pagBuscar = 1;
                if (isset($_REQUEST['pagina'])) {
                    $pagBuscar = $_REQUEST['pagina'];
                }
                $url = "https://api.themoviedb.org/3/search/movie?api_key=a741455342cf023e81ade2e9b630b605&language=es-ES&query=$search&page=$pagBuscar";
                if (empty($search)) {
                    ?><span class="spanCon"><?php echo "Introduce el término de busqueda...";?></span><?php
                    exit;
                }
                $resultado = file_get_contents("$url");
                $data = json_decode($resultado, true);
                $peliculas = $data['results'];
                $numpag = $data['total_pages'];
                $pag = $data['page'];
                foreach ($peliculas as  $valor) {
            ?>
                    <div class="divCard">
                        <?php  if (!empty( $valor['poster_path'])) {$imagen = 'https://image.tmdb.org/t/p/w300/' . $valor['poster_path'] . '?api_key=a741455342cf023e81ade2e9b630b605'; } else { $imagen = 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/da/Imagen_no_disponible.svg/1200px-Imagen_no_disponible.svg.png';}?>
                        <div class="card-body">    
                            <img src="<?php echo $imagen ?>" alt="" class="imgCard">                        
                            <h6 class="card-title h5Card"><?php echo $valor['title'] ?></h6>                            
                        </div>
                        <?php  if (!empty( $valor['release_date'])) {$releaseD = $valor['release_date']; } else { $releaseD = '...';}?>
                        <ul class="list-group list-group-flush ullist">
                            <li id="ullist" class="list-group-item">Released: <?php echo $releaseD ?></li>
                            <li class="list-group-item liCard"><?php echo cortar_texto($valor['overview'], 15) ?>...</li>
                            <li id="ullist" class="list-group-item">id. <?php echo $valor['id'] ?></li>
                        </ul>
                        <div class="card-body">
                            <?php $id = $valor['id'];?>
                            <a href="films_ficha.php?id=<?php echo $id; ?>">Ficha Pelicula</a>
                        </div>
                    </div>
            <?php
                } 
                echo '<div class="row divPag">';
                echo '<div class="row divRow";>';
                echo "<p class='pPag'>Página $pag de $numpag >> ";                
                $pagina ="films_buscar.php?search=$search&pagina=$pag";
                for ($i = 1; $i <= $numpag; $i++) { 
                    echo "<a class= '";if ($pagina =="films_buscar.php?search=$search&pagina=$i") {echo 'activa';} else {echo 'inactiva';};echo "' href='films_buscar.php?search=$search&pagina=$i'> $i </a>/";                    
                }
                echo '</p>';
                echo '</div></div></div>';               
            }
            ?>

            <!-- footer -->
            <div class="divFoot"> <?php include("includes/pie.php") ?></div>
            <!-- fin footer -->
            
        </div>        
    </div>
</body>
</html>