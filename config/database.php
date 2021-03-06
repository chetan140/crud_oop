<?php
class Database {
    //Specify own Database Credientials

    private $host = "localhost";
    private $db_name = "php_oop_crud";
    private $username = "root";
    private $password = "";
    public $conn;

    //Get Database Connection
    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
   
        return $this->conn;
    }
}
?>
       