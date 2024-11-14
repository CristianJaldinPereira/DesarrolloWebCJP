<?php
include 'conexion.php';

$query = "SELECT * FROM correos WHERE bandeja='entrada'";
$result = $conn->query($query);

echo '<table border="1">';
echo '<tr><th>ID</th><th>Bandeja</th><th>Correo</th><th>Asunto</th><th>Mensaje</th><th>Estado</th><th>Acciones</th></tr>';

while ($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['bandeja'] . '</td>';
    echo '<td>' . $row['correo'] . '</td>';
    echo '<td>' . $row['asunto'] . '</td>';
    echo '<td>' . $row['mensaje'] . '</td>';
    echo '<td>' . $row['estado'] . '</td>';
    echo '<td><button class="viewEmail" data-id="' . $row['id'] . '">Ver</button></td>';
    echo '</tr>';
}

echo '</table>';


?>
