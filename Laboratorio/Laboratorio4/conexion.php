<?php
$conn = new mysqli("localhost", "root", "", "bd_correo");
if ($conn->connect_error)
    die("conexion fallada" . $con->connect_error);
?>
