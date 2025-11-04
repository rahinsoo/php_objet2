<?php

// ----------------------------------------------------
// 🏦 1. LA CLASSE (La Recette de base : Compte Bancaire)
// ----------------------------------------------------

/**
 * Une Classe est le plan ou le modèle pour créer un Objet.
 * C'est la "recette" qui définit ce qu'un Compte Bancaire doit être et ce qu'il peut faire.
 */
class CompteBancaire
{
    // ------------------------------------------------
    // 💰 2. ATTRIBUTS (Les Ingrédients : Les Caractéristiques)
    // ------------------------------------------------

    /**
     * Les Attributs sont les variables qui décrivent l'état de l'Objet.
     * On utilise 'protected' ou 'private' pour protéger les données (Encapsulation).
     */
    protected $solde; // Le montant d'argent sur le compte
    protected $titulaire; // Le nom de la personne

    // ------------------------------------------------
    // 🛠️ 3. CONSTRUCTEUR (__construct)
    // ------------------------------------------------

    /**
     * Le Constructeur est une méthode spéciale, appelée automatiquement par 'new'.
     * Il sert à initialiser (donner les premières valeurs) les Attributs de l'Objet.
     * Ici, on oblige à donner un titulaire et un solde de départ.
     */
    public function __construct(string $titulaire, float $soldeInitial)
    {
        $this->titulaire = $titulaire;
        $this->solde = $soldeInitial;
        echo "✅ Nouveau compte créé pour **{$this->titulaire}** avec un solde initial de **{$this->solde} €**.\n";
    }

    // ------------------------------------------------
    // 🚀 4. MÉTHODES (Les Étapes : Les Actions)
    // ------------------------------------------------

    /**
     * Les Méthodes sont les fonctions qui définissent ce que l'Objet peut faire.
     * Pour parler de CE compte (l'Objet courant), on utilise toujours $this->
     */

    public function deposer(float $montant) // Pour ajouter de l'argent
    {
        if ($montant > 0) {
            $this->solde += $montant;
            echo "➕ Dépôt de {$montant} €. Nouveau solde : {$this->solde} €.\n";
            return true;
        }
        return false;
    }

    public function retirer(float $montant) // Pour enlever de l'argent
    {
        if ($montant > 0 && $this->solde >= $montant) {
            $this->solde -= $montant;
            echo "➖ Retrait de {$montant} €. Nouveau solde : {$this->solde} €.\n";
            return true;
        } elseif ($this->solde < $montant) {
            echo "❌ Opération annulée. Solde insuffisant ({$this->solde} €).\n";
            return false;
        }
        return false;
    }

    public function afficherSolde() // Pour consulter le solde
    {
        echo "💸 Solde actuel du compte de {$this->titulaire} : **{$this->solde} €**.\n";
        return $this->solde;
    }
}

// ----------------------------------------------------------
// 👶 5. HÉRITAGE et EXTENDS (La Recette Spéciale : Compte Épargne)
// ----------------------------------------------------------

/**
 * La classe CompteEpargne est un type spécial de CompteBancaire.
 * Le mot-clé 'extends' permet à CompteEpargne d'hériter automatiquement
 * tous les Attributs ($solde, $titulaire) et toutes les Méthodes
 * (deposer, retirer, afficherSolde) de CompteBancaire.
 */
class CompteEpargne extends CompteBancaire
{
    private $tauxInteret; // Un nouvel Attribut spécifique à l'épargne

    // Surcharge du Constructeur pour ajouter le taux d'intérêt
    public function __construct(string $titulaire, float $soldeInitial, float $taux)
    {
        // On appelle le constructeur de la classe MÈRE (CompteBancaire) pour faire son travail
        parent::__construct($titulaire, $soldeInitial);

        $this->tauxInteret = $taux;
        echo "    *Spécial Compte Épargne : Taux d'intérêt fixé à {$this->tauxInteret} %.\n";
    }

    // Une nouvelle Méthode spécifique à l'épargne
    public function appliquerInterets()
    {
        $interets = $this->solde * ($this->tauxInteret / 100);
        $this->solde += $interets; // On utilise l'Attribut $solde hérité !
        echo "💰 Intérêts appliqués ! (+$interets €). Nouveau solde : **{$this->solde} €**.\n";
    }
}


// ----------------------------------------------------------
// 🎁 6. OBJETS (Les Vrais Comptes dans la Banque)
// ----------------------------------------------------------

echo "================================================\n";
echo "         CRÉATION ET UTILISATION DES OBJETS\n";
echo "================================================\n";

// Création d'un premier Objet (instance) de la classe CompteBancaire
$compteCourant = new CompteBancaire("Alice", 100.00);

// Création d'un deuxième Objet (instance) de la classe CompteEpargne (héritage)
$compteEpargne = new CompteEpargne("Bob", 500.00, 2.5);

echo "\n------------------------------------------------\n";
echo "Compte Courant d'Alice (Objet de la classe MÈRE) :\n";
echo "------------------------------------------------\n";

// Utilisation des Méthodes
$compteCourant->deposer(50.00);
$compteCourant->retirer(20.00);
$compteCourant->afficherSolde();

echo "\n------------------------------------------------\n";
echo "Compte Épargne de Bob (Objet de la classe FILLE) :\n";
echo "------------------------------------------------\n";

// Utilisation d'une Méthode HERITÉE (elle vient de CompteBancaire)
$compteEpargne->afficherSolde();

// Utilisation d'une Méthode PROPRE
$compteEpargne->appliquerInterets();

// Utilisation d'une autre Méthode HERITÉE
$compteEpargne->retirer(600.00); // Test du retrait impossible (solde insuffisant)

/*
 * Si l'Héritage (extends) est une transmission de recette (une est un type de), l'Interface est un Contrat ou une Promesse.
 ** Une Interface est un plan qui dit : "Si tu me promets de respecter ce contrat, tu dois absolument avoir ces méthodes (actions)."
 ** Le mot-clé implements signifie : "Cette classe accepte le contrat de l'interface et promet d'écrire toutes les méthodes demandées."
 */

// 🏦 INTERFACE (Le Contrat)
interface ServiceBancaire
{
    // C'est juste une promesse, on n'écrit PAS le code des méthodes ici.
    // On doit seulement dire : "Tu dois avoir ces deux actions."
    public function crediter(float $montant): bool;
    public function debiter(float $montant): bool;
}

// 🏦 CLASSE (La classe qui signe le Contrat)
class CompteBancaire implements ServiceBancaire // 👈 On signe le contrat !
{
    protected $solde;
    protected $titulaire;

    public function __construct(string $titulaire, float $soldeInitial)
    {
        $this->titulaire = $titulaire;
        $this->solde = $soldeInitial;
        echo "✅ Compte créé pour **{$this->titulaire}**.\n";
    }

    // 🚀 La méthode 'crediter' est OBLIGATOIRE (demandée par l'Interface)
    public function crediter(float $montant): bool
    {
        if ($montant > 0) {
            $this->solde += $montant;
            echo "➕ Crédit de {$montant} €. Nouveau solde : {$this->solde} €.\n";
            return true;
        }
        return false;
    }

    // 🚀 La méthode 'debiter' est OBLIGATOIRE (demandée par l'Interface)
    public function debiter(float $montant): bool
    {
        if ($montant > 0 && $this->solde >= $montant) {
            $this->solde -= $montant;
            echo "➖ Débit de {$montant} €. Nouveau solde : {$this->solde} €.\n";
            return true;
        }
        echo "❌ Débit annulé. Solde insuffisant ({$this->solde} €).\n";
        return false;
    }

    public function afficherSolde()
    {
        echo "💸 Solde actuel : **{$this->solde} €**.\n";
    }
}

// ----------------------------------------------------
// 🎁 UTILISATION DES OBJETS
// ----------------------------------------------------

$compteAlice = new CompteBancaire("Alice", 100.00);

$compteAlice->crediter(50.00); // Utilisation de la méthode du contrat
$compteAlice->debiter(20.00);  // Utilisation de la méthode du contrat
$compteAlice->afficherSolde();