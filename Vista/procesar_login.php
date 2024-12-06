<?php
include '../Includes/db.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['email' => $email]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($password, $usuario['password'])) {
        $_SESSION['usuario'] = $usuario['nombre'];
        $_SESSION['tipo'] = $usuario['tipo']; // Guardar el tipo de usuario.
        header("Location: ../Inicio/index.php");
    } else {
        echo "Correo o contraseña incorrectos.";
    }
}
?>

