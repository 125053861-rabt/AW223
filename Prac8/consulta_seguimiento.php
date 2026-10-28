<?php
require_once "conexion.php";

function consultarSolicitudes() {
    global $conexion;

    $sql = "SELECT s.id, 
                   CONCAT(u.nombre, ' ', u.apellido_paterno) AS usuario, 
                   e.nombre_equipo AS equipo, 
                   s.fecha_solicitud, 
                   s.estado, 
                   s.observacion 
            FROM solicitudes s
            JOIN usuarios u ON u.id = s.id_usuario
            JOIN equipos e ON e.id = s.id_equipo
            ORDER BY s.fecha_solicitud DESC";

    try {
        return mysqli_query($conexion, $sql);
    } catch (Exception $e) {
        die("Algo pasó al consultar las solicitudes: " . $e->getMessage());
    }
}

function consultSolicitudPorId($id) {
    global $conexion;
    $sql = "SELECT s.id, 
                   CONCAT(u.nombre, ' ', u.apellido_paterno) AS usuario, 
                   e.nombre_equipo AS equipo, 
                   s.fecha_solicitud, 
                   s.estado, 
                   s.observacion 
            FROM solicitudes s
            JOIN usuarios u ON u.id = s.id_usuario
            JOIN equipos e ON e.id = s.id_equipo
            WHERE s.id = $id";
    
    $resultado = mysqli_query($conexion, $sql);
    return mysqli_fetch_array($resultado);
}