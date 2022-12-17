<?php
session_start();
include("includes/conexion.php");
include("includes/funciones.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    
    <!-- Header -->
    <?php include("includes/header.php") ?>
    <!-- fin Header -->

    <title>Comprobación usuario</title>    
</head>

<body>
    <?php
    $user = "";
    $clave = "";
    $controlAcc = "";

    if (isset($_POST['user']) and !empty($_POST['user'])) {
        $user = $_POST['user'];
        $user = recogerVar($user);
    } else {
        $error = " * campos obligatorios<br><br>";
        $_SESSION['error'] = $error;
        header('Location: acceso.php');
    }

    if (isset($_POST['pass']) and !empty($_POST['pass'])) {
        $clave = $_POST['pass'];
        $clave = recogerVar($clave);
    } else {
        $error = " Usuario y contraseña<br>obligatorios<br>";
        $_SESSION['error'] = $error;
        header('Location: acceso.php');
    }

    $query = "SELECT * FROM usuarios WHERE (usuario = '$user') AND (clave = '$clave')";
    $res = mysqli_query($mysqli, $query);
    $counter = mysqli_num_rows($res);

    if ($counter == 1) {
        $_SESSION['login_user'] = $user;
        $fila = mysqli_fetch_assoc($res);

        $_SESSION['nombre'] = $fila['nombre'];
        $_SESSION['estado'] = $fila['estado'];
        $_SESSION['id'] = $fila['id'];
        echo "<br><br><h1>Usuario y contraseña correctos. Bienvenido " . $fila['nombre'] . "</h1><br>";
        switch ($_SESSION['estado']) {
            case 'A':
                header('Location: panel_control_admin.php');
                break;
            case 'D':
                $controlAcc = "Su cuenta esta descativada. Contacte con administración.";
                $_SESSION['controlAcc'] = $controlAcc;
                header("Location: acceso.php");
                break;
            case 'B':
                $controlAcc = "Su cuenta ha sido eliminada.";
                $_SESSION['controlAcc'] = $controlAcc;
                header("Location: acceso.php");
                break;
            case 'I':
                $controlAcc = "Ha habido un problema con su cuenta. Contacte con administración";
                $_SESSION['controlAcc'] = $controlAcc;
                header("Location: acceso.php");
                break;
            case 'P':
                $controlAcc = "Pendiente confirmación email.";
                $_SESSION['controlAcc'] = $controlAcc;
                header("Location: acceso.php");
                break;
            case 'N':
                header('Location:films_logueado.php');
                break;
            default:
                echo 'Cagada';
                break;
        }
    } else {
        $controlAcc = "Usuario o contraseña incorrectos.";
        $_SESSION['controlAcc'] = $controlAcc;
        header("Location: acceso.php");
    }
    ?>
</body>
</html>