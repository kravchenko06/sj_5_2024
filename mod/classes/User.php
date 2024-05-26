<?php

    class User extends Database{
        private $db;

        public function __construct()
        {
            $this->db = $this->db_connection();
        }

        public function register($email, $password){
            try{
             
                $hashed_password = $password;
        
                // Dáta pre vloženie nového používateľa do databázy
                $data = array(
                    'user_email' => $email,
                    'user_password' => md5($hashed_password),
                    'user_role'=>'0'
                );
        
                // SQL dopyt na vloženie nového používateľa
                $sql = "INSERT INTO user (email, password,role) VALUES (:user_email, :user_password,:user_role)";
                $query_run = $this->db->prepare($sql);
                $query_run->execute($data);
        
                // Úspešná registrácia
                return true;
            } catch(PDOException $e){
                // Spracovanie chyby, ak nastane
                echo "Chyba pri registrácii: " . $e->getMessage();
                return false;
            }
        }
    }

?>