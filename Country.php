<?php

/**
 * Classe représentant un pays
 * Cette classe permet de stocker et manipuler les informations d'un pays
 */
class Country
{
    private $name;
    private $capital;
    private $population;
    private $continent;

    /**
     * Constructeur de la classe Country
     * Cette méthode spéciale est appelée automatiquement lors de la création d'un objet
     *
     * @param string $name Le nom du pays
     * @param string $capital La capitale du pays
     * @param float $population La population en millions
     * @param string $continent Le continent
     */
    public function __construct($name, $capital, $population, $continent)
    {
        // On initialise chaque attribut avec les valeurs passées en paramètres
        // $this fait référence à l'instance courante de l'objet
        $this->name = $name;
        $this->capital = $capital;
        $this->population = $population;
        $this->continent = $continent;
    }

    public function getInfo()
    {
        // On construit une chaîne de caractères avec toutes les informations
        // On utilise la concaténation avec le point (.)
        echo "Le pays " . $this->name . " se situe en " . $this->continent .
            ". </br> Sa capitale est " . $this->capital .
            " et sa population est de " . $this->population . " millions d'habitants.";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCapital()
    {
        return $this->capital;
    }

    public function getPopulation()
    {
        return $this->population;
    }

    public function getContinent()
    {
        return $this->continent;
    }
}

// Calcul de la population totale

//$populationTotale = 0;
//foreach ($pays as $p) {
//    $populationTotale += $p->getPopulation();
//}
//echo "<strong>Nombre de pays créés :</strong> " . count($pays) . "<br>";
//echo "<strong>Population totale :</strong> " . $populationTotale . " millions d'habitants<br>";
//echo "<strong>Population moyenne :</strong> " . round($populationTotale / count($pays), 2) . " millions d'habitants";



