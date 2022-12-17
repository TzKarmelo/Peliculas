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
    if(isset($_POST['Enviar'])){
        if (isset($_POST['nombre']) AND !empty($_POST['nombre'])) {
            $nombre=$_POST['nombre'];
            $nombre = recogerVar($nombre); 
            $nombre = mysqli_real_escape_string($mysqli,$nombre);                             
        } else {
            $error = " * campos obligatorios<br><br>";
            $_SESSION['error'] = $error;              
            header('Location: acceso_reg.php');        
        }

        if (isset($_POST['apellidos']) AND !empty($_POST['apellidos'])) {
            $apellidos=$_POST['apellidos'];
            $apellidos = recogerVar($apellidos); 
            $apellidos = mysqli_real_escape_string($mysqli,$apellidos);                   
        } else {
            $error = " * campos obligatorios<br><br>";
            $_SESSION['error'] = $error;              
            header('Location: acceso_reg.php');        
        }
        
        if (isset($_POST['user']) AND !empty($_POST['user'])) {
            $user=$_POST['user'];
            $user = recogerVar($user);
            $user = mysqli_real_escape_string($mysqli,$user);            
        } else {
            $error = " * Campos obligatorios<br><br>";
            $_SESSION['error'] = $error;              
            header('Location: acceso_reg.php');        
        }
        
        if (isset($_POST['pass']) AND !empty($_POST['pass'])) {
            $clave=$_POST['pass'];
            $clave = recogerVar($clave);
            $clave = mysqli_real_escape_string($mysqli,$clave);
        } else {
            $error = " * Campos obligatorios<br><br>";
            $_SESSION['error'] = $error;
            header('Location: acceso_reg.php');
        }

        if (isset($_POST['mail']) AND !empty($_POST['mail'])) {
            $mail=$_POST['mail'];
            $mail = recogerVar($mail);
            $mail = mysqli_real_escape_string($mysqli,$mail);
        } else {
            $error = " * Campos obligatorios<br><br>";
            $_SESSION['error'] = $error;              
            header('Location: acceso_reg.php');        
        }

        if (isset($_POST['telefono']) AND !empty($_POST['telefono'])) {
            $telefono=$_POST['telefono'];
            $telefono = recogerVar($telefono);
            $telefono = mysqli_real_escape_string($mysqli,$telefono);
        } else {
            $error = " * Campos obligatorios<br><br>";
            $_SESSION['error'] = $error;              
            header('Location: acceso_reg.php');        
        }   
        
        $prequery = "SELECT usuario FROM usuarios WHERE usuario ='$user'";
        $respre = $mysqli->query($prequery);
        $filas = $respre->num_rows;
        
        if ($filas >0) {         
            $error = "El usuario ya existe";
            $_SESSION['error'] = $error;    
            $_SESSION['nombre'] = $nombre;
            $_SESSION['apellidos'] = $apellidos;
            $_SESSION['mail'] = $mail;
            $_SESSION['telefono'] = $telefono;              
            header ("Location: acceso_reg.php");            
        } else {
            $create_at = time();
            $modified_at = time();
            $estado = 'N';
            $query2 = "INSERT INTO usuarios (nombre,apellidos,usuario,clave,mail,telefono,estado,create_at,modified_at) VALUES ('$nombre','$apellidos','$user','$clave','$mail','$telefono','$estado','$create_at','$modified_at')";
            echo $query2;
            $res = $mysqli->query($query2);
            
            echo $mail;
            include("includes/phpmail01.php");
            if ($res > 0) {
                $controlReg = "Registro correcto. Bienvenido";
                $_SESSION['controlReg'] = $controlReg;
                $_SESSION['controlAcc'] = "";
                $_SESSION['error'] ="";
                header('Location: acceso.php');
            } else {
                $controlReg = "El registro ha fallado.";
                $_SESSION['controlReg'] = $controlReg;
                $_SESSION['controlAcc'] = "";
                $_SESSION['error'] ="";
                header('Location: acceso_reg.php');
            }            
        }
    }  
    ?>   
</body>
</html>