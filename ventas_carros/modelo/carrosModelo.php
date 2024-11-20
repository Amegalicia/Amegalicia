<?php
class CarrosModelo {
    private $db;

    public function __construct() {
        $this->db = new mysqli('localhost', 'root', '', 'ventas_carros');
        if ($this->db->connect_error) {
            die("Error de conexión: " . $this->db->connect_error);
        }
    }

    // Obtener todas las ventas de carros
    public function obtenerCarros() {
        $resultado = $this->db->query("SELECT * FROM carros");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    // Agregar un nuevo carro
    public function agregarCarro($marca, $modelo, $precio) {
        $stmt = $this->db->prepare("INSERT INTO carros (Marca, Modelo, Precio) VALUES (?, ?, ?)");
        $stmt->bind_param('ssd', $marca, $modelo, $precio);
        return $stmt->execute();
    }

    // Obtener un carro por ID
    public function obtenerCarroPorId($id) {
        $stmt = $this->db->prepare("SELECT * FROM carros WHERE id = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // Editar un carro
    public function editarCarro($id, $marca, $modelo, $precio) {
        $stmt = $this->db->prepare("UPDATE carros SET Marca = ?, Modelo = ?, Precio = ? WHERE id = ?");
        $stmt->bind_param('ssdi', $marca, $modelo, $precio, $id);
        return $stmt->execute();
    }

    // Eliminar un carro
    public function eliminarCarro($id) {
        $stmt = $this->db->prepare("DELETE FROM carros WHERE id = ?");
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }
}
