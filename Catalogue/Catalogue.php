<?php

class Catalogue{
    private static self $instance;
    private array $articles;

    private function __construct(){
        $this->articles = [];
    }

    public static function getInstance(): self{
        if (is_null(self::$instance )){
            self::$instance = new Catalogue();
        }
        return self::$instance;
    }

    public function addArticle(string $nom): bool{
        $this->articles[] = $nom;
        return true;
    }
    public function getArticles(){
        return $this->articles;
    }
}