<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero de Ajedrez</title>
    <style>
        table {
            width: 500px;
            height: 500px;
            border-collapse: collapse;
            border: 1px solid black;
        }
        td {
            width: calc(500px / <?php echo $_POST['numerocolumnas']; ?>);
            height: calc(500px / <?php echo $_POST['numerofilas']; ?>);
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Tablero de Ajedrez</h1>
    <table>
        <?php
        $numFilas = (int)$_POST['numerofilas'];
        $numColumnas = (int)$_POST['numerocolumnas'];
        $filaBowser = (int)$_POST['fila'];
        $columnaBowser = (int)$_POST['columna'];
        $colorTablero = $_POST['color'];
        $colorBowser = "#FFC000"; 

        for ($i = 1; $i <= $numFilas; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $numColumnas; $j++) {
            
                if ($i == $filaBowser && $j == $columnaBowser) {
                    echo "<td style='background-color: $colorBowser;'>
                            <img src='imagenes/Bowser.png' alt='Bowser' width='50' height='50'>
                          </td>";
                } else {

                    $colorCasilla = (($i + $j) % 2 == 0) ? '#FFFFFF' : $colorTablero;
                    echo "<td style='background-color: $colorCasilla;'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
