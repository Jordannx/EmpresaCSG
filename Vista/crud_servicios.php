<?php
include '../Includes/db.php';
include '../Modelo/servicios_modelo.php';
$servicios = obtenerServicios();
if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] != '2') {
    header("Location: ../Inicio/index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Servicios</title>
    <link rel="stylesheet" href="../Public/css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 24px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #2980b9;
            color: white;
        }

        td button {
            padding: 6px 12px;
            margin-right: 5px;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-editar {
            background-color: #f39c12;
            color: white;
            border-radius: 4px;
        }

        .btn-eliminar {
            background-color: #e74c3c;
            color: white;
            border-radius: 4px;
        }

        .btn-agregar {
            background-color: #27ae60;
            color: white;
            border-radius: 4px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .form-container {
            width: 80%;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-container input, .form-container textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-container button {
            padding: 10px 20px;
            border: none;
            background-color: #2980b9;
            color: white;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #3498db;
        }
    </style>
</head>
<body>
<?php include '../Public/navbar.php'; ?>
    <header>
        <h1>Gestión de Servicios</h1>
    </header>

    <!-- Formulario para agregar/editar servicio -->
    <div class="form-container">
        <form action="../Controlador/servicios_controlador.php" method="POST">
            <input type="hidden" name="id" id="id">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" required></textarea>

            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" step="0.01" required>

            <button type="submit" name="accion" value="crear" class="btn-agregar">Agregar</button>
            <button type="submit" name="accion" value="editar" id="btnEditar" class="btn-agregar" style="display: none;">Actualizar</button>
        </form>
    </div>

    <!-- Tabla de servicios -->
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($servicios as $servicio): ?>
                <tr>
                    <td><?= $servicio['nombre'] ?></td>
                    <td><?= $servicio['descripcion'] ?></td>
                    <td>S/. <?= number_format($servicio['precio'], 2) ?></td>
                    <td>
                        <button class="btn-editar" onclick="editar(<?= $servicio['id'] ?>, '<?= $servicio['nombre'] ?>', '<?= $servicio['descripcion'] ?>', <?= $servicio['precio'] ?>)">Editar</button>
                        <a href="../Controlador/servicios_controlador.php?accion=eliminar&id=<?= $servicio['id'] ?>" class="btn-eliminar" onclick="return confirm('¿Seguro que deseas eliminar este servicio?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script>
        // Rellenar el formulario con los datos para editar
        function editar(id, nombre, descripcion, precio) {
            document.getElementById('id').value = id;
            document.getElementById('nombre').value = nombre;
            document.getElementById('descripcion').value = descripcion;
            document.getElementById('precio').value = precio;
            document.querySelector("button[name='accion'][value='crear']").style.display = 'none';
            document.getElementById('btnEditar').style.display = 'inline';
        }
    </script>

</body>
</html>
