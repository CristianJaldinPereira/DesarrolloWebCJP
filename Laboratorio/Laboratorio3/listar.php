<?php
require 'conexion.php';


$orderColumn = isset($_GET['column']) ? $_GET['column'] : 'nombres'; 
$orderDirection = isset($_GET['direction']) && $_GET['direction'] === 'desc' ? 'desc' : 'asc';

$sql = "SELECT * FROM estudiantes ORDER BY $orderColumn $orderDirection";
$result = $conn->query($sql);


$nuevaDireccion = $orderDirection === 'asc' ? 'desc' : 'asc';

echo '<table id="alumnosTable">';
echo '<thead style="background-color: #023E8A; color: white;">';
echo '<tr>';
echo '<th><a href="?column=fotografia&direction=' . $nuevaDireccion . '" style="color: white;">Fotografía</a></th>'; 
echo '<th><a href="?column=nombres&direction=' . $nuevaDireccion . '" style="color: white;">Nombres</a></th>'; 
echo '<th><a href="?column=apellidos&direction=' . $nuevaDireccion . '" style="color: white;">Apellidos</a></th>'; 
echo '<th><a href="?column=cu&direction=' . $nuevaDireccion . '" style="color: white;">CU</a></th>'; 
echo '<th><a href="?column=sexo&direction=' . $nuevaDireccion . '" style="color: white;">Sexo</a></th>'; 
echo '<th><a href="?column=codigocarrera&direction=' . $nuevaDireccion . '" style="color: white;">Código Carrera</a></th>'; 
echo '</tr>';
echo '</thead>';
echo '<body>';

$rowClass = 'white'; 

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        $rowClass = ($rowClass === 'white') ? 'gray' : 'white';

        echo "<tr class='$rowClass'>";
        echo "<td style='color: white;'><img src='{$row['fotografia']}' alt='Foto' style='width: 100px; height: auto;'></td>"; 
        echo "<td>" . htmlspecialchars($row['nombres']) . "</td>";
        echo "<td>" . htmlspecialchars($row['apellidos']) . "</td>";
        echo "<td>" . htmlspecialchars($row['cu']) . "</td>";
        echo "<td>" . htmlspecialchars($row['sexo']) . "</td>";
        echo "<td>" . htmlspecialchars($row['codigocarrera']) . "</td>";
        echo '</tr>';
    }
} else {

    echo '<tr><td colspan="6">No se encontraron estudiantes.</td></tr>';
}

echo '</tbody>';
echo '</table>';

$conn->close();
?>

<style>
table {
    width: 100%; 
    border-collapse: collapse; 
}

th, td {
    border: 1px solid #000; 
    padding: 8px; 
    text-align: left; 
}

.white {
    background-color: white; 
}

.gray {
    background-color: #f2f2f2; 
}
</style>
