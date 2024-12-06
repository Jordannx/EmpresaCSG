<!DOCTYPE html>
<html lang="es">
<?php include '../Public/navbar.php'; ?>   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
    
    
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

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
        /* Contenedor principal */
        .container {
            width: 90%;
            max-width: 1200px;
            background-color: #ffffff;
            padding: 20px;
            margin: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Títulos */
        h2 {
            color: #1e3264;
            font-size: 1.8em;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Galería en cuadrícula */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }

        .gallery-item {
            text-align: center;
            overflow: hidden;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #fff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item p {
            padding: 10px;
            font-size: 14px;
            color: #333333;
        }

        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.15);
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        /* Pie de página */
        .footer {
            text-align: center;
            padding: 20px;
            font-size: 0.9em;
            color: #777777;
            margin-top: 20px;
            width: 100%;
        }
    </style>
</head>
<body>
    
<!-- Contenedor principal -->
<div class="container">
    <h2>Nuestros Proyectos</h2>
    <div class="gallery">
        <div class="gallery-item">
            <img src="../Public/img/proyecto1.jpg" alt="Edificio El Pinar IV San Borja">
            <p>EDIFICIO EL PINAR IV SAN BORJA</p>
        </div>
        <div class="gallery-item">
            <img src="../Public/img/proyecto2.jpg" alt="Edificio La Pradera I San Borja">
            <p>EDIFICIO LA PRADERA I SAN BORJA</p>
        </div>
        <div class="gallery-item">
            <img src="../Public/img/proyecto3.jpg" alt="Edificio Pinar VI">
            <p>EDIFICIO PINAR VI</p>
        </div>
        <div class="gallery-item">
            <img src="../Public/img/proyecto4.jpg" alt="Residencial Venecia">
            <p>EDIFICIO EL PINAR III SAN BORJA</p>
        </div>
        <div class="gallery-item">
            <img src="../Public/img/proyecto5.jpg" alt="Edificio El Pinar IV San Borja">
            <p>PINAR V SAN BORJA</p>
        </div>
        <div class="gallery-item">
            <img src="../Public/img/proyecto6.jpg" alt="Edificio La Pradera I San Borja">
            <p>RESIDENCIAL VENECIA</p>
        </div>
        <div class="gallery-item">
            <img src="../Public/img/proyecto7.jpg" alt="Edificio El Pinar IV San Borja">
            <p>COLEGIO GRAN UNIDAD JOSE GRANDA</p>
        </div>
        <div class="gallery-item">
            <img src="../Public/img/proyecto8.jpg" alt="Edificio La Pradera I San Borja">
            <p>PLAZA LIMA SUR</p>
        </div>
        <div class="gallery-item">
            <img src="../Public/img/proyecto9.jpg" alt="Edificio Pinar VI">
            <p>TOTTUS DOMINICO CALLAO</p>
        </div>
        <div class="gallery-item">
            <img src="../Public/img/proyecto10.jpg" alt="Residencial Venecia">
            <p>PROMART ATE</p>
        </div>
        <div class="gallery-item">
            <img src="../Public/img/proyecto11.jpg" alt="Edificio El Pinar IV San Borja">
            <p>PASAMANO RAMPA</p>
        </div>
        <div class="gallery-item">
            <img src="../Public/img/proyecto12.jpg" alt="Edificio La Pradera I San Borja">
            <p>PLANTA VANGUARD ICA</p>
        </div>
        <div class="gallery-item">
            <img src="../Public/img/proyecto13.jpg" alt="Edificio El Pinar IV San Borja">
            <p>ESCALERA METALICA</p>
        </div>
        <div class="gallery-item">
            <img src="../Public/img/proyecto14.jpg" alt="Edificio La Pradera I San Borja">
            <p>BARANDAS METALICAS</p>
        </div>
       
    </div>
</div>

<!-- Pie de página -->
<div class="footer">
    © 2024 C.S.G Contratistas Generales. Todos los derechos reservados.
</div>

</body>
</html>