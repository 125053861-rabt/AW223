<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte - Módulo de Seguimiento</title>
    <link rel="stylesheet" href="./CSS/soporte.css">
</head>
<body>
    <!-- Encabezado -->
    <header>
        <h1>Zona Administración</h1>
        <p>Seguimiento y Actualización de Solicitudes</p>
    </header>

    <!-- Barra de navegación -->
    <nav>
        <a href="usuarios.php">Usuarios</a>
        <a href="equipos.php">Equipos</a>
        <a href="solicitudes.php">Solicitudes</a>
        <a href="seguimiento.php" class="activa">Seguimiento</a>
    </nav>

    <!-- Principal -->
    <main>
        <section class="seccion-admin">
            <h2>
                Solicitudes Registradas 
                <span class="etiqueta-vista">Admin / Tecnico</span>
            </h2>
            
            <!-- Contenedor adaptativo de la tabla -->
            <div class="tabla-contenedor">
                <table class="tabla-mensajes">
                    <thead>
                        <tr>
                            <th class="col-id">ID</th>
                            <th>Usuario</th>
                            <th>Equipo</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th>Observación</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require "consulta_seguimiento.php";
                            $rsSolicitudes = consultarSolicitudes();

                            if ($rsSolicitudes && mysqli_num_rows($rsSolicitudes) > 0) {
                                while ($solicitud = mysqli_fetch_array($rsSolicitudes)) {
                                    echo "<tr>
                                        <td class='col-id'>" . $solicitud['id'] . "</td>
                                        <td>" . $solicitud['usuario'] . "</td>
                                        <td>" . $solicitud['equipo'] . "</td>
                                        <td>" . $solicitud['fecha_solicitud'] . "</td>
                                        <td>" . $solicitud['estado'] . "</td>
                                        <td>" . $solicitud['observacion'] . "</td>
                                        <td>
                                            <a href='agregar_observacion.php?id=" . $solicitud['id'] . "' title='Agregar observación o actualizar estado '>📝 Observación o Actualización</a>
                                        </td>
                                    </tr>";
                                }
                            } else {
                                echo "<tr class='fila-vacia'><td colspan='7'>No hay solicitudes registradas actualmente.</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2026 Soporte Universitario</p>
        <p>Práctica de programación web - Todos los derechos reservados</p>
    </footer>
    <script src="./js/AlertInsert.js"></script>
</body>
</html>