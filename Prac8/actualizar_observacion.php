<?php
// 1. Incluir el archivo de conexión a la base de datos
require_once "conexion.php";

// 2. Verificar que los datos hayan llegado por el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 3. Recibir los datos del formulario de manera segura
    $id = intval($_POST['txtid']);
    $estado = mysqli_real_escape_string($conexion, $_POST['txtestado']);
    $observacion = mysqli_real_escape_string($conexion, $_POST['txtobservacion']);

    // 4. Escribir la consulta SQL para actualizar el estado y la observación
    $sql = "UPDATE solicitudes 
            SET estado = '$estado', 
                observacion = '$observacion' 
            WHERE id = $id";

    // 5. Ejecutar la consulta y manejar el resultado
    if (mysqli_query($conexion, $sql)) {
        // Redirigir de vuelta al módulo de seguimiento si todo sale bien
        header("Location: seguimiento.php?actualizado=success");
        exit();
    } else {
        // En caso de error en la consulta
        echo "Error al actualizar la solicitud: " . mysqli_error($conexion);
    }

} else {
    // Si intentan entrar directamente a este archivo por la URL sin enviar el formulario, los redirigimos
    header("Location: seguimiento.php");
    exit();
}
?>