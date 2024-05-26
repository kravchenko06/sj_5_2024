

<?php

    class Kontakts extends Database{
    
        private $db;

        public function __construct()
        {
        
            $this->db = $this->db_connection();
        }

        function get_kontakts(){
            $kontakts = $this->db->query("SELECT * FROM kont");
            return $kontakts;
        }
    
        function kontakts(){
            $kontakts = $this->get_kontakts()->fetchAll();
            $out = '';
            foreach($kontakts as $kontakt){
                $out .= '<h1>'.$kontakt->title.'</h1>';
                $out .= '<p>'.$kontakt->number.'</p>';
            }
            return $out;
        }
        


    }

?>