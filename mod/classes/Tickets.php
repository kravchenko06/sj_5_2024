<?php

    class Tickets extends Database{
        
        private $db;

        public function __construct()
        {
            
            $this->db = $this->db_connection();
        }

        function get_tickets(){
            $tickets = $this->db->query("SELECT * FROM tickets");
            return $tickets;
        }
    
        function tickets(){
            $tickets = $this->get_tickets()->fetchAll();
            $out = '';
            foreach($tickets as $ticket){
                $out .= '<li>';
                $out .= '<label for="'.$ticket->role.'">'.$ticket->country.'<span>&#x3e;</span></label>';
                $out .= '<input type="radio" name="accordion" id="'.$ticket->role.'">';
                $out .= '<div class="content">';
                $out .= '<p>'.$ticket->text.'</p>';
                $out .= '<button>';
                $out .= '<span>Buy</span>';
                $out .= '<svg viewBox="-5 -5 110 110" preserveAspectRatio="none" aria-hidden="true">';
                $out .= '<path d="M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0"/>';
                $out .= '</svg>';
                $out .= '</button>';
                $out .= '</div>';
                $out .= '</li>';
            }
            return $out;
        }
        


    }

?>