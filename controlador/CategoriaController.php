<?php
include_once '../modelo/Categoria.php';
include_once '../modelo/Conexion.php';
class CategoriaC{
    private $conn = null;
    private $categoria = null;
    
    public function __construct() {
           
    }
    
    public function getAll() {
        $this->conn = new Conexion();
        $this->categoria = new Categoria($this->conn);
        return $this->categoria->findAll();
    }
    
    public function getById($id){
        $this->conn = new Conexion();
        $this->categoria = new Categoria($this->conn);
        $this->categoria->setIdCategoria($id);
        return $this->categoria->findById();
    }
    
    public function add($nombre, $descripcion){
        $this->conn = new Conexion();
        $this->categoria = new Categoria($this->conn);
        $this->categoria->setNombre($nombre);
        $this->categoria->setDescripcion($descripcion);
        $this->categoria->add();
    }
    
    public function update($id, $nombre, $descripcion){
        $this->conn = new Conexion();
        $this->categoria = new Categoria($this->conn);
        $this->categoria->setIdCategoria($id);
        $this->categoria->setNombre($nombre);
        $this->categoria->setDescripcion($descripcion);
        $this->categoria->update();
    }
    
    public function delete($id){
        $this->conn = new Conexion();
        $this->categoria = new Categoria($this->conn);
        $this->categoria->setIdCategoria($id);
        $this->categoria->delete();
    }
}


//if(isset($_POST["nombre"]) && isset($_POST["descripcion"]) && isset($_POST["nuevo"])){
//    $nombre = $_POST["nombre"];
//    $desc = $_POST["descripcion"];
//    $ct = new CategoriaC();
//    $ct->add($nombre, $desc);
//    //header("Location: ../admin/index.php");
//}