<?php

class Database{
    private $host = "localhost";
    private $db_name = "sis_colegio";
    private $user_name = "root";
    private $password = "";
    public $conn;

    public function getConnection(){
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host=".$this->host.";dbname=".$this->db_name,
                $this->user_name,
                $this->password
            );
            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $ex) {
            echo "Error de conexion: ".$ex->getMessage();
        }
        return $this->conn;
    }
}

?>