<?php

    class Onas extends Database{
        
        private $db;

        public function __construct()
        {
            
            $this->db = $this->db_connection();
        }

        function get_articles() {
            try {
                $articles = $this->db->query("SELECT * FROM article");
                return $articles;
            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
                return false;
            }
        }
    
        function articles() {
            $articles = $this->get_articles();
            if ($articles) {
                $articles = $articles->fetchAll(PDO::FETCH_ASSOC);
                foreach ($articles as $article) {
                    echo '<article>';
                    echo '<h2>' . htmlspecialchars($article['title']) . '</h2>';
                    echo '<p>' . nl2br(htmlspecialchars($article['text'])) . '</p>';
                    echo '</article>';
                }
            } else {
                echo '<p>No articles found.</p>';
            }
        }
    }

?>
