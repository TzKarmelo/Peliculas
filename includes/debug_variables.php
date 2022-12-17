<?php
echo '<H4>VARIABLES SESION</H4>';
foreach ($_SESSION as $key => $valor){
    echo "<p>$key = $valor </p>";
}
echo '<H4>POR METODO POST</H4>';
foreach ($_POST as $key => $valor){
    echo "<p>$key = $valor </p>";
}
echo '<H4>REQUEST METHOD</H4>';
echo $_SERVER['REQUEST_METHOD'];
?>