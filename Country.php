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
    // ============================================
    // GETTERS - Méthodes pour accéder aux attributs
    // ============================================
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
    // ============================================
    // SETTERS - Méthodes pour modifier les attributs
    // ============================================

    /**
     * Modifie le nom du pays
     */
    public function setName($name)
    {
        // On met à jour l'attribut $name avec la nouvelle valeur
        $this->name = $name;
    }

    public function setCapital($capital)
    {
        $this->capital = $capital;
    }

    public function setPopulation($population)
    {
        // On peut ajouter une validation pour s'assurer que la population est positive
        if ($population > 0) {
            $this->population = $population;
        } else {
            echo "Erreur : La population doit être un nombre positif.<br>";
        }
    }

    /**
     * Modifie le continent du pays
     */
    public function setContinent($continent)
    {
        $this->continent = $continent;
    }
}

/**
 * Fichier de la classe DevelopedCountry
 * Cette classe hérite de Country et ajoute des fonctionnalités spécifiques
 * aux pays développés
 */

// Importation de la classe parente Country
require_once 'Country.php';

/**
 * Classe DevelopedCountry (Pays Développé)
 *
 * Cette classe hérite de Country et représente un pays développé
 * Elle ajoute l'attribut PIB (Produit Intérieur Brut)
 *
 * Le mot-clé "extends" indique que DevelopedCountry hérite de Country
 */
class DevelopedCountry extends Country
{
    // ============================================
    // ATTRIBUT SPÉCIFIQUE À CETTE CLASSE
    // ============================================
    /**
     * @var float Le PIB (Produit Intérieur Brut) en milliards de dollars
     */
    private $gdp;
    // ============================================
    // CONSTRUCTEUR
    // ============================================
    /**
     * Constructeur de la classe DevelopedCountry
     *
     * Ce constructeur doit :
     * 1. Appeler le constructeur de la classe parente (Country) avec parent::__construct()
     * 2. Initialiser le nouvel attribut $gdp
     *
     * @param string $name Le nom du pays
     * @param string $capital La capitale du pays
     * @param float $population La population en millions
     * @param string $continent Le continent
     * @param float $gdp Le PIB en milliards de dollars
     */
    public function __construct($name, $capital, $population, $continent, $gdp)
    {
        // Appel du constructeur de la classe parente (Country)
        // parent:: permet d'accéder aux méthodes de la classe parente
        // On lui passe les 4 premiers paramètres
        parent::__construct($name, $capital, $population, $continent);

        // Initialisation de l'attribut spécifique à DevelopedCountry
        $this->gdp = $gdp;
    }
    // ============================================
    // REDÉFINITION DE MÉTHODE (OVERRIDE)
    // ============================================
    /**
     * Méthode getInfo() redéfinie
     *
     * Cette méthode "écrase" (override) la méthode getInfo() de la classe parente
     * Elle inclut maintenant les informations sur le PIB
     *
     * @return string Une phrase descriptive du pays développé avec le PIB
     */
    public function getInfo()
    {
        // On construit une nouvelle chaîne qui inclut toutes les infos
        // y compris le PIB
        return "Le pays " . $this->getName() . " se situe en " . $this->getContinent() .
            ". Sa capitale est " . $this->getCapital() .
            " et sa population est de " . $this->getPopulation() . " millions d'habitants. " .
            "Son PIB est de " . $this->gdp . " milliards de dollars.";
    }
    // ============================================
    // GETTER ET SETTER POUR LE PIB
    // ============================================
    public function getGdp()
    {
        return $this->gdp;
    }

    public function setGdp($gdp)
    {
        // Validation : le PIB doit être positif
        if ($gdp > 0) {
            $this->gdp = $gdp;
        } else {
            echo "Erreur : Le PIB doit être un nombre positif.<br>";
        }
    }
}





