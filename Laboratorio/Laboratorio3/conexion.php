<?php
$conn = new mysqli('localhost', 'root', '', 'bd_alumnos');
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
    echo "";
}
?>
