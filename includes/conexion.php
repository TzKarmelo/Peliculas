<?php
// DEFINICION VALORES CONEXION
$server="localhost";   // Nuestro server mysql :puerto 
$database="ifcd02110";   // Nuestra base de datos  
$dbpass=""; //Nuestro password mysql  
$dbuser="root";    // Nuestro user mysql 
$mysqli = @new mysqli($server, $dbuser, $dbpass, $database); // @ => saltar el error de sistema para manejar el error en el if...
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>           