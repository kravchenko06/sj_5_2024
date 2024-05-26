<?php
    class Slider extends Database{
        private $db;

        public function __construct() {
             
            $this->db = $this->db_connection(); 

        }

        function get_slider(){
            $slider = $this->db->query("SELECT * FROM slider");
            return $slider;
        }
    
        function slider(){
            $slider = $this->get_slider()->fetchAll();
            $out = '';
            foreach($slider as $slide){
                $out .= '<div class="slide fade">';
                $out .= '<img src='.$slide->img.'>';
                $out .= '<div class="slide-text">'.$slide->country.'</div>';
                $out .= '</div>';
            }
            return $out;
        }
    }
?>