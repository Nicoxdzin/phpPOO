<?php
    include('Connection.php');
class User{
    
    private $user;
    private $email;
    private $password;
    private $conn;

    public function __construct(){
        $this->conn = new Connection();
    }

    public function Login($user, $password){

        if (empty($user) || empty($password)) {
            return false;
        }

        $str = "SELECT * FROM tb_user WHERE username = ? and user_password = ?";
        $stmt = mysqli_prepare($this->conn->getConnection(), $str);
        mysqli_stmt_bind_param($stmt, "ss", $user, $password);
        mysqli_stmt_execute($stmt);
        $res = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($res) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function Cadastrar($user, $email, $password, $image){
        // abrir a imagem como um fluxo de bytes
        
    
        $str = "INSERT INTO tb_user (username, email, user_password, image_data, image_type, register_date) VALUES (?, ?, ?, ?, ?, NOW())";
        $stmt = mysqli_prepare($this->conn->getConnection(), $str);
    
        if ($stmt === false) {
            return false;
        }
        
        $imageData = file_get_contents($image['tmp_name']);
        $imageType = $image['type'];
    
        mysqli_stmt_bind_param($stmt, "sssss", $user, $email, $password, $imageData, $imageType);
        $result = mysqli_stmt_execute($stmt);
    
        if ($result === true && mysqli_stmt_affected_rows($stmt) > 0) {
            // Inserção bem-sucedida
            return true;
        } else {
            // Erro na inserção
            return false;
        }
    }

    public function listarUsuarios() {
        $str = "SELECT * FROM tb_user";
        $result = mysqli_query($this->conn->getConnection(), $str);
    
        if (!$result) {
            return false;
        }
    
        $usuarios = array();
    
        while ($row = mysqli_fetch_assoc($result)) {
            $usuarios[] = $row;
        }
    
        return $usuarios;
    }
    
    

}