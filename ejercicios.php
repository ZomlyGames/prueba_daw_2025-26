<?php include_once "script_ej8.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio del 6 al 10</title>
</head>
<body>
    
    <h1>Ejercicio 6</h1>
    
    <form action="\script_ej6.php" method="POST">
        <label>Números</label>
        <input name="numeros" type="number"><br>
        <button type="submit">Enviar</button>
    </form>

    <h1>Ejercicio 7</h1>
    
    <form action="\script_ej7.php" method="POST">
        <label>Palabra 1</label>
        <input name="palabra1" type="text"><br>
        <label>Palabra 2</label>
        <input name="palabra2" type="text"><br>
        <button type="submit">Enviar</button>
    </form>

    <h1>Ejercicio 8</h1>
    <?php
    $resultado = potencia(2, 4)
    ?>

    <h1>Ejercicio 9</h1>

    <form action="\script_ej9.php" method="POST">
        <label>Número 1:</label>
        <input name="num1" type="number"><br>
        <label>Número 2:</label>
        <input name="num2" type="number"><br>
        <label>Número 3:</label>
        <input name="num3" type="number"><br>
        <label>Número 4:</label>
        <input name="num4" type="number"><br>
        <label>Número 5:</label>
        <input name="num5" type="number"><br>
        <button type="submit">Enviar</button>
    </form>

    <?php

    ?>

</body>
</html>
