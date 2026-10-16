<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
    <link rel="stylesheet" href="./CSS/estilos.css">
</head>
<body>
    <!-- Este es el encabezado -->
    <header>
        <h1>Mi portafolio</h1>
        <p>Bienvenido a mi sitio web personal :D</p>
    </header>

    <!-- Barra de navegacion -->
     <nav>
        <a href="#inicio">Inicio</a> 
        <a href="#sobre-mi">Sobre mi</a>
        <a href="#habilidades">Habilidades</a> 
        <a href="#proyectos">Proyectos</a> 
        <a href="#contacto">Contacto</a> 
        <a href="admin.php">Admin</a>
     </nav>

     <!-- Principal -->
      <main>
        <section id="inicio" class="seccion-inicio">
            <div class="seccion-contenido">
                <h2>Hola, Me llamo Rene Alberto</h2>
                <p>Soy estudiante de la UPQ en tecnología de la información e innovación digital</p>
                <a href="#proyectos" class="boton">Ver mis proyectos</a>
            </div>
        </section>

        <!-- Seccion sobre mi -->
        <section id="sobre-mi">
            <h2>Sobre mi</h2>
            <div class="sobre-mi-contenido">
                <img src="./CSS/imagenes/yo.jpeg" alt="Foto de perfil">
                <div>
                    <p>En esta página estoy aprendiendo sobre HTML y CSS</p>
                </div>
            </div>
        </section>

        <!-- Habilidades -->
        <section id="habilidades">
            <h2>Mis habilidades</h2>
            <ul class="lista-habilidades">
                <li>Java</li>
                <li>PSint</li>
                <li>Packet Tracer</li>
                <li>MySQL</li>
            </ul>
        </section>

        <!-- Proyectos -->
        <section id="proyectos">
            <h2>Mis Proyectos</h2>
            <div class="contenedor-proyectos">
                <article class="proyecto">
                    <h3>Sistema de monitoreo de luz</h3>
                    <p>Sistema que monitorea la luz y concientiza sobre el consumo de la energía</p>
                    <a href="">Ver proyecto</a>
                </article>
                <article class="proyecto">
                    <h3>Sistema de monitoreo de luz</h3>
                    <p>Sistema que monitorea la luz y concientiza sobre el consumo de la energía</p>
                    <a href="">Ver proyecto</a>
                </article>
                <article class="proyecto">
                    <h3>Sistema de monitoreo de luz</h3>
                    <p>Sistema que monitorea la luz y concientiza sobre el consumo de la energía</p>
                    <a href="">Ver proyecto</a>
                </article>
            </div>
        </section>

        <!-- Contacto -->
         <section id="contacto" class="seccion-contacto">
             <h2>Contáctame</h2>
             <form id="formulario" action="guardar_mensaje.php" method="post">
                 <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input 
                        type="text"
                        id="nombre"
                        name="txtnombre"
                        placeholder="Escribe tu nombre"
                        required>
                </div>
                <div class="campo">
                    <label for="email">Correo</label>
                    <input 
                        type="email"
                        id="email"
                        name="txtcorreo"
                        placeholder="ejemplo@correo.com"
                        required>
                </div>
                <div class="campo">
                    <label for="mensaje">Mensaje</label>
                    <textarea 
                        id="mensaje"
                        name="txtmensaje"
                        rows="5"
                        placeholder="Escribe tu mensaje"></textarea>
                </div>
                <button type="submit">
                    Enviar mensaje
                </button>
            </form>
         </section>
    </main>

    <footer>
        <p>© 2026 Mi portafolio</p>
        <p>Práctica de programación web, todos los derechos reservados</p>
    </footer>

    <script src="./js/AlertInsert.js"></script>
</body>
</html>