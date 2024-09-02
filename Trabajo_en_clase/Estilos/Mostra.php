<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .Grande{
            font-size: 32px;
            background-color: yellow;
            width: 250px;
            margin: 0 auto;
            border: 1px solid black;
        }
        .Mediano{
            font-size: 23px;
            background-color: blue;
            width: 200px;
            margin: 0 auto;
            border: 1px solid black;
        }
        .Pequeño{
            font-size: 12px;
            background-color: green;
            width: 200px;
            margin: 0 auto;
            border: 1px solid black;
        }
        
    </style>
</head>
<body>
    <div class="<?php echo $_GET['estilo'];?>">
        Programacion Web
    </div>
</body>
</html>