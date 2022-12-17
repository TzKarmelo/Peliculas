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
    $id = $_GET['id'];
    $query = "DELETE FROM usuarios WHERE id = $id";
    $resultado = $mysqli->query($query);
    header('Location: panel_control_usuarios.php');
    mysqli_close($mysqli);
?>
</body>
</html>