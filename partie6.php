<?php

// 1. Classe Animal
class Animal
{
    public function manger()
    {
        echo "L'animal mange.<br>";
    }
}

// Classe Chien hérite de Animal
class Chien extends Animal
{
    public function aboyer()
    {
        echo "Le chien aboie.<br>";
    }
}

// Classe Chat hérite de Animal
class Chat extends Animal
{
    public function miauler()
    {
        echo "Le chat miaule.<br>";
    }
}

// Création des objets
$chien = new Chien();
$chat = new Chat();

$chien->manger();
$chien->aboyer();

$chat->manger();
$chat->miauler();

echo "<hr>";

// 2. Classe Personne
class Personne
{
    protected $nom;
    protected $prenom;

    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function afficher()
    {
        echo "Nom : " . $this->nom . "<br>";
        echo "Prenom : " . $this->prenom . "<br>";
    }
}

// Classe Etudiant hérite de Personne
class Etudiant extends Personne
{
    private $filiere;

    public function __construct($nom, $prenom, $filiere)
    {
        parent::__construct($nom, $prenom);
        $this->filiere = $filiere;
    }

    public function afficherEtudiant()
    {
        $this->afficher();
        echo "Filiere : " . $this->filiere . "<br>";
    }
}

$etudiant = new Etudiant("Ouaalla", "Nadia", "Informatique");

$etudiant->afficherEtudiant();

echo "<hr>";

// 3. Mot-clé final
final class Test
{
    public function afficher()
    {
        echo "Exemple de final<br>";
    }
}

$test = new Test();
$test->afficher();

// 4. Mot-clé readonly
class EtudiantInfo
{
    public readonly string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }
}

$info = new EtudiantInfo("Nadia");

echo "Nom : " . $info->nom;

?>