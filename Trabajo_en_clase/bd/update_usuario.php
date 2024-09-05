<?php
include 'conexion.php';
$id=$_POST['id'];
$email=$_POST['email'];
$password=$_POST['password'];
$nivel=$_POST['nivel'];

$sql="UPDATE ususario SET id='$id',email='$email',password='$password',nivel='$nivel' WHERE id=$id";
$resultado=$con->query($sql);

if($resultado){
    ?>
    <h2>Registro actualizado correctamente</h2>
    <meta http-equiv="refresh" content="3;url=read_usuario.php">
    <?php
}else{
    echo "Error al actualizar";
}
?>








