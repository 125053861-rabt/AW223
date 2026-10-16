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