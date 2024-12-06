<?php
include '../Includes/db.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="../Public/css/style.css">
</head>
<body>
    <?php include '../Public/navbar.php'; ?>
    <main>
        <h1>Registrarse</h1>
        <form action="procesar_registro.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit" name="register">Registrarse</button>
        </form>
    </main>
</body>
</html>
