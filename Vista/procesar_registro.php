<?php
include '../Includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $tipo = '1'; // Por defecto, usuario normal.

    $sql = "INSERT INTO usuarios (nombre, email, password, tipo) VALUES (:nombre, :email, :password, :tipo)";
    $stmt = $conn->prepare($sql);

    try {
        $stmt->execute(['nombre' => $nombre, 'email' => $email, 'password' => $password, 'tipo' => $tipo]);
        header("Location: iniciar_sesion.php"); // Redirigir al login tras registrarse.
        exit();
    } catch (PDOException $e) {
        echo "Error al registrar el usuario: " . $e->getMessage();
    }
}
?>

