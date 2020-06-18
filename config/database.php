<?php
class Database{
  
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "test";
    private $username = "root";
    private $password = "";  
  
    public $conn;

    public function getConnect() {
        $this->conn = null;

        $this->conn = new mysqli($this->host,$this->username,$this->password,$this->db_name);

        // Check connection
        if ($this->conn -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
        }

        return $this->conn;
    }
}
?>