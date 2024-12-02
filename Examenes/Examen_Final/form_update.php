<?php 
include 'conexion.php';


$id=$_GET['id'];
$sql="SELECT id, imagen, titulo, autor, ideditorial, anio, idusuario, idcarrera FROM libros WHERE id=$id";
$sql2 ="SELECT id FROM libros";

$resultado=$con->query($sql);
$resultado2 = $con->query($sql2);
$fila=$resultado->fetch_assoc();
?>

<form action="javascript:actualizar()" method="post" enctype="multipart/form-data" id="formulario">
    <img src="images/<?php echo $fila['imagenes']; ?>">
    <input type="file" name="imagenes" id="imagenes"><br>
    <input type="hidden" name="id" value="<?php echo $fila['id'];?>">
    <label for="titulo">titulo</label>
    <input type="text" name="titulo"  value="<?php echo $fila['titulo'];?>"><br>
    <label for="autor">autor</label>
    <input type="text" name="autor"  value="<?php echo $fila['autor'];?>"><br>
    <label for="ideditorial">ideditorial</label>
    <input type="text" name="ideditorial"  value="<?php echo $fila['ideditorial'];?>"><br>
    <label for="anio">anio</label>
    <input type="date" name="anio"  value="<?php echo $fila['anio'];?>"><br>
    <label for="idusuario">idusuario</label>
    <input type="text" name="idusuario"  value="<?php echo $fila['idcarrera'];?>"><br>
    <label for="idcarrera">idcarrera</label>
    <input type="text" name="idcarrera"  value="<?php echo $fila['idcarrera'];?>"><br>
    <input type="submit" value="Actualizar">
</form>

