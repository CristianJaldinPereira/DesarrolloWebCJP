<?php
include 'conexion.php';

$to = $_POST['to'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$bandeja = 'entrada';  
$estado = 'e'; 

$query = "INSERT INTO correos (bandeja, correo, asunto, mensaje, estado) VALUES ('$bandeja', '$to', '$subject', '$message', '$estado')";

if ($conn->query($query) === TRUE) {
    echo "Correo enviado exitosamente.";
} else {
    echo "Error: " . $conn->error;
}

?>
