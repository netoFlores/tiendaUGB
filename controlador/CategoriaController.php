<?php
include_once '../modelo/Categoria.php';
include_once '../modelo/Conexion.php';
class CategoriaC{
    private $conn = null;
    private $categoria = null;
    
    public function __construct() {
        $this->conn = new Conexion();
        $this->categoria = new Categoria($this->conn);        
    }
    
    public function getAll() {
        return $this->categoria->findAll();
    }
}
