<?php
$host = 'localhost';
$db = 'BDCarol'; // Cambia esto por el nombre de tu base de datos
$user = 'root'; // Por defecto, el usuario es 'root'
$pass = ''; // Por defecto, la contraseña está vacía

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>