<?php
// Iniciar sesión para todo el proyecto
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$host = 'localhost';
$dbname = 'sistema_usuarios';
$user = 'root'; // Usuario predeterminado de XAMPP
$password = ''; // Contraseña predeterminada de XAMPP (vacía)

// Intentar la conexión
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>
