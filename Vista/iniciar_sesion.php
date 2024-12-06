<?php include '../Includes/db.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../Public/css/style.css">
</head>
<body>
    <?php include '../Public/navbar.php'; ?>
    <main>
        <h2>Iniciar Sesión o Registrarse</h2>
        <form action="procesar_login.php" method="POST">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" name="login">Iniciar Sesión</button>
        </form>

        <h3>¿No tienes cuenta?<a href="registrarse.php">Regístrate aquí</a> </h3>
        <!-- <div id="rectángulo"></div> 
        <form action="procesar_registro.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" name="register">Registrarse</button>
        </form>
        -->
    </main>
</body>
</html>
