<?php

class Catalogue
{
    private static ?self $instance = null;
    private array $articles;

    private function __construct(array $SomeArticles)
    {
        $this->articles = $SomeArticles;
    }

    public static function getInstance(array $someArticles = []): self
    {
        if (is_null(self::$instance)) {
            self::$instance = new Catalogue($someArticles);
        }
        return self::$instance;
    }

    public function addArticle(string $nom): bool
    {
        $this->articles[] = $nom;
        return true;
    }
    public function getArticles()
    {
        return $this->articles;
    }
}
