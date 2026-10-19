<?php
require_once("conexion.php");

$id = $_POST["txtid"];
$nombre = trim($_POST["txtnombre"]);
$correo = trim($_POST["txtcorreo"]);
$mensaje = trim($_POST["txtmensaje"]);

// paso D
if (empty($id) || empty($nombre) || empty($correo) || empty($mensaje)) {
    header("Location: index.php?estadophp=vacios");
    exit();
}

$sqlUpdate = "UPDATE mensajes SET nombre = ?, correo = ?, mensaje = ? WHERE id = ?";

/* Statement */
$stmt = $conexion->prepare($sqlUpdate);
$stmt->bind_param("sssi", $nombre, $correo, $mensaje, $id);

// paso C
if ($stmt->execute()) {
    header("Location: admin.php?estadophp=actualizado");
} else {
    header("Location: admin.php?estadophp=fallo");
}

$stmt->close();
$conexion->close();
?>