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
        $disponible = $this->outil->getDisponible();
        echo "\nListe des outils :\n";
        foreach ($nom as $key => $value) {
            echo $key . ". " . $value . " : " . ($disponible[$key] == true ? "DISPONIBLE" : "LOUE") . "\n";
        }
    }

    public function rechercheId(int $id)
    {
        $nom = $this->outil->getNom();
        if (is_null($nom[$id])) {
            echo "Aucun outil à l'identifiant entré";
        } else {
            echo "L'outil correspondant à " . $id . " est: " . $nom[$id];
        }
    }
}
