<?php

class Catalogue {
    private static $instance = null;

    private function __construct() {
        
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Catalogue();
        }
        
        return self::$instance;
    }

    
    public function showArticles() {
        echo "Voici les articles du catalogue\n";
    }
}

class Article {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
}


$catalogue = Catalogue::getInstance();

$article = new Article("Article 1", 100);
$article2 = new Article("Article 2", 200);

$catalogue->showArticles();
echo $article->name . "\n";
echo $article->price . "\n";
echo $article2->name . "\n";
echo $article2->price . "\n";



?>