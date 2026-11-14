<?php

class Etudiant
{
    public $nom;
    public $note;

    public function __construct($nom, $note)
    {
        $this->nom = $nom;
        $this->note = $note;
    }
}

$etudiant = new Etudiant("Nadia", 18);

$donnees = serialize($etudiant);

echo "Donnees serialisees :<br>";
echo htmlspecialchars($donnees) . "<br><br>";

$nouveauEtudiant = unserialize($donnees);

echo "Nom : " . $nouveauEtudiant->nom . "<br>";
echo "Note : " . $nouveauEtudiant->note;

?>