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
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Mensaje</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- td = table data 
                        tr = table row 
                        tbody inicia el cuerpo de la tabla :) -->
                        <tr>
                            <td>1</td>
                            <td>Ana</td>
                            <td>ana@example.com</td>
                            <td>Hola, me interesa tu portafolio.</td>
                            <td>
                                <a href="editar.php?id=1" title="Editar">✏️</a>
                                <a href="borrar.php?id=1" title="Borrar">🗑️</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>José</td>
                            <td>jose@example.com</td>
                            <td>Quisiera más información sobre tus proyectos.</td>
                            <td>
                                <a href="editar.php?id=2" title="Editar">✏️</a>
                                <a href="borrar.php?id=2" title="Borrar">🗑️</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <footer>
        <p> 2026 Mi portafolio</p>
        <p> Practica de programacion web todos los derechos reservados</p>
    </footer>
</body>
</html>