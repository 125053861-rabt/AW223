<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Control de gastos personales</h1>
    <section>
        <p>Total ganado</p>
        <p>Gastos pendientes</p>
    </section>
    <h2>Registrar nuevo gasto</h2>
    <section>
        <form id="formulario" action="mandar_datos.php" method="post">
        <div>
        <label for="concepto">Concepto</label>
        <input 
        type="text"
        id="concepto"
        name="txtconcepto"
        required>
        </div>
        <div>
            <label for="monto">Monto</label>
        <input 
        type="number"
        id="monto"
        name="txtmonto"
        required>
        <label for="categoria">Categoria</label>
        <input
        type="text"
        id="categoria"
        name="txtcategoria"
        requiered
        >
        </div>
        <div>
            <button type="submit">Enviar mensaje</button>
        </div>
      </form>

      <table>
        <thead>
        <tr>
            <td>Concepto</td>
            <td>Categoria</td>
            <td>Monto</td>
            <td>Fecha</td>
            <td>Estado</td>
            <td>Accion</td>
        </tr>
        </thead>
        <tbody>
            <?php
            require "consulta_mensajes.php";
            $rsMensaje = consultMensajes();

            while ($arrMensajes = mysqli_fetch_array($rsMensaje)) {
                echo "<tr>
                <td>" . $arrMensajes['concepto'] . "</td>
                <td>" . $arrMensajes['categoria'] . "</td>
                <td>" . $arrMensajes['monto'] . "</td>
                <td>" . $arrMensajes['fecha'] . "</td>
                <td>" . $arrMensajes['pagado'] . "</td>
                <td>
                <a href='cambiar_estado.php?id=" . $arrMensajes['id'] . "' title='cambiar'>Cambiar Pago</a>
                </td>
                </tr>";
            }?>
        </tbody>
      </table>
    </section>
</body>
</html>