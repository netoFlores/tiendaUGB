<?php

class Conexion extends PDO {

    private $conn;
    private $drive = "mysql";
    private $host = "localhost";
    private $user = "root";
    private $passwd = "desa";
    private $db = "tienda";
    private $port = 3306;

    function __construct() {
        try {
            $this->conn = parent::__construct("$this->drive:host=$this->host; port=$this->port; dbname=$this->db", $this->user, $this->passwd);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    
    function close(){
        $this->conn = null;
    }
}
