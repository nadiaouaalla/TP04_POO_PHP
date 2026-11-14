<?php

class Personne
{
    public $nom;
    public $age;

    public function __construct($nom, $age)
    {
        $this->nom = $nom;
        $this->age = $age;

        echo "Constructeur appelé !<br>";
    }

    public function afficher()
    {
        echo "Nom : " . $this->nom . "<br>";
        echo "Age : " . $this->age . "<br>";
    }

    public function __destruct()
    {
        echo "Destructeur appelé !";
    }
}

$p1 = new Personne("Nadia", 19);

$p1->afficher();

?>