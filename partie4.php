<?php

class Personne
{
    private $nom;
    private $prenom;
    private $dateNaissance;

    public function __construct($nom, $prenom, $dateNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    public function __toString()
    {
        return "Nom : " . $this->nom .
               ", Prenom : " . $this->prenom .
               ", Date de naissance : " . $this->dateNaissance;
    }
}

$p = new Personne("Ouaalla", "Nadia", "2007-09-29");

echo $p;

?>