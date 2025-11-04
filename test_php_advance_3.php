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
    // Déclaration des propriétés
    public $marque;
    public $anneeDeFabrication;
    public $couleur;

    public function __construct($marque_param, $anneeDeFabrication_param, $couleur_param)
    {
        $this->marque = $marque_param;
        $this->anneeDeFabrication = $anneeDeFabrication_param;
        $this->couleur = $couleur_param;
    }

    public function afficherCaracteristique()
    {
        echo "<br>Marque : " . $this->marque . "<br>Année de Fabrication : " . $this->anneeDeFabrication . "<br>Couleur : " . $this->couleur;
    }

}
class tailleVoiture extends Voiture // 👈 C'est ici qu'on utilise 'extends'
{
    // ... Nouvelles Attributs et Méthodes spécifiques ...
}

// Création de l'objet, le constructeur assigne automatiquement les valeurs
$voiture1 = new Voiture("Audi", 1880, "Noir");

// Affichage correct des caractéristiques initiales (grâce au constructeur)
$voiture1->afficherCaracteristique();
$voiture1->marque = "BMW";
$voiture1->anneeDeFabrication = 2020;
$voiture1->couleur = "Bleu";
// Affichage après modification
$voiture1->afficherCaracteristique();
