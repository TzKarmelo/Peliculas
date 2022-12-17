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
    if (isset($_POST['Enviar'])) {
        if (isset($_POST['nombre']) and !empty($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            $nombre = recogerVar($nombre);
            $nombre = mysqli_real_escape_string($mysqli, $nombre);
        } else {
            $error = " * campos obligatorios<br><br>";
            $_SESSION['error'] = $error;
            header('Location: acceso_reg.php');
        }

        if (isset($_POST['apellidos']) and !empty($_POST['apellidos'])) {
            $apellidos = $_POST['apellidos'];
            $apellidos = recogerVar($apellidos);
            $apellidos = mysqli_real_escape_string($mysqli, $apellidos);
        } else {
            $error = " * campos obligatorios<br><br>";
            $_SESSION['error'] = $error;
            header('Location: editar_user.php');
        }

        if (isset($_SESSION['usuario'])) {
            $user = $_SESSION['usuario'];
            $user = recogerVar($user);
            $user = mysqli_real_escape_string($mysqli, $user);
        }

        if (isset($_POST['pass']) and !empty($_POST['pass'])) {
            $clave = $_POST['pass'];
            $clave = recogerVar($clave);
            $clave = mysqli_real_escape_string($mysqli, $clave);
        } else {
            $error = " * Campos obligatorios<br><br>";
            $_SESSION['error'] = $error;
            header('Location: editar_user.php');
        }

        if (isset($_POST['mail']) and !empty($_POST['mail'])) {
            $mail = $_POST['mail'];
            $mail = recogerVar($mail);
            $mail = mysqli_real_escape_string($mysqli, $mail);
        } else {
            $error = " * Campos obligatorios<br><br>";
            $_SESSION['error'] = $error;
            header('Location: editar_user.php');
        }

        if (isset($_POST['telefono']) and !empty($_POST['telefono'])) {
            $telefono = $_POST['telefono'];
            $telefono = recogerVar($telefono);
            $telefono = mysqli_real_escape_string($mysqli, $telefono);
        } else {
            $error = " * Campos obligatorios<br><br>";
            $_SESSION['error'] = $error;
            header('Location: editar_user.php');
        }

        $estado = "N";

        $id = $_SESSION['id'];
        $prequery = "SELECT usuario FROM usuarios WHERE usuario ='$user'";
        $respre = $mysqli->query($prequery);
        $filas = $respre->num_rows;

        if ($filas > 0) {
            $create_at = time();
            $modified_at = time();            
            $query2 = "UPDATE usuarios SET  nombre = '$nombre',apellidos = '$apellidos',usuario = '$user',clave = '$clave',mail = '$mail',telefono = '$telefono',estado = '$estado',create_at = '$create_at',modified_at = '$modified_at' WHERE usuarios.id = $id";            
            $res = $mysqli->query($query2);   

            if ($res > 0) {
                $controlReg = "< Usuario editado correcto. >";
                $_SESSION['controlReg'] = $controlReg;
                $_SESSION['controlAcc'] = "";
                $_SESSION['error'] = "";
                header("Location: films_logueado.php?id='$id'");
            } else {
                $controlReg = "El registro ha fallado.";
                $_SESSION['controlReg'] = $controlReg;
                $_SESSION['controlAcc'] = "";
                $_SESSION['error'] = "";
                header("Location: films_logueado.php?id='$id'");
            }
        }
    }
    mysqli_close($mysqli);
    ?>
</html>