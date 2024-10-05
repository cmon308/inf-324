<?php
// Datos de conexión
$host = 'localhost'; // O la dirección del servidor de tu base de datos
$db = 'bdcarol'; // Nombre de tu base de datos
$user = 'root'; // Usuario de la base de datos
$pass = ''; // Contraseña de la base de datos (deja vacío si no tienes)

try {
    // Crear conexión
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    // Configurar el modo de error de PDO para que lance excepciones
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Manejo de errores
    echo "Error de conexión: " . $e->getMessage();
}
?>
