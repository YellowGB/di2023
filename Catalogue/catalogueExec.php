<?php

require_once('Catalogue.php');
require_once('ArticleCreator.php');
require_once('ArticleDisplayer.php');

$creator = new ArticleCreator();
$displayer = new ArticleDisplayer();

$creator->create('Oulala');
$creator->create('Ilili');
