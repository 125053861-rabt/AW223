<?php
require_once("consulta_seguimiento.php");

// 1. Obtener el ID del registro desde la URL
$id =$_GET['id'] ?? 0;

// Función para consultar una sola solicitud por ID (asegúrate de tenerla en tu archivo de consultas)
$datosSolicitud = consultSolicitudPorId($id);

if (!$datosSolicitud) {
    header("Location: seguimiento.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte - Agregar Observación y Estado</title>
    <link rel="stylesheet" href="./CSS/soporte.css">
</head>
<body>
    <!-- Encabezado -->
    <header>
        <h1>Zona Administración</h1>
        <p>Seguimiento de Solicitud</p>
    </header>

    <!-- Barra de navegación con iconos de regreso -->
    <nav>
        <a href="usuarios.php">Usuarios</a>
        <a href="equipos.php">Equipos</a>
        <a href="solicitudes.php">Solicitudes</a>
        <a href="seguimiento.php">↩️ Seguimiento</a>
    </nav>

    <!-- Principal -->
    <main>
        <section class="seccion-admin">
            <!-- Cuadro contenedor del formulario -->
            <div class="formulario">
                <h2>Actualizar Estado y Observación</h2>
                
                <form action="actualizar_observacion.php" method="POST">
                    
                    <input type="hidden" name="txtid" value="<?php echo $datosSolicitud['id']; ?>">

                    <div class="fila-campos">
                        <div class="campo">
                            <label for="usuario">Usuario Solicitante</label>
                            <input type="text" id="usuario" value="<?php echo $datosSolicitud['usuario']; ?>" disabled>
                        </div>

                        <div class="campo">
                            <label for="equipo">Equipo Asignado</label>
                            <input type="text" id="equipo" value="<?php echo $datosSolicitud['equipo']; ?>" disabled>
                        </div>
                    </div>

                    <div class="campo">
                        <label for="fecha">Fecha de Solicitud</label>
                        <input type="text" id="fecha" value="<?php echo $datosSolicitud['fecha_solicitud']; ?>" disabled>
                    </div>

                    <!-- Selector de Estado -->
                    <div class="campo">
                        <label for="estado">Estado de la Solicitud</label>
                        <select id="estado" name="txtestado" required>
                            <option value="cancelada" <?php echo ($datosSolicitud['estado'] == 'cancelada') ? 'selected' : ''; ?>>Cancelada</option>
                            <option value="en_proceso" <?php echo ($datosSolicitud['estado'] == 'en_proceso') ? 'selected' : ''; ?>>En proceso</option>
                            <option value="resuelta" <?php echo ($datosSolicitud['estado'] == 'resuelta') ? 'selected' : ''; ?>>Resuelta</option>
                        </select>
                    </div>

                    <!-- Campo para agregar observacion -->
                    <div class="campo">
                        <label for="observacion">Observación sobre la atención</label>
                        <textarea id="observacion" name="txtobservacion" rows="5" placeholder="Escribe aquí las observaciones técnicas o detalles de la atención..." required><?php echo $datosSolicitud['observacion']; ?></textarea>
                    </div>

                    <button type="submit" class="boton">Guardar Cambios</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Soporte Universitario</p>
        <p>Practica 8</p>
    </footer>
    <script src="./js/AlertInsert.js"></script>
</body>
</html>