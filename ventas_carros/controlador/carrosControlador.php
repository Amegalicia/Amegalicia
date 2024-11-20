<?php
require_once './modelo/carrosModelo.php';

class CarrosControlador {
    private $modelo;

    public function __construct() {
        $this->modelo = new CarrosModelo();
    }

    public function listarCarros() {
        $carros = $this->modelo->obtenerCarros();
        include './vistas/listarCarros.php';
    }

    public function agregarCarro() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $precio = $_POST['precio'];
            $this->modelo->agregarCarro($marca, $modelo, $precio);
            header('Location: index.php');
        } else {
            include './vistas/agregarCarro.php';
        }
    }

    public function editarCarro($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $precio = $_POST['precio'];
            $this->modelo->editarCarro($id, $marca, $modelo, $precio);
            header('Location: index.php');
        } else {
            $carro = $this->modelo->obtenerCarroPorId($id);
            include './vistas/editarCarro.php';
        }
    }

    public function eliminarCarro($id) {
        $this->modelo->eliminarCarro($id);
        header('Location: index.php');
    }
}
