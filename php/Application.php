<?php

require 'Catalogue.php';
require 'GestionLocation.php';
class Application
{

    private $catalogue;

    private $gestionLocation;

    public function __construct()
    {
        $this->catalogue = new Catalogue;
        $this->gestionLocation = new GestionLocation;
    }

    function readLineInput(string $prompt): string
    {
        echo $prompt;
        $line = fgets(STDIN);
        if ($line === false) {
            return "";
        }
        return trim($line);
    }

    public function lancerApplication()
    {
        while (!isset($quit)) {
            echo "=====================================\n";
            echo "   Mini systeme de location d'outils \n";
            echo "=====================================\n";
            echo "1. Lister les outils\n";
            echo "2. Louer un outil\n";
            echo "3. Retourner un outil\n";
            echo "4. Quitter\n";

            $choiceLine = readLineInput("Votre choix : ");
            if (!ctype_digit($choiceLine)) {
                echo "Choix invalide.\n\n";
                continue;
            }
            $choice = intval($choiceLine);

            if ($choice === 1) {
                $this->catalogue->listeOutils();
            } elseif ($choice === 2) {
                $indexLine = readLineInput("\nEntrez l'index de l'outil a louer : ");
                if (!ctype_digit($indexLine)) {
                    echo "Index invalide.\n\n";
                    continue;
                }
                $index = intval($indexLine);

                $daysLine = readLineInput("Nombre de jours de location : ");
                if (!ctype_digit($daysLine)) {
                    echo "Nombre de jours invalide.\n\n";
                    continue;
                }
                $days = intval($daysLine);

                $this->gestionLocation->locationOutil($index, $days);
            } elseif ($choice === 3) {
                $indexLine = readLineInput("\nEntrez l'index de l'outil a retourner : ");
                if (!ctype_digit($indexLine)) {
                    echo "Index invalide.\n\n";
                    continue;
                }
                $index = intval($indexLine);

                $this->gestionLocation->retourOutil($index);
            } elseif ($choice === 4) {
                $quit = true;
                echo "Au revoir !\n";
            } else {
                echo "Choix invalide.\n\n";
            }
        }
    }
}
