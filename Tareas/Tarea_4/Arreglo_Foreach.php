<?php
$numeros = range(1, 20);
$pares = [];
$impares = [];

foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        $pares[] = $numero;
    } else {
        $impares[] = $numero;
    }
}

echo "Números Pares: " . implode(", ", $pares) . "<br>";
echo "Números Impares: " . implode(", ", $impares) . "<br>";
?>

