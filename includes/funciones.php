<?php

function recogerVar($data)
{
    $data = trim($data);
    $data = addslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function cortar_texto($str, $n) {
    $arr = preg_split("/[\s]+/",  $str, $n+1);
    $arr = array_slice($arr, 0, $n);
    return join(' ', $arr);
}

?>
