<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Carros</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <h1>Ventas de Carros</h1>
    </header>
    <div class="container">
        <a href="index.php?action=agregar">Agregar Carro</a> |
        <a href="index.php?action=info">Información del Proyecto</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($carros as $carro): ?>
            <tr>
                <td><?= $carro['id'] ?></td>
                <td><?= $carro['Marca'] ?></td>
                <td><?= $carro['Modelo'] ?></td>
                <td><?= $carro['Precio'] ?></td>
                <td>
                    <a href="index.php?action=editar&id=<?= $carro['id'] ?>">Editar</a>
                    <a href="index.php?action=eliminar&id=<?= $carro['id'] ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar este carro?');">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
