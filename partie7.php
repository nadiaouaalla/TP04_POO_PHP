<?php

class CompteBancaire
{
    private $montant;
    private $interet;

    public function __construct($montant, $interet)
    {
        $this->montant = $montant;
        $this->interet = $interet;
    }

    public function calculerInteretCompose($annees)
    {
        for ($i = 1; $i <= $annees; $i++) {
            $this->montant *= (1 + $this->interet / 100);
        }

        return $this->montant;
    }
}

$compte1 = new CompteBancaire(400, 10);

echo "Montant apres 10 ans : ";
echo number_format($compte1->calculerInteretCompose(10), 2);
echo " DH<br>";

$compte2 = new CompteBancaire(2500, 5);

echo "Montant apres 10 ans : ";
echo number_format($compte2->calculerInteretCompose(10), 2);
echo " DH";

?>