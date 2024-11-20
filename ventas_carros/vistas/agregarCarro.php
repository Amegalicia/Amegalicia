<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Carro</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <h1>Agregar Carro</h1>
    </header>
    <div class="container">
        <form action="index.php?action=agregar" method="POST">
            <label for="marca">Marca:</label>
            <input type="text" name="marca" required>

            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo" required>

            <label for="precio">Precio:</label>
            <input type="number" name="precio" step="0.01" required>

            <button type="submit">Agregar Carro</button>
        </form>
    </div>
</body>
</html>
