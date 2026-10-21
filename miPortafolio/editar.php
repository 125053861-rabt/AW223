<?php
require_once("consulta_mensajes.php");

// 1. Obtener el ID del registro desde la URL
$id = $_GET['id'] ?? 0;

$datosMsj = consultMensajePorId($id);

if (!$datosMsj) {
    header("Location: admin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Mensaje - Zona Administración</title>
    <link rel="stylesheet" href="./CSS/estilos.css">
</head>
<body>
    <!-- Este es el encabezado unificado -->
    <header>
        <h1>Zona Administración</h1>
        <p>Formulario para Editar</p>
    </header>

    <!-- Barra de navegación con iconos de regreso funcionales -->
    <nav>
        <a href="admin.php" title="Volver a Admin">↩️ Admin</a> 
        <a href="index.php" title="Volver al Portafolio">🏠 Inicio</a> 
    </nav>

    <!-- Principal -->
    <main>
        <section class="seccion-admin">
            <!-- Cuadro contenedor del formulario-->
            <div class="contenedor-cuadro-formulario">
                <h2>Editar Mensaje</h2>
                
                <form action="actualizar_mensajes.php" method="POST">
                    
                     <input type="hidden" name="txtid" value="<?php echo $datosMsj['ID']; ?>">

                    <div class="grupo-formulario">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="txtnombre" value="<?php echo $datosMsj['nombre']; ?>" required>
                    </div>

                    <div class="grupo-formulario">
                        <label for="correo">Correo electrónico</label>
                        <input type="email" id="correo" name="txtcorreo" value="<?php echo $datosMsj['correo']; ?>" required>
                    </div>

                    <div class="grupo-formulario">
                        <label for="mensaje">Mensaje</label>
                        <textarea id="mensaje" name="txtmensaje" rows="5" required><?php echo $datosMsj['mensaje']; ?></textarea>
                    </div>

                    <button type="submit" class="boton">Actualizar Mensaje</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Mi Portafolio</p>
        <p>Práctica de programación web - Todos los derechos reservados</p>
    </footer>
    <script src="./js/AlertInsert.js"></script>
</body>
</html>