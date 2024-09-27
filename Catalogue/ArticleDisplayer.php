<?php

require_once('Catalogue.php');
class ArticleDisplayer
{
    // Méthode
    public function show(): void
    {
        $catalogue = Catalogue::getInstance();

        $articles = $catalogue->getArticles();

        print_r($articles);
    }
}
