<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     <style>
        table {
    border-collapse: collapse;
}

th, td {
    border: 1px solid black;
    padding: 10px;
    text-align: center;
}
.red {
    font-weight: bold;
    background-color: red;
}

    </style>
<body>
<table>
        <?php
     $filas = $_POST['filas'];
     $columnas = $_POST['columnas'];
     for ($i = 1; $i <= $filas + 1; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $columnas + 1; $j++) {
            if ($i == $filas + 1 && $j == $columnas + 1) {
                
                echo "<td class='red'></td>";
            } else if ($i == $filas + 1) {
                
                echo "<td class='red'>" . ($columnas + 1 - $j) . "</td>";
            } else if ($j == $columnas + 1) {
                
                echo "<td class='red'>" . ($filas + 1 - $i) . "</td>";
            } else {
                
                echo "<td>" . (($filas + 1 - $i) * ($columnas + 1 - $j)) . "</td>";
            }
        }
        echo "</tr>";
    }

        ?>
    </table>
</body>
</html>



