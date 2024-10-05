<?php
require 'conexion.php'; // Incluye tu archivo de conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ci = $_POST['ci'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $zona = $_POST['zona']; // Zona seleccionada

    // Inserción en la tabla persona
    $stmt = $pdo->prepare("INSERT INTO persona (ci, nombre, paterno, materno) VALUES (?, ?, ?, ?)");
    if ($stmt->execute([$ci, $nombre, $paterno, $materno])) {
        // También puedes insertar la zona si es necesario
        // Ejemplo: solo si hay una relación, puede que no sea necesario.
        echo "Registro exitoso.";
    } else {
        echo "Error en el registro.";
    }
}
?>
