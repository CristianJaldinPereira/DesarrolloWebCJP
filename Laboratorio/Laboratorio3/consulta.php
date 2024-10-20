<?php
require 'conexion.php';

// Consulta para contar alumnos por sexo
$query = "SELECT sexo, COUNT(*) as total FROM estudiantes GROUP BY sexo";
$result = $conn->query($query);


$totalHombres = 0;
$totalMujeres = 0;

while ($row = $result->fetch_assoc()) {
    if ($row['sexo'] === 'M') {
        $totalHombres = $row['total'];
    } elseif ($row['sexo'] === 'F') {
        $totalMujeres = $row['total'];
    }
}


$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Alumnos por Sexo</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 20px;
}



table {
    width: 30%;
    border-collapse: collapse;
    margin-top: 20px;
}

td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}



    </style>
</head>
<body>
    <table>
        <body>
            <tr style="background-color: #f0f0f0;">
                <td>
                 Total Varones
                    <img src="imagenes/hombre.png" alt="Varón" style="width: 50px; height: 50px;">
                </td>
                <td><?php echo $totalHombres; ?></td>
            </tr>
            <tr style="background-color: #e6f7ff;">
                <td>
                Total Mujeres
                    <img src="imagenes/mujer.jpeg" alt="Mujer" style="width: 50px; height: 50px;">
                </td>
                <td><?php echo $totalMujeres; ?></td>
            </tr>
        </body>
    </table>
</body>
</html>
