<?php
    $debug = false;
    class Database {
        private $host = "127.0.0.1";
        private $database_name = "xxxx";//your database name
        private $username = "xxxx";//your database username
        private $password = "xxxx";//your database password
        public $conn;
        public function getConnection(){
            $this->conn = null;
            try{
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password);
                $this->conn->exec("set names utf8");
            }catch(PDOException $exception){
                echo "Database could not be connected: " . $exception->getMessage();
            }
            return $this->conn;
        }
    }
?>
