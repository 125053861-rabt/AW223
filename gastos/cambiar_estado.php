@ -0,0 +1,30 @@
<?php
require_once("conexion.php");

$id = $_GET['id'] ?? 0;

if (empty($id)) {
    header("Location: index.php");
    exit();
}

$sqlUpdate = "UPDATE gastos SET pagado = 1 WHERE id = ?";

$stmt = $conexion->prepare($sqlUpdate);
$stmt->bind_param("i", $id);


if ($stmt->execute()) {
    $stmt->close();
    $conexion->close();
    header("Location: index.php?estadophp=pagado");
    exit();
} else {
    $stmt->close();
    $conexion->close();
    header("Location: index.php?estadophp=falloelpago");
    exit();
}
?>