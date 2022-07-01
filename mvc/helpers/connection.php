<?php
    class connection{
        private $host = "127.0.0.1";
        private $db = "db_TiendaRopa";
        private $user = "postgres";
        private $pass = "admin";
        private $conn;

        public function getConnection(){
            try{
                $this->conn = new PDO("pgsql:host=".$this->host."; dbname=".$this->db, $this->user, $this->pass);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $this->conn;
            }catch(PDOException $e){
                echo "Error al hacer la conexcion: " . $e->getMessage();
                exit();
            }
        }

        public function getCloseConnection(){
            return $this->conn = null;
        }
    }
?>