<?php

/*
 * class NomClass{
 * }
 */

class Personne
{
    public $nom;
    /**
     * @return mixed
     */
    public $prenom;
    public $age;

    public function monIdentite()
    {
        echo "nom " . $this->nom . "<br>prenom " . $this->prenom . "<br>age " . $this->age;
    }

    public function afficheMonNom()
    {
        return "mon nom est " . $this->nom;
    }
}

// des objets
$personne1 = new Personne();
$personne1->nom = "Estanove";
$personne1->prenom = "Xavier";
$personne1->age = 40;
$personne1->monIdentite();

/*
 * crér une classe voiture
 * attribut : $marque, $anneeDeFabrication, $couleur
 * fonction : AfficherCarractéristique
 */

class Voiture
{
    public $marque;
    public $anneeDeFabrication;
    public $couleur;
    // Ajout de l'attribut par défaut dans la classe mère
    public $nombreDeRoues = 4;

    public function __construct($marque_param, $anneeDeFabrication_param, $couleur_param)
    {
        $this->marque = $marque_param;
        $this->anneeDeFabrication = $anneeDeFabrication_param;
        $this->couleur = $couleur_param;
        // Le nombre de roues est par défaut à 4, pas besoin de le redéfinir ici
    }

    //  Mise à jour de la méthode pour afficher le nombre de roues
    public function afficherCaracteristique()
    {
        echo "<br>--- Caractéristiques ---";
        echo "<br>Marque : " . $this->marque;
        echo "<br>Année de Fabrication : " . $this->anneeDeFabrication;
        echo "<br>Couleur : " . $this->couleur;
        echo "<br>**Nombre de Roues : " . $this->nombreDeRoues . "**";
    }
}

class VoitureVip extends Voiture
    // Attention : La méthode 'VoitureVip()' et le constructeur vide en dehors de la classe
    // étaient des erreurs de syntaxe. J'ai corrigé cela.
{
    public function __construct($marque_param, $anneeDeFabrication_param, $couleur_param)
    {
        // On appelle le constructeur de la Classe Mère (Voiture) pour initialiser
        // les attributs qu'elle gère ($marque, $anneeDeFabrication, $couleur).
        parent::__construct($marque_param, $anneeDeFabrication_param, $couleur_param);

        // On Surcharge l'attribut $nombreDeRoues (hérité de Voiture)
        // avec la valeur spécifique aux VIP (6 roues).
        $this->nombreDeRoues = 6;

        echo "<br><br> **Nouvelle Voiture VIP créée !**";
    }
}

// Création de l'objet Voiture standard
$voitureStandard = new Voiture("Audi", 1880, "Noir");
$voitureStandard->afficherCaracteristique();
// Affiche : Nombre de Roues : 4 (valeur par défaut)

// Création de l'objet Voiture VIP
$voitureVIP = new VoitureVip("Mercedes", 2025, "Blanc");
$voitureVIP->afficherCaracteristique();
// Affiche : Nombre de Roues : 6 (valeur surchargée dans le constructeur de la Fille)

// Exemple de modification de l'objet parent (comme dans ton code initial)
$voitureStandard->marque = "BMW";
$voitureStandard->anneeDeFabrication = 2020;
$voitureStandard->couleur = "Bleu";

echo "<br><br>--- Après modification de la voiture standard ---";
$voitureStandard->afficherCaracteristique();

