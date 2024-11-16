<?php
include 'conexion.php';

$resultado = $con   ->query("SELECT * FROM libros");

echo "<h2>Lista de Libros</h2>";
echo "<table border='1'>";
echo "<tr><th>id</th><th>imagen</th><th>titulo</th><th>autor</th><th>ideditorial</th><th>anio</th><th>idusuario</th><th>idcarrera</th></tr>";

while ($fila = $resultado->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $fila['id'] . "</td>";
    echo "<td><img src='" . $fila['imagen'] . "' alt='Imagen del libro' width='100'></td>";
    echo "<td>" . $fila['titulo'] . "</td>";
    echo "<td>" . $fila['autor'] . "</td>";
    echo "<td>" . $fila['ideditorial'] . "</td>";
    echo "<td>" . $fila['anio'] . "</td>";
    echo "<td>" . $fila['idusuario'] . "</td>";
    echo "<td>" . $fila['idcarrera'] . "</td>";

    echo "</tr>";
}

echo "</table>";

?>
