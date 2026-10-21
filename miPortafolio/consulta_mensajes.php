<?php

function consultMensajes(){
    require_once "conexion.php";

    $selectMsj= "select * from mensajes";

    try {
        /* rs = resultset */
        $rsMsj=mysqli_query($conexion, $selectMsj);
        mysqli_close($conexion);
        return $rsMsj;
    } catch(Exception $e) {
        die('Algo paso al consultar :(\n' .$e->getMessage());
    }

}

function consultMensajePorId($id){
    require_once "conexion.php";

    $selectMsj = "SELECT * FROM mensajes WHERE id = ?";

    try {
        $stmt = $conexion->prepare($selectMsj);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $mensaje = $resultado->fetch_assoc();
        
        $stmt->close();
        mysqli_close($conexion);
        return $mensaje;
    } catch(Exception $e) {
        die('Algo paso al consultar :(\n' .$e->getMessage());
    }
}