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
    </section>
</body>
</html>