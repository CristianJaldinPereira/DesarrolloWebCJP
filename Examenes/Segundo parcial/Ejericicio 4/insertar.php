<?php
include 'conexion.php';

$id = $_POST["id"];
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$ideditorial = $_POST["ideditorial"];
$anio = $_POST["anio"];
$idusuario = $_POST["idusuario"];
$idcarrera = $_POST["idcarrera"];
$archivo_original = $_FILES['imagen']['name'];
$arreglo = explode(".", $archivo_original);
$extension = end($arreglo);
$imagen = uniqid() . '.' . $extension;

copy($_FILES['imagen ']['tmp_name'],'images/'.$imagen);

$sql = "INSERT INTO libros (id, imagen, titulo, autor, ideditorial, anio, idusuario, idcarrera) 
        VALUES ('$id', '$imagen', '$titulo', '$autor', '$ideditorial', '$anio', '$idusuario', '$idcarrera')";

$resultado = $con->query($sql);
if ($resultado) { ?>
    <h1>Datos insertados correctamente</h1>
<?php
} else {
    echo "Error al insertar los datos: " . $con->error;
}
?>
