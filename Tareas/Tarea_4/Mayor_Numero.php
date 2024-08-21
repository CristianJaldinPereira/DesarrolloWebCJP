<?php
$numeros = [23, 45, 12, 78, 34];
$mayor = max($numeros);
$menor = min($numeros);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor y Menor Número</title>
    <style>
        .cuadro {
            border: 2px solid red;
            padding: 20px;
            margin: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="cuadro">
        <h3>Número Mayor</h3>
        <p><?php echo $mayor; ?></p>
    </div>

    <div class="cuadro">
        <h3>Número Menor</h3>
        <p><?php echo $menor; ?></p>
    </div>
</body>
</html>
