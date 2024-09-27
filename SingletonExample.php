<?php

$catalogue1 = Catalogue::getInstance('Trouglougou');
echo $catalogue1->nom;

$catalogue2 = Catalogue::getInstance('Trigligi');
echo $catalogue2->nom;

class Catalogue
{
    private static $instance;
    public string $nom;

    private function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    public static function getInstance(string $nom)
    {
        if (is_null(self::$instance)) {
            self::$instance = new Catalogue($nom);
        }

        return self::$instance;
    }
}
