<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Carro</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <h1>Editar Carro</h1>
    </header>
    <div class="container">
        <form action="index.php?action=editar&id=<?= $carro['id'] ?>" method="POST">
            <label for="marca">Marca:</label>
            <input type="text" name="marca" value="<?= $carro['Marca'] ?>" required>

            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo" value="<?= $carro['Modelo'] ?>" required>

            <label for="precio">Precio:</label>
            <input type="number" name="precio" step="0.01" value="<?= $carro['Precio'] ?>" required>

            <button type="submit">Guardar Cambios</button>
        </form>
    </div>
</body>
</html>
