<?php
include '../Modelo/servicios_modelo.php';

// Crear un servicio
if (isset($_POST['accion']) && $_POST['accion'] == 'crear') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    agregarServicio($nombre, $descripcion, $precio);
    header("Location: ../Vista/crud_servicios.php");
}

// Actualizar un servicio
if (isset($_POST['accion']) && $_POST['accion'] == 'editar') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    editarServicio($id, $nombre, $descripcion, $precio);
    header("Location: ../Vista/crud_servicios.php");
}

// Eliminar un servicio
if (isset($_GET['accion']) && $_GET['accion'] == 'eliminar') {
    $id = $_GET['id'];
    eliminarServicio($id);
    header("Location: ../Vista/crud_servicios.php");
}
?>
