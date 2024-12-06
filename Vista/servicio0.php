
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestros Servicios | CSG Contratistas Generales</title>
    <?php
include '../Public/navbar.php'; // Incluye tu barra de navegación si la tienes
?>
    <link rel="stylesheet" href="../Public/css/style.css"> <!-- Enlaza tu archivo CSS -->
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }

        

        /* Contenedor de servicios */
        .services-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Dos columnas en pantallas medianas */
            gap: 20px;
            max-width: 1200px;
            width: 100%;
            padding: 20px;
            margin-top: 30px;
        }

        /* Estilo para las tarjetas */
        .service-card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            position: relative;
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .service-card:hover {
            transform: scale(1.05); /* Efecto de escala al pasar el mouse */
        }

        .service-card img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .service-card h3 {
            font-size: 1.2em;
            color: #1e3264;
            margin: 15px 0 10px;
        }

        .service-card p {
            font-size: 1em;
            color: #555555;
            margin-bottom: 15px;
            padding: 0 10px;
        }

        /* Título principal */
        h2 {
            color: #1e3264;
            font-size: 1.8em;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<!-- Título de servicios -->
<h2>Nuestros Servicios</h2>

<!-- Contenedor de tarjetas de servicios -->
<div class="services-container">
    <!-- Tarjeta 1: Trabajos en drywall -->
    <a href="../Vista/servicio1.php" class="service-card">
        <img src="../Public/img/servicio1.png" alt="Trabajos en drywall">
        <h3>Trabajos en drywall</h3>
        <p>Ofrecemos soluciones versátiles para la instalación y construcción de sistemas de drywall, adaptados a tus necesidades arquitectónicas.</p>
    </a>

    <!-- Tarjeta 2: Trabajos en melamina -->
    <a href="../Vista/servicio2.php" class="service-card">
        <img src="../Public/img/servicio2.png" alt="Trabajos en melamina">
        <h3>Trabajos en melamina</h3>
        <p>Fabricamos muebles en melamina con acabados de alta calidad y diseños personalizados para cada cliente.</p>
    </a>

    <!-- Tarjeta 3: Estructuras metálicas -->
    <a href="../Vista/servicio3.php" class="service-card">
        <img src="../Public/img/servicio3.png" alt="Estructuras metálicas">
        <h3>Estructuras metálicas</h3>
        <p>Diseñamos y fabricamos estructuras metálicas resistentes y duraderas, adaptadas a las necesidades de tu proyecto.</p>
    </a>

    <!-- Tarjeta 4: Sistema levadizo -->
    <a href="../Vista/servicio4.php" class="service-card">
        <img src="../Public/img/servicio4.png" alt="Sistema levadizo">
        <h3>Sistema levadizo</h3>
        <p>Instalamos sistemas levadizos para optimizar el uso de espacio, ideales para garages y áreas industriales.</p>
    </a>
</div>

</body>
</html>
