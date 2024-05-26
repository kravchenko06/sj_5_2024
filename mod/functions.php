<?php

    require('db.php');
    function get_image_one(){
        global $db;
        $pictures1 = $db->query("SELECT * FROM image_one");
        return $pictures1;
    
    
    }
    
    
    function get_image_two(){
        global $db;
        $pictures2 = $db->query("SELECT * FROM image_two");
        return $pictures2;
    
    
    }
    
    
    function get_image_three(){
        global $db;
        $pictures3 = $db->query("SELECT * FROM image_three");
        return $pictures3;
    
    
    }
    
    function get_image_four(){
        global $db;
        $pictures4 = $db->query("SELECT * FROM image_four");
        return $pictures4;
    
    
    }
    
    
    
    
    
    
    
    function get_country(){
        global $db;
        $state = $db->query("SELECT * FROM states");
        return $state;
    
    
    }
    
    
    
    
    
    function get_numbers(){
        global $db;
        $numbers = $db->query("SELECT * FROM kont");
        return $numbers;
    
    
    }
    
    function generate_menu(array $pages): string{
        $items = '<ul class="main-menu" id="main-menu">';
        
        foreach($pages as $page_name => $page_url){
            
            $items .= '<li><a href="' . $page_url . '">' . $page_name . '</a></li>';
        }
    
        $items .= '</ul>';
        return $items;
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

    function get_articles(){
        $articles = $this->db->query("SELECT * FROM article");
        return $articles;
    }

    function articles(){
        $articles = $this->get_artciles()->fetchAll();
        $out = '';
        foreach($articles as $article){
            $out .= '<h1>'.$article->title.'</h1>';
            $out .= '<p>'.$article->text.'</p>';
        }
        return $out;
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
            $out .= '<label for="'.$tickets->role.'">'.$ticket->country.'<span>&#x3e;</span></label>';
            $out .= '<input type="radio" name="accordion" id="'.$tickets->role.'">';
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
?>

