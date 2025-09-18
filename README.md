# prueba_daw_2025-26
Repositorio de prueba para DAW 25-26


Modificación realizada desde GitHub

<?php

$resultado = "La primera palabra no es un anagrama de la segunda";

if($_POST["palabra1"]== strrev($_POST["palabra2"])){
    $resultado = "La primera palabra es un anagrama de la segunda";
}

echo $resultado;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio del 6 al 10</title>
</head>
<body>
    
    <h1>Ejercicio 6</h1>
    
    <form action="/script_ej6.php" method="POST">
        <label>Números</label>
        <input name="numeros" type="number"><br>
        <button type="submit">Enviar</button>
    </form>

    <h1>Ejercicio 7</h1>
    
    <form action="/script_ej7.php" method="POST">
        <label>Palabra 1</label>
        <input name="palabra1" type="text"><br>
        <label>Palabra 2</label>
        <input name="palabra2" type="text"><br>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>
