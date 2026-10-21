<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio - Admin</title>
    <link rel="stylesheet" href="./CSS/estilos.css">
</head>
<body>
    <!-- Este es el encabezado -->
    <header>
        <h1>Zona Administracion</h1>
        <!-- La p significa parrafo  -->
        <p>Mensajes Recibidos</p>
    </header>

    <!-- Barra de navegacion / Icono de regreso -->
    <nav>
        <a href="index.php">🏠</a> 
    </nav>

    <!-- Principal -->
    <main>
        <section class="seccion-admin">
            <!-- Cuadro contenedor de la tabla -->
            <div class="contenedor-cuadro-mensajes">
                <h2>Mensajes Recibidos</h2>
                
                <table class="tabla-mensajes">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Mensaje</th>
                            <th>Fecha</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          require "consulta_mensajes.php";
                          $rsMensaje = consultMensajes();

                          while ($arrMensajes = mysqli_fetch_array($rsMensaje)) {
                              echo "<tr>
                          <td>" . $arrMensajes['nombre'] . "</td>
                          <td>" . $arrMensajes['correo'] . "</td>
                          <td>" . $arrMensajes['mensaje'] . "</td>
                          <td>" . $arrMensajes['timeStaps'] . "</td>
                          <td>
                          <a href='editar.php?id=" . $arrMensajes['ID'] . "' title='Editar'>✏️</a>
                          <a href='borrar.php?id=" . $arrMensajes['ID'] . "' title='Borrar' onclick='return confirm(\"¿Estas seguro de borrar este mensaje?\");'>🗑️</a>
                        </td>
                    </tr>";
                    }?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <footer>
        <p> 2026 Mi portafolio</p>
        <p> Practica de programacion web todos los derechos reservados</p>
    </footer>
    <script src="./js/AlertInsert.js"></script>
</body>
</html>