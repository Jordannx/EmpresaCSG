<?php include '../Public/navbar.php'; ?> <!-- Solo si tienes una barra de navegación, si no, la puedes omitir -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/style.css"> <!-- Enlaza tu CSS aquí -->
    <title>Clientes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        .header {
            text-align: center;
            padding: 20px;
            background-color: #2c3e50;
            color: white;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .content {
            flex: 1;
            background: white;
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .content h1 {
            font-size: 24px;
            color: #333;
        }

        .clients-list {
            list-style-type: none;
            padding: 0;
        }

        .clients-list li {
            padding: 10px;
            background-color: #ecf0f1;
            border-radius: 5px;
            margin: 10px 0;
            font-size: 18px;
            color: #34495e;
        }

        .clients-list li:hover {
            background-color: #bdc3c7;
        }

        .image-container {
            width: 45%;
            padding: 20px;
            text-align: center;
        }

        .image-container img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            background-color: #2c3e50;
            color: white;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>¡Gracias por ser parte de nuestra familia!</h1>
        <p>Nos complace informarle que nuestra empresa se viene desempeñando con éxito en el rubro de carpintería metálica, teniendo como principales clientes a:</p>
    </div>

    <div class="container">
        <div class="content">
            <h1>Lista de Clientes</h1>
            <ul class="clients-list">
                <li>GESTION UNO SAC</li>
                <li>ADGAVI & ASOCIADOS SAC</li>
                <li>SERVIPRO SRL</li>
                <li>RAS ARQUITECTOS CONSTRUCTORES EIRL</li>
                <li>PROMART HOMECENTER</li>
                <li>UNIVERSIDAD DE CIENCIAS APLICADAS (UPC)</li>
                <li>EITAL</li>
                <li>C&J CONSTRUCTORES SAC</li>
                <li>INTEGRAL PROJECT</li>
                <li>LTA INGENIEROS SAC</li>
                <li>INMOBILIARIA CASABLANCA</li>
            </ul>
        </div>

        <div class="image-container">
            <img src="../Public/img/clientes_imagen.png" alt="Imagen de clientes"> <!-- Cambia la ruta de la imagen aquí -->
        </div>
    </div>

    <div class="footer">
        <p>© 2024 C.S.G Contratistas Generales. Todos los derechos reservados.</p>
    </div>

</body>
</html>

