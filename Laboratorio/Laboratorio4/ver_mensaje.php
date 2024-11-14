<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $emailId = intval($_GET['id']); 
    $query = "SELECT mensaje from correos WHERE id = $emailId";
    $result = $conn->query($query);

    if ($result) {
        if ($result->num_rows > 0) {
            $email = $result->fetch_assoc();
            echo "<p>Mensaje: " . $email['mensaje'] . "</p>";
        } else {
            echo "<p>Correo no encontrado.</p>";
        }
    } else {
        // Si la consulta falla
        echo "<p>Error al ejecutar la consulta: " . $conn->error . "</p>";
    }
} else {
    echo "<p>ID de correo no especificado.</p>";
}
?>
