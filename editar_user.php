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

    <link href="css/editar_usrEstilo.css" rel="stylesheet">    
</head>

<body class="background">

    <!-- Navigator -->
    <?php include ("includes/navAdmin.php") ;?>
    <!-- fin Navigator -->

    <div class="row divRow">
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
        $id = $_GET['id'];
        $_SESSION['id'] = $id;

        $query = "SELECT * FROM usuarios WHERE id = $id";
        $resultado = mysqli_query($mysqli, $query); 

        echo '<table class="table-responsive tablePel"><thead>';
        echo '<tr>';
        echo '<th>Id nº</th><th>Nombre</th><th>Apellidos</th><th>Usuario</th><th>Clave</th><th>Mail</th><th>Teléfono</th><th>Estado</th><th>Editar</th>';
        echo '</tr></thead>';
        echo '<tbody class="table-group-divider">';

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
            echo '<tr valign="middle">';
            echo '<td>' . $valor['id'] . '</td><td>' . $valor['nombre'] . '</td><td>' . $valor['apellidos'] . '</td><td>' . $valor['usuario'] . '</td><td>' . $valor['clave'] . '</td><td>' . $valor['mail'] . '</td><td>' . $valor['telefono'] . '</td><td>' . $valor['estado'] . '</td><td><a class="button" href="borrar_user.php?id=' . $valor['id'] . '"">Borrar</a></td>';
            echo '<tr>';
        }
        echo '</tbody></table>';
        ?>
        <form method="post" action="editar_user_2.php" class="formReg">
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
                    Estado: 
                    <input type="radio" name="estado" value="A">Administrador
                    <input type="radio" name="estado" value="D">Desactivado
                    <input type="radio" name="estado" value="B">Borrado
                    <input type="radio" name="estado" value="I">Imapagado
                    <input type="radio" name="estado" value="P">Pendiente
                    <input type="radio" name="estado" value="N" checked>Normal
                    <span class="spanErr"> * </span><br><br>
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