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

    <title>Films Administrador</title>

    <!-- Boostrap -->
    <?php include("includes/boostrap.php") ?>
    <!-- fin Boostrap -->

    <link href="css/films_editar_usrEstilo.css" rel="stylesheet">    
</head>

<body class="background">

    <!-- Navigator -->
    <?php include ("includes/navLog.php") ;?>
    <!-- fin Navigator -->

    
    <div class="col-sm-10 divCol">
        <?php 
        $error = "";
        $controlReg = "";
        $controlAcc = "";
        $nombre = "";
        $apellidos = "";
        $mail = "";
        $telefono = "";
        $clave = "";
        $estado= "";
        $id = $_SESSION['id'];
        
        $query = "SELECT * FROM usuarios WHERE id = $id";
        $resultado = mysqli_query($mysqli, $query);
        
        foreach ($resultado as $valor) {
            $error = "";
            $controlReg = "";
            $controlAcc = "";
            $nombre = $valor['nombre'];
            $_SESSION['nombre'] = $nombre;
            $user = $valor['usuario'];
            $_SESSION['usuario'] = $user;
            $apellidos = $valor['apellidos'];
            $mail = $valor['mail'];
            $telefono = $valor['telefono'];
            $clave = $valor['clave'];
            $estado= $valor['estado'];
            
        }
        
        ?>
        <form method="post" action="films_editar_user_2.php" class="formReg">
            <fieldset class="fieldReg">
                <legend>
                    <h2>Editar</h2>
                </legend>
                <span class="spanReg"><?php echo $error;echo $controlReg;echo $controlAcc?></span>                    
                Nombre: <input type="text" name="nombre" value="<?php echo $nombre; ?>"><span class="spanErr"> * </span><br><br>
                Apellidos: <input type="text" name="apellidos" value="<?php echo $apellidos; ?>"><span class="spanErr"> * </span><br><br>                    
                Contraseña: <input type="text" name="pass" value="<?php echo $clave; ?>"><span class="spanErr"> * </span><br><br>
                E-mail: <input type="text" name="mail" value="<?php echo $mail; ?>"><span class="spanErr"> * </span><br><br>
                Teléfono: <input type="text" name="telefono" value="<?php echo $telefono; ?>"><span class="spanErr"> * </span><br><br>                    
                <p><input class="button" type="submit" name="Enviar" value="Enviar"></p>
            </fieldset>                
        </form>            
    </div>

        <!-- footer -->
        <div class="divFoot"> <?php include("includes/pie.php") ?></div>
        <!-- fin footer -->        

        </div>
    </div>
</body>
</html>