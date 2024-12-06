
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSG Contratistas Generales</title>
    <link rel="stylesheet" href="../Public/css/style.css">
    <?php include '../Public/navbar.php'; ?>
    <style>
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
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;

        }
        /* Barra de navegación */
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


        /* Contenedor principal */
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            gap: 20px;
        }

        .text-section {
            flex: 1;
            padding-right: 20px;
        }

        .text-section h1 {
            color: #1e3264;
            font-size: 1.8em;
            margin-bottom: 20px;
        }

        .text-section p {
            color: #555555;
            font-size: 1em;
            line-height: 1.6;
        }

        .image-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-section img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Sección de especialidades */
        .specialties {
            text-align: center;
            padding: 40px 20px;
            background-color: #e9ecef;
            margin-top: 20px;
        }

        .specialties h2 {
            color: #343a40;
            font-size: 1.8em;
            margin-bottom: 10px;
        }

        .specialties p {
            color: #555555;
            font-size: 1em;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto 20px auto;
        }

        /* Tarjetas de especialidades */
        .specialty-cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .card {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 250px;
            text-align: center;
        }

        .card h3 {
            color: #1e3264;
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .card p {
            color: #555555;
            font-size: 0.95em;
            line-height: 1.4;
        }

        /* Pie de página */
        .footer {
            text-align: center;
            padding: 20px;
            font-size: 0.9em;
            color: #777777;
            background-color: #f5f5f5;
            margin-top: 20px;
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
    </style>
</head>
<body>

<!-- Contenedor principal -->
<div class="container">
    <div class="text-section">
        <h1>Bienvenidos a C.S.G Contratistas Generales</h1>
        <p>
            En C.S.G Contratistas Generales, transformamos tus ideas en realidad a través de soluciones innovadoras en carpintería metálica. Con un equipo de expertos y con muchos años de experiencia en el sector, nos comprometemos a ofrecerte la más alta calidad y durabilidad en cada proyecto. Desde la fabricación de estructuras metálicas hasta trabajos personalizados, nuestra pasión por el diseño y la funcionalidad nos distingue.
        </p>
        <p>
            Descubre cómo podemos ayudarte a crear estructuras robustas y elegantes que se adapten a tus necesidades. Tu satisfacción es nuestra prioridad.
        </p>
    </div>
    <div class="image-section">
        <img src="../Public/img/bienvenido.jpg" alt="Imagen logo">
    </div>
</div>

<!-- Sección de especialidades -->
<div class="specialties">
    <h2>Nuestras Especialidades</h2>
    <p>
        En C.S.G Contratistas Generales, nos especializamos en diversas áreas de la carpintería metálica. Nuestros servicios están diseñados para satisfacer las necesidades específicas de nuestros clientes y garantizar la máxima calidad en cada proyecto.
    </p>
    
    <!-- Tarjetas de especialidades -->
    <div class="specialty-cards">
        <div class="card">
            <h3>Fabricación de Estructuras Metálicas</h3>
            <p>Diseñamos y fabricamos estructuras metálicas resistentes y duraderas para cualquier tipo de construcción.</p>
        </div>
        <div class="card">
            <h3>Trabajos Personalizados</h3>
            <p>Instalamos drywall y fabricamos muebles en melamina, con acabados de alta calidad y diseños personalizados.</p>
        </div>
        <div class="card">
            <h3>Sistemas Levadizos</h3>
            <p>Instalamos sistemas levadizos eficientes y seguros, ideales para garages y espacios industriales.</p>
        </div>
        <div class="card">
            <h3>Reparaciones y Mantenimiento</h3>
            <p>Ofrecemos servicios de reparación y mantenimiento para garantizar la longevidad de tus estructuras metálicas.</p>
        </div>
    </div>
</div>

<!-- Pie de página -->
<div class="footer">
    © 2024 C.S.G Contratistas Generales. Todos los derechos reservados.
</div>

</body>
</html>

