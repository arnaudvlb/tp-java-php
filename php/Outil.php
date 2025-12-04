<?php
class Outil{

    private $nom = [
    "Perceuse",
    "Ponceuse",
    "Tondeuse",
    "Marteau piqueur",
    "Echelle"
    ];

    private $prixParJour = [
    15.0,
    12.5,
    25.0,
    40.0,
    10.0
    ];

    private $disponible = [
    true,
    true,
    true,
    true,
    true
    ];

    public function getNom() {
        return $this->nom;
    }
    
}
?>