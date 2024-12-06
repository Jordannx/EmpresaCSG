<?php
include '../Includes/db.php';

// Obtener todos los servicios
function obtenerServicios() {
    global $conn;
    $query = $conn->query("SELECT * FROM servicios");
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

// Agregar un servicio
function agregarServicio($nombre, $descripcion, $precio) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO servicios (nombre, descripcion, precio) VALUES (?, ?, ?)");
    return $stmt->execute([$nombre, $descripcion, $precio]);
}

// Editar un servicio
function editarServicio($id, $nombre, $descripcion, $precio) {
    global $conn;
    $stmt = $conn->prepare("UPDATE servicios SET nombre = ?, descripcion = ?, precio = ? WHERE id = ?");
    return $stmt->execute([$nombre, $descripcion, $precio, $id]);
}

// Eliminar un servicio
function eliminarServicio($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM servicios WHERE id = ?");
    return $stmt->execute([$id]);
}
function obtenerPrimerServicio() {
    global $conn;

    // Consulta para obtener el primer servicio
    $stmt = $conn->query("SELECT * FROM servicios LIMIT 1");
    $servicio = $stmt->fetch(PDO::FETCH_ASSOC);

    return $servicio ?: null; // Retorna el servicio o null si no hay resultados
}
function obtenerSegundoServicio() {
    global $conn;

    // Consulta para obtener el segundo servicio
    $stmt = $conn->query("SELECT * FROM servicios LIMIT 1 OFFSET 1");
    $servicio = $stmt->fetch(PDO::FETCH_ASSOC);

    return $servicio ?: null; // Retorna el servicio o null si no hay resultados
}

function obtenerTercerServicio() {
    global $conn;

    // Consulta para obtener el tercer servicio
    $stmt = $conn->query("SELECT * FROM servicios LIMIT 1 OFFSET 2");
    $servicio = $stmt->fetch(PDO::FETCH_ASSOC);

    return $servicio ?: null; // Retorna el servicio o null si no hay resultados
}

function obtenerCuartoServicio() {
    global $conn;

    // Consulta para obtener el cuarto servicio
    $stmt = $conn->query("SELECT * FROM servicios LIMIT 1 OFFSET 3");
    $servicio = $stmt->fetch(PDO::FETCH_ASSOC);

    return $servicio ?: null; // Retorna el servicio o null si no hay resultados
}

?>
