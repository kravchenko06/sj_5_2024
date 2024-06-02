<?php

    class Database{

        private $host = 'localhost';
        private $db_name = 'sj_5_2024';
        private $user_name = 'root';
        private $password = '';
    
        protected $connection;
        
        public function __construct() {
            $this->connection = $this->db_connection();
        }
       
        protected function db_connection(){
            try {
                $connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name . 
                                      ";charset=utf8", 
                                      $this->user_name, 
                                      $this->password);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
                return $connection;
                
            }catch(PDOException $e){
                die("Chyba pripojenia k databáze: " . $e->getMessage());
            }
        }
        
    }

?>
