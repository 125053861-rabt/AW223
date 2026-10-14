<?php
require_once("conexion.php");

$nombre = $_POST["txtnombre"];
$correo = $_POST["txtcorreo"];
$mensaje = $_POST["txtmensaje"];

$sqlInsert = "INSERT INTO mensajes(nombre, correo, mensaje) VALUES(?,?,?)";

/* Statement */
$stmt = $conexion->prepare($sqlInsert);

$stmt->bind_param("sss", $nombre, $correo, $mensaje);

if ($stmt->execute()) {
    echo "Mensaje guardado yupiii";
} else {
    echo "Fallo tu coso: ";
}
$stmt->close();
$conexion->close();
?>