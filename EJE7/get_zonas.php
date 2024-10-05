<?php
require 'conexion.php'; // Incluye tu archivo de conexión a la base de datos

if (isset($_POST['distrito_id'])) {
    $distrito_id = $_POST['distrito_id'];

    // Consulta para obtener las zonas del distrito
    $stmt = $pdo->prepare("SELECT * FROM zonas WHERE distrito_id = ?");
    $stmt->execute([$distrito_id]);
    $zonas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($zonas);
}
?>
