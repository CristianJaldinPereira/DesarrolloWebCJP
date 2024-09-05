<?php
include "conexion.php";
$email = $_POST['email'];
$password = sha1($_POST['password']);
$sql = "SELECT email, password FROM usuario WHERE email='$email' AND password='$password'";
$resultado = $con->query($sql);
if ($resultado){
    if ($fila = $resultado->fetch_assoc()){
        echo "Correcto";
    }
    else{
        echo "Incorrecto";
    }
}
else{
    echo "Hubo un error";
}