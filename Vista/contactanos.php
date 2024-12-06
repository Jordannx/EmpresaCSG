

<?php include '../Public/navbar.php'; ?>   <!-- Incluir la barra de navegación -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="../Public/css/style.css">
    <style>
       .contacto-container {
    background-color: #ffffff; /* Color de fondo del contenedor de contacto */
    border-radius: 8px; /* Bordes redondeados del contenedor */
    padding: 20px; /* Espacio interior del contenedor */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra suave para darle un efecto de elevación */
    max-width: 600px; /* Ancho máximo del contenedor, centrado */
    margin: auto; /* Centra horizontalmente el contenedor */
}

.titulo {
    text-align: center; /* Centra el texto del título */
    color: #333; /* Color del texto del título */
}

.instrucciones {
    text-align: center; /* Centra el texto de instrucciones */
    font-size: 1.2em; /* Aumenta el tamaño del texto para hacerlo más grande */
    color: #555; /* Color gris para las instrucciones */
    margin: 10px 0; /* Espaciado vertical entre las instrucciones y otros elementos */
}

.contacto-form {
    display: flex; /* Utiliza un diseño flexible para la disposición de los elementos */
    flex-direction: column; /* Coloca los elementos del formulario en una columna */
    margin: 20px 0; /* Añade un margen superior e inferior alrededor del formulario */
}

.contacto-form label {
    margin-bottom: 5px; /* Espaciado entre el texto del label y su input */
    font-weight: bold; /* Hace el texto de los labels más grueso */
} 

.contacto-form input,
.contacto-form textarea {
    padding: 10px; /* Añade espacio dentro del input y textarea */
    margin-bottom: 15px; /* Añade un espacio inferior para separar los campos */
    border: 1px solid #ccc; /* Bordes grises alrededor de los inputs */
    border-radius: 5px; /* Bordes ligeramente redondeados para inputs y textarea */
}

.contacto-form input:focus,
.contacto-form textarea:focus {
    border-color: #007bff; /* Cambia el color del borde al hacer clic o enfocar el campo */
    outline: none; /* Elimina el borde exterior azul estándar del navegador */
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Añade un resplandor suave azul alrededor del campo enfocado */
}

.contacto-form button {
    padding: 10px; /* Espacio interno del botón */
    background-color: #007bff; /* Color de fondo azul del botón */
    color: white; /* Color del texto del botón en blanco */
    border: none; /* Elimina el borde predeterminado del botón */
    border-radius: 5px; /* Bordes redondeados del botón */
    cursor: pointer; /* Cambia el cursor a una mano al pasar sobre el botón */
    transition: background-color 0.3s; /* Añade una transición suave en el cambio de color de fondo */
}

.contacto-form button:hover {
    background-color: #0056b3; /* Color más oscuro del botón cuando se pasa el mouse por encima */
}

.agradecimiento {
    text-align: center; /* Centra el texto del mensaje de agradecimiento */
    font-style: italic; /* Hace que el texto esté en cursiva */
    color: #666; /* Color gris claro para el mensaje */
    margin-top: 20px; /* Añade un margen superior al mensaje de agradecimiento */
}

        </style>
</head>

<body>
    
    <div class="contacto-container">
        <h1 class="titulo">Contáctanos</h1>
        <p class="instrucciones">Por favor, llena el formulario y nos pondremos en contacto contigo.</p>

        <form class="contacto-form" id="contactoForm">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>

            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" placeholder="Ingresa tu correo electrónico" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu mensaje" required></textarea>

            <button type="submit">Enviar</button>
        </form>

        <div class="agradecimiento" id="agradecimiento" style="display: none;">
            ¡Gracias por contactarnos! Te responderemos pronto.
        </div>
    </div>

    <script src="../Public/js/contacto.js"></script>
    <!-- Pie de página -->
<footer style="text-align: center; padding: 10px; background-color: #f1f1f1; margin-top: 20px;">
    <p>&copy; 2024 C.S.G Contratistas Generales. Todos los derechos reservados.</p>
</footer>
</body>
</html>