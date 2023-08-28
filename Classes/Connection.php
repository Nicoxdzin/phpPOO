<?php
class Connection {
    private $conn;

    public function __construct() {
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "php_poo";

        $this->conn = mysqli_connect($host, $username, $password, $database);

        if (!$this->conn) {
            die("Conexão falhou: " . mysqli_connect_error());
        }
    }

    public function getConnection() {   
        echo "conectado"; 
        return $this->conn;
        
    }

    public function close() {
        if ($this->conn) {
            mysqli_close($this->conn);
        }
    }
}
