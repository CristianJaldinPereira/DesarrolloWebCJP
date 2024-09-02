<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cadena = $_POST['cadena'];

    require_once 'OperacionesCadena.php';
    $operaciones = new OperacionesCadena($cadena);

    
    $invertida = $operaciones->invertir();
    $mayuscula = $operaciones->mayuscula();
    $minuscula = $operaciones->minuscula();
    
    echo "<h2>Resultados:</h2>";
    echo "<p>Cadena invertida: $invertida</p>";
    echo "<p>Cadena en mayúsculas: $mayuscula</p>";
    echo "<p>Cadena en minúsculas: $minuscula</p>";
}
?>
