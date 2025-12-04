<?php

require_once 'Outil.php';

class GestionLocation
{
    private $outil;

    public function __construct()
    {
        $this->outil = new Outil;
    }

    public function locationOutil(int $id, int $nbJour)
    {
        $nom = $this->outil->getNom();
        $prixParJour = $this->outil->getPrixParJour();
        $disponible = $this->outil->getDisponible();


        if (!array_key_exists($id, $nom)) {
            echo "Index invalide.\n\n";
        } elseif ($disponible[$id] == false) {
            echo "Outil deja loue. Impossible de le louer a nouveau.\n\n";
        } else {
            echo "\n---------- Recapitulatif ----------\n";
            echo "Outil : " . $nom[$id] . "\n";
            echo "Duree : " . $nbJour . " jour(s)\n";
            echo "Prix par jour : " . $prixParJour[$id] . " €\n";
            echo "Prix total : " . $nbJour * $prixParJour[$id] . " €\n";
            echo "-----------------------------------\n\n";
        }
        $disponible[$id] = false;
        $this->outil->setDisponible($disponible);
    }

    public function retourOutil(int $id)
    {
        $nom = $this->outil->getNom();
        $disponible = $this->outil->getDisponible();

        if (!array_key_exists($id, $nom)) {
            echo "Index invalide.\n\n";
        } elseif ($disponible[$id] == true) {
            echo "Cet outil est deja marque comme disponible.\n\n";
        } else {
            echo "Outil " . $nom[$id] . " retourne. Il est maintenant disponible.\n\n";

            $disponible[$id] = true;
            $this->outil->setDisponible($disponible);
        }
    }
}
