<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Ajedrez</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            width: 50px;
            height: 50px;
        }
        .negro {
            background-color: black;
        }
        .blanco {
            background-color: white;
        }
    </style>
</head>
<body>
    <table border="1">
        <?php
        $filas = 8; 
        $columnas = 8; 

        for ($i = 0; $i < $filas; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $columnas; $j++) {
               
                if (($i + $j) % 2 == 0) {
                    echo '<td class="negro"></td>';
                } else {
                    echo '<td class="blanco"></td>';
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
