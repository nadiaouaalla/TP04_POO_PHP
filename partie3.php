<?php

class Personne
{
    private $nom = "Nadia";

    public function __get($propriete)
    {
        if (property_exists($this, $propriete)) {
            return $this->$propriete;
        }

        return null;
    }

    public function __set($propriete, $valeur)
    {
        if (property_exists($this, $propriete)) {
            $this->$propriete = $valeur;
        }
    }

    public function __isset($propriete)
    {
        return isset($this->$propriete);
    }

    public function __unset($propriete)
    {
        unset($this->$propriete);
    }
}

$p = new Personne();

echo $p->nom;

?>