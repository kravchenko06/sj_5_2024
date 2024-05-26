<?php

    class Index extends Database{
        
        private $db;

        public function __construct()
        {
            
            $this->db = $this->db_connection();
        }

        function get_index(){
            $index = $this->db->query("SELECT * FROM home");
            return $index;
        }
    
        function index(){
            $index = $this->get_index()->fetchAll();
            $out = '';
            foreach($index as $ind){
                $out .= '<h1>'.$ind->country.'</h1>';
                $out .= '<div class="scroll-container">';
                $out .= '<img src="'.$ind->img1.'" alt="1" width="600" height="400">';
                $out .= '<img src="'.$ind->img2.'" alt="1" width="600" height="400">';
                $out .= '<img src="'.$ind->img3.'" alt="1" width="600" height="400">';
                $out .= '<img src="'.$ind->img4.'" alt="1" width="600" height="400">';
                $out .= '</div>';
            }
            return $out;
        }
        


    }

?>