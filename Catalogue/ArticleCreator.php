<?php

require_once('ArticleDisplayer.php');
require_once('Catalogue.php');

class ArticleCreator
{
    public function create(string $nom): bool
    {
        $displayer = new ArticleDisplayer();
        $catalogue = Catalogue::getInstance();

        $displayer->show();
        $catalogue->addArticle("Oulala");
        $displayer->show();

        return true;
    }
}
