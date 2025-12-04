<?php

require_once 'Outil.php';

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
        echo "\n";
    }

    public function rechercheId(int $id)
    {
        $nom = $this->outil->getNom();
        if (!array_key_exists($id, $nom)) {
            echo "Index invalide.\n\n";
        } else {
            echo "L'outil correspondant à " . $id . " est: " . $nom[$id] . "\n\n";
        }
    }
}
