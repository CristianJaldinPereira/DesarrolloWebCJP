<?php
$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
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

