<?php
require_once './controlador/carrosControlador.php';

$controlador = new CarrosControlador();

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    if ($action === 'agregar') {
        $controlador->agregarCarro();
    } elseif ($action === 'editar' && isset($_GET['id'])) {
        $controlador->editarCarro($_GET['id']);
    } elseif ($action === 'eliminar' && isset($_GET['id'])) {
        $controlador->eliminarCarro($_GET['id']);
    } elseif ($action === 'info') {
        include './vistas/info.php'; // Página de información
    } else {
        $controlador->listarCarros();
    }
} else {
    $controlador->listarCarros();
}
