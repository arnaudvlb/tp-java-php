<?php

require 'Outil.php';
class Catalogue
{
    private $outil;

    public function __construct()
    {
        $this->outil = new Outil;
    }

    public function listeOutils()
    {
        $nom = $this->outil->getNom();
        echo "\nListe des outils :\n";
        foreach ($nom as $key => $value) {
            echo $key . ". " . $value . "\n";
        }
    }

    public function rechercheId(int $id)
    {
        $nom = $this->outil->getNom();
        if ($nom[$id] == null) {
            echo "Aucun outil à l'identifiant entré";
        } else {
            echo "L'outil correspondant à " . $id . " est: " . $nom[$id];
        }
    }
}
