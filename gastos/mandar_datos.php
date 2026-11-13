<?php
require_once("conexion.php");

$concepto = $_POST["txtconcepto"];
$monto = $_POST["txtmonto"];
$categoria = $_POST["txtcategoria"];

$sqlInsert = "INSERT INTO gastos(concepto, monto, categoria) VALUES(?,?,?)";

/* Statement */
$stmt = $conexion->prepare($sqlInsert);

$stmt->bind_param("sss", $concepto, $monto, $categoria);

if ($stmt->execute()) {
    header("Location:index.php?estadophp=exito");
} else {
    header("Location: index.php?estadophp=fallo");
}
$stmt->close();
$conexion->close();
?>