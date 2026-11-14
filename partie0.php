<?php

class Voiture
{
    public $marque;

    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    public function afficher()
    {
        echo "Marque : " . $this->marque;
    }
}

$voiture = new Voiture();

$voiture->setMarque("Toyota");

$voiture->afficher();

?>