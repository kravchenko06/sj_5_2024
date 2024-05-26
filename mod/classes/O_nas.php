<?php

    class Onas extends Database{
        
        private $db;

        public function __construct()
        {
            
            $this->db = $this->db_connection();
        }

        function get_articles(){
            $articles = $this->db->query("SELECT * FROM article");
            return $articles;
        }
    
        function articles(){
            $articles = $this->get_articles()->fetchAll();
            
            foreach($articles as $article){
                echo $article->title;
                echo $article->text;
            }
        }
        


    }

?>