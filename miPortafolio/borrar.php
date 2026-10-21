<?php
require_once("conexion.php");

// 1. obtener id desde la url
$id = $_GET['id'] ?? 0;

if (empty($id)) {
    header("Location: admin.php");
    exit();
}

// 2. consulta sql para borrar registro con misma id
$sqlDelete = "DELETE FROM mensajes WHERE id = ?";

$stmt = $conexion->prepare($sqlDelete);
$stmt->bind_param("i", $id);

// Paso b y c: confirmacion :)
if ($stmt->execute()) {
    $stmt->close();
    $conexion->close();
    header("Location: index.php?estadophp=eliminado");
    exit();
} else {
    $stmt->close();
    $conexion->close();
    header("Location: index.php?estadophp=fallo");
    exit();
}
?>