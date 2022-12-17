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
    <title>Films Administrador Usuarios</title>

    <!-- Boostrap -->
    <?php include("includes/boostrap.php") ?>
    <!-- fin Boostrap -->
    <link href="css/panel_usrEstilo.css" rel="stylesheet">    
</head>

<body class="background">
    <!-- Navigator -->
    <?php include ("includes/navAdmin.php") ;?>
    <!-- fin Navigator -->

    <div class="row divRow">
        <div class="col-sm-8 divCol">
            <?php            
            
            $query = "SELECT * FROM usuarios";
            $resultado = mysqli_query($mysqli, $query);            
           
            echo '<table class="table-responsive tablePel"><thead>';
            echo '<tr>';
            echo '<th> Id </th><th> Nombre </th><th> Apellidos </th><th> Usuario </th><th> Clave </th><th> Mail </th><th> Teléfono </th><th> Estado </th><th> Editar </th>';
            echo '</tr></thead>';
            echo '<tbody class="table-group-divider">';

            foreach ($resultado as $valor) {
                echo '<tr valign="middle">';
                echo '<td>' . $valor['id'] . '</td><td>' . $valor['nombre'] . '</td><td>' . $valor['apellidos'] . '</td><td>' . $valor['usuario'] . '</td><td>' . $valor['clave'] . '</td><td>' . $valor['mail'] . '</td><td>' . $valor['telefono'] . '</td><td>' . $valor['estado'] . '</td><td><a class="button" href="editar_user.php?id=' . $valor['id'] . '" >Editar</a><a class="button" href="borrar_user.php?id=' . $valor['id'] . '"">Borrar</a></td>';
                echo '<tr>';
            }
            echo '</tbody></table>';
            
            ?>
            <!-- footer -->
            <div class="divFoot"> <?php include("includes/pie.php");?></div>
            <!-- fin footer -->            
        </div>
    </div>
</body>
</html>