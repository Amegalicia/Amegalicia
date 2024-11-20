<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Información del proyecto</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <h1>Información del proyecto</h1>
    </header>
    <div class="container">
        <h2>Liga de Descarga</h2>
        <p>Puedes descargar el proyecto desde el siguiente enlace:</p>
        <a href="https://github.com/usuario/venta_carros" target="_blank">Repositorio en GitHub</a>

        <h2>Instrucciones de instalación</h2>
        <ol>
            <li>Descarga y descomprime el proyecto en la carpeta `htdocs` de XAMPP.</li>
            <li>Crea una base de datos llamada <strong>ventas_carros</strong>.</li>
            <li>Ejecuta el siguiente SQL para crear la tabla:
                <pre>
CREATE TABLE carros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Marca VARCHAR(50) NOT NULL,
    Modelo VARCHAR(50) NOT NULL,
    Precio DECIMAL(10, 2) NOT NULL
);
                </pre>
            </li>
            <li>Abre el navegador y accede a <strong>http://localhost/venta_carros</strong>.</li>
        </ol>

        <h2>Descripción de la implementación</h2>
        <p>El sistema CRUD permite gestionar un catálogo de ventas de carros. Cuenta con las funcionalidades de:</p>
        <ul>
            <li>Listar todos los carros registrados.</li>
            <li>Agregar un nuevo carro.</li>
            <li>Editar información de un carro existente.</li>
            <li>Eliminar un carro del registro.</li>
        </ul>
        <p>Está desarrollado en PHP utilizando una arquitectura MVC, con estilos CSS básicos para mejorar la experiencia visual.</p>

        <h2>Datos de la desarrolladora</h2>
        <p><strong>Nombre:</strong> [America Betsabeth Lozano Galicia]</p>
        <p><strong>Email:</strong> [amegalicia234@gnail.com]</p>
        <p><strong>No.Control:</strong> [201064077]</p>
    </div>
</body>
</html>
