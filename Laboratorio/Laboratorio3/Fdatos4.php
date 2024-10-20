<?php
require 'conexion.php';

function insertarEstudiantes($conn, $foto, $nombres, $apellidos, $cu, $sexo, $codigocarrera) {
    $sql = "INSERT INTO estudiantes (fotografia, nombres, apellidos, cu, sexo, codigocarrera)
            VALUES (?, ?, ?, ?, ?, ?)";

    $consulta = $conn->prepare($sql);
    if ($consulta === false) {
        die("Error en la consulta: " . $conn->error);
    }

    $consulta->bind_param("sssssi", $foto, $nombres, $apellidos, $cu, $sexo, $codigocarrera);

    if (!$consulta->execute()) {
        echo "Error al insertar el registro: " . $consulta->error;
    }


    $consulta->close();
}


for ($i = 1; $i <= 4; $i++) {
    if (isset($_POST["nombres$i"], $_POST["apellidos$i"], $_POST["cu$i"], $_POST["sexo$i"], $_POST["codigocarrera$i"])) {
 
        $foto = null; 
        if (isset($_FILES["foto$i"]) && $_FILES["foto$i"]["error"] == UPLOAD_ERR_OK) {
            $subirImagen = './imagenes/'; 
            $fileName = basename($_FILES["foto$i"]["name"]);
            $guardar = $subirImagen . $fileName;

            if (move_uploaded_file($_FILES["foto$i"]["tmp_name"], $guardar)) {
                $foto = $guardar; 
            } else {
                echo "Error al cargar la fotografía de $i.<br>";
            }
        }


        $nombres = $_POST["nombres$i"];
        $apellidos = $_POST["apellidos$i"];
        $cu = $_POST["cu$i"];
        $sexo = $_POST["sexo$i"];
        $codigocarrera = $_POST["codigocarrera$i"];


        insertarEstudiantes($conn, $foto, $nombres, $apellidos, $cu, $sexo, $codigocarrera);
    }
}


$conn->close();


echo "Los registros se han insertado correctamente.";
?>


