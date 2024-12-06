<?php
include '../Modelo/servicios_modelo.php';
include '../Public/navbar.php';
$servicio = obtenerSegundoServicio();
if (!$servicio) {
    die('<h1>No se encontró ningún servicio en la base de datos.</h1>');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/navbar.css">
    <title>Detalles del Servicio</title>
    
    <style>
                /* Estilos para la barra de navegación */
.navbar {
    list-style: none; /* Elimina los puntos de la lista, ya que estamos usando <ul> con <li>. */
    margin: 0; /* Elimina el margen exterior por defecto de la lista. */
    padding: 0; /* Elimina el padding (relleno) por defecto de la lista. */
    display: flex; /* Aplica un diseño flexible para alinear los elementos dentro de la barra de navegación en línea horizontal. */
    justify-content: center; /* Alinea los elementos de la lista al centro horizontalmente. */
    background-color: #2c3e50; /* Aplica un color de fondo gris oscuro a la barra de navegación. */
}

.navbar li {
    margin: 0 15px; /* Agrega un margen de 15px a la izquierda y derecha de cada <li> para separarlos. */
}

.navbar a {
    text-decoration: none; /* Elimina el subrayado por defecto de los enlaces. */
    color: #e2e8ee; /* Aplica un color gris oscuro al texto de los enlaces. */
    font-weight: bold; /* Hace el texto de los enlaces en negrita. */
    padding: 10px 15px; /* Añade un relleno de 10px vertical y 15px horizontal dentro de cada enlace para hacerlo más grande. */
    display: block; /* Cambia el comportamiento de los enlaces para que ocupen toda la altura disponible (usado generalmente con padding para mejorar la zona clicable). */
    transition: background-color 0.3s; /* Define una transición suave para el cambio de color de fondo cuando el usuario pasa el ratón sobre el enlace. */
}

.navbar a:hover {
    background-color: #2c3e50; /* Cambia el color de fondo a gris oscuro cuando el usuario pasa el ratón sobre el enlace (hover). */
    border-radius: 5px; /* Aplica bordes redondeados de 5px al fondo del enlace cuando se pasa el ratón. */
}



/* Dropdown menu */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown a {
    cursor: pointer;
}

.dropdown-menu {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 120px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-menu li {
    padding: 10px;
    text-align: left;
}

.dropdown-menu li a {
    color: black;
    text-decoration: none;
}

.dropdown-menu li a:hover {
    background-color: #2c3e50;
}

.dropdown:hover .dropdown-menu {
    display: block;
}
@media (max-width: 768px) {
    .container {
        flex-direction: column; /* Apilar las secciones verticalmente */
        gap: 20px; /* Reducir el espacio entre las secciones */
    }

    .image-section, .content-section, .sidebar {
        max-width: 100%; /* Asegurar que las secciones ocupen el 100% en pantallas pequeñas */
        margin: 0 auto;
    }

    .button-container {
        flex-direction: column; /* Colocar los botones uno debajo del otro en pantallas pequeñas */
        align-items: center;
    }
}


        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        header {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 1rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .service-details {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 70%;
        }

        .service-details h1 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .service-details p {
            line-height: 1.6;
            color: #555;
        }

        .aside-info {
            width: 25%;
            background: white;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .aside-info h2 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #333;
        }

        .aside-info ul {
            list-style: none;
            padding: 0;
        }

        .aside-info li {
            margin-bottom: 10px;
            font-size: 16px;
            color: #555;
        }

        .buttons {
            margin-top: 20px;
        }

        .buttons a {
            text-decoration: none;
            color: white;
            background-color: #4CAF50;
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 10px;
            display: inline-block;
            font-size: 16px;
        }

        .buttons a:first-child {
            background-color: #007BFF;
        }

        .buttons a:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <header>
        <h1>Detalle del Servicio</h1>
    </header>

    <div class="container">
        <!-- Detalle del servicio -->
        <div class="service-details">
            <h1><?php echo htmlspecialchars($servicio['nombre']); ?></h1>
            <p><?php echo nl2br(htmlspecialchars($servicio['descripcion'])); ?></p>

            <div class="buttons">
                <a href="../Vista/servicio.php">← Regresar</a>
                <a href="#">Solicitar Servicio</a>
            </div>
        </div>

        <!-- Información adicional -->
        <aside class="aside-info">
            <h2>Precio</h2>
            <ul>
                <li>S/. <?php echo number_format($servicio['precio'], 2); ?></li>
            </ul>
        </aside>
    </div>
    <footer style="text-align: center; padding: 10px; background-color: #f1f1f1; margin-top: 20px;">
    <p>&copy; 2024 C.S.G Contratistas Generales. Todos los derechos reservados.</p>
</footer>
</body>

</html>