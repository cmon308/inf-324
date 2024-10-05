<?php
// Datos de conexi�n
$host = 'localhost'; // O la direcci�n del servidor de tu base de datos
$db = 'bdcarol'; // Nombre de tu base de datos
$user = 'root'; // Usuario de la base de datos
$pass = ''; // Contrase�a de la base de datos (deja vac�o si no tienes)

try {
    // Crear conexi�n
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    // Configurar el modo de error de PDO para que lance excepciones
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Manejo de errores
    echo "Error de conexi�n: " . $e->getMessage();
}
?>
