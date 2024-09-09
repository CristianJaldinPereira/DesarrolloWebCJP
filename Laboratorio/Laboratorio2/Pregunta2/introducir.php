<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px; /* Ancho fijo para el formulario */
        }

        label {
            font-size: 16px;
            margin-bottom: 5px;
            display: block;
        }

        input[type="number"] {
            width: calc(100% - 20px); /* Ajustar el ancho del campo */
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #fd0000;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #fd0000;
        }

        input[type="submit"]:active {
            background-color: #fd0000;
        }
    </style>

<body>
    <form action="sesion.php" method="POST">
        <label for="n1">Introduzca a</label>
        <input type="number" id="n1" name="a"><br><br>
        <label for="n2">Introduzca b</label>
        <input type="number" id="n2" name="b"><br><br>
        <label for="n3">Introduzca c</label>
        <input type="number" id="n3" name="c"><br><br>
        <input type="submit" value="enviar">
    </form>
</body>

</html>