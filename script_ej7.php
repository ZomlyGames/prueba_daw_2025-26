<?php

$palabra1 = $_POST["palabra1"];
$palabra2 = $_POST["palabra2"];

$palabra1 = strtolower($palabra1);
$palabra2 = strtolower($palabra2);

$resultado = "La primera palabra no es un anagrama de la segunda";

if($palabra1 == $palabra2){
    $resultado = "La primera palabra es un anagrama de la segunda";
}

echo $resultado;

?>