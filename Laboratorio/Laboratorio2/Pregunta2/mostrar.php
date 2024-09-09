<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        table {
            border-collapse: collapse;
            width: 400px; /* Ajusta el ancho de la tabla según tus necesidades */
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #fd0000;
        }

        tr:nth-child(even) {
            background-color: #fd0000;   

        }

        .red {
            background-color: red;
        }
    </style>
<body>
<?php
session_start();
require_once("operaciones.php");
$a = $_SESSION['a1'];
$b = $_SESSION['b1'];
$c =$_SESSION['c1'];

$operaciones = new _operaciones($a, $b, $c);
//$operaciones->mostrarCalculos();
echo "<table border='1'>
        <tr>
            <th>valor de A</th>
            <th>valor de B</th>
            <th>valor de C</th>
        </tr>
        <tr>
            <td>".$a."</td>
            <td>".$b."</td>
            <td>".$c."</td>
        </tr>
        <tr>
            <td>Suma</td>
            <td>Mayor</td>
        </tr>
        <td>".$operaciones->calcularSuma()."</td>
        <td>".$operaciones->calcularMayor()."</td>
    </table>";
?>    
</body>
</html>


