<?php

class Personne
{
    public $nom;
    public $prenom;

    private $dateNaissance;
    private $villeNaissance;
    private $cin;

    public function __construct($nom, $prenom, $dateNaissance, $villeNaissance, $cin)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->villeNaissance = $villeNaissance;
        $this->cin = $cin;
    }

    public function getName()
    {
        return $this->prenom . " " . $this->nom;
    }

    private function getAge()
    {
        $date = new DateTime($this->dateNaissance);
        $aujourdhui = new DateTime();

        return $date->diff($aujourdhui)->y;
    }
}

$personne = new Personne(
    "Ouaalla",
    "Nadia",
    "2007-09-29",
    "Marrakech",
    "EE123456"
);

echo $personne->getName();

?>