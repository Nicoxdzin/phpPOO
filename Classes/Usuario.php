<?php
    include('Connection.php');
class Usuario{
    
    private $usuario;
    private $senha;

    private $conn;

    public function __construct(){
        $this->conn = new Connection();
    }

    public function Logar($usuario, $senha){

        if (empty($usuario) || empty($senha)) {
            echo "erro";
            return false;
        }

        $str = "SELECT * FROM tb_users WHERE usuario = ? and senha = ?";
        $stmt = mysqli_prepare($this->conn->getConnection (), $str);
        mysqli_stmt_bind_param($stmt, "ss", $usuario, $senha);
        mysqli_stmt_execute($stmt);
        $res = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($res) > 0) {
            echo "achou";
            return true;
        } else {
            echo "n achou";
            return false;
        }
    }
}