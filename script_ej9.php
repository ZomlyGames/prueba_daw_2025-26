<?php

function potencia($numeros){

    $mayor = max($numeros);
    $menor = min($numeros);
    $media = array_sum($numeros) / count($numeros);
    
    return array("mayor"=>$mayor, "menor"=>$menor, "media"=>$media);

}

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];
$num4 = $_POST["num4"];
$num5 = $_POST["num5"];

$numeros = array($num1, $num2, $num3, $num4, $num5);

$solucion = potencia($numeros);

$num_mayor = $solucion["mayor"];
$num_menor = $solucion["menor"];
$media_de_nums = $solucion["media"];

echo("El mayor es $num_mayor, el menor es $num_menor y la media es $media_de_nums");

?>