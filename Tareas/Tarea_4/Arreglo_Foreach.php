<?php
// Generar un arreglo con los números del 1 al 20
$numeros = range(1, 20);

// Inicializar arreglos para pares e impares
$pares = [];
$impares = [];

// Separar los números en pares e impares utilizando un ciclo foreach
foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        $pares[] = $numero;
    } else {
        $impares[] = $numero;
    }
}

// Imprimir los arreglos
echo "Números Pares: " . implode(", ", $pares) . "<br>";
echo "Números Impares: " . implode(", ", $impares) . "<br>";
?>
