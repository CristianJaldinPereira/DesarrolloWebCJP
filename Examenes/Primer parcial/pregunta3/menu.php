<?php
if (isset($_POST['a']) && isset($_POST['b'])) {
    include 'pregunta3.php';
    $operaciones = new pregunta3($_POST['a'], $_POST['b']);
} elseif (isset($_COOKIE['a']) && isset($_COOKIE['b'])) {
    include 'pregunta3.php';
    $operaciones = new pregunta3($_COOKIE['a'], $_COOKIE['b']);
} else {
    header("Location: pregunta3.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Operaciones</title>
    <style>
        body {
            background-color: #e0e0e0;
            color: #333;
        }
        button {
            margin: 5px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .sumar button
        {
            background-color: #C60000;
            border: 1px solid black;

        }
        .restar button
        {
            background-color: #FFC000 ;
            border: 1px solid black;
        }
        .multiplicar button
        {
            background-color: #0070C0 ;
            border: 1px solid black;
            color: black;
        }
        .dividir button
        {
            background-color: #92D050;
            border: 1px solid black;
        }
        form
        {
            border: 2px solid black;
            width: 100px;
            height: 200px;
        }
      
    </style>
</head>
<body>
    <h1>Seleccione una operación</h1>
    <form action="" method="POST">
        <div class="sumar">
        <button name="operacion" value="sumar">Sumar</button>
        </div>
      <div class="restar">
      <button name="operacion" value="restar">Restar</button>
      </div>
       <div class="multiplicar">
       <button name="operacion" value="multiplicar">Multiplicar</button>
       </div>
      <div class="dividir">
      <button name="operacion" value="dividir">Dividir</button>
      </div>
      
    </form>

    <?php
    if (isset($_POST['operacion'])) {
        $resultado = 0;
        switch ($_POST['operacion']) {
            case 'sumar':
                $resultado = $operaciones->sumar();
                break;
            case 'restar':
                $resultado = $operaciones->restar();
                break;
            case 'multiplicar':
                $resultado = $operaciones->multiplicar();
                break;
            case 'dividir':
                $resultado = $operaciones->dividir();
                break;
        }
        echo "<h2>Resultado: $resultado</h2>";
    }

    if (isset($_COOKIE['c'])) {
        echo "<p>Resultado guardado: " . $_COOKIE['c'] . "</p>";
    }
    ?>
</body>
</html>
