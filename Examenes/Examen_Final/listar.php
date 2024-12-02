<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Libros</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="./estilos.css" rel="stylesheet">
</head>

<?php
include 'verificar.php';
include 'conexion.php';
$sql = "SELECT id,imagen,titulo,autor, ideditorial,anio,idusuario,idcarrera from libros";
$resultado = $con->query($sql);
?>

<body>
    <div class="container mt-4">
        <h2 class="mb-4">Lista de Libros</h2>
        <div class="btn-group mb-3" role="group">
            <button type="button" class="btn btn-primary">Todos</button>
            <button type="button" class="btn btn-outline-primary">Ingeniería en Sistemas de Información</button>
            <button type="button" class="btn btn-outline-primary">Licenciatura en Administración de Empresas</button>
            <button type="button" class="btn btn-outline-primary">Ingeniería Industrial</button>
            <button type="button" class="btn btn-outline-primary">Licenciatura en Psicología</button>
            <button type="button" class="btn btn-outline-primary">Medicina</button>
        </div>

        <?php
        if ($resultado->num_rows > 0) { ?>
            <div style="max-height: 700px; overflow-y: auto;">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Imagen</th>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Editorial</th>
                            <th>Año</th>
                            <th>Carrera</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $resultado->fetch_assoc()) { ?>
                            <tr>
                                <td><img src="images/<?php echo $row['imagen'] ?>" alt="Portada"></td>
                                <td><?php echo $row['titulo'] ?></td>
                                <td><?php echo $row['autor'] ?></td>
                                <td><?php echo $row['ideditorial'] ?></td>
                                <td><?php echo $row['anio'] ?></td>
                                <td><?php echo $row['idcarrera'] ?></td>
                                <td>
                                <a href="javascript:actualizar('form_update.php?id=<?php echo $fila['id'];?>')">Editar</a> 
                                <a href="javascript:confirmar('Desea Eliminar a la Persona',<?php echo $fila['id'];?>)">Eliminar</a>
                                </td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            <?php } else { ?>
                <div>no hay registros d libros en la base de datos </div>
            <?php }
            ?>
            </div>
    </div>
    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>