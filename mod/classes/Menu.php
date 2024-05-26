<?php

    class Menu{
        
        private $pages;

        public function __construct($pages)
        {
            
            $this->pages = $pages;
        }

        function generate_menu(): string{
            $items = '<ul class="main-menu" id="main-menu">';
            
            foreach($this->pages as $page_name => $page_url){
                
                $items .= '<li><a href="' . $page_url . '">' . $page_name . '</a></li>';
            }
        
            $items .= '</ul>';
            return $items;
        }
        


    }

?>