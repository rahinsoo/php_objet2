<?php

class creature
{
    //(Chaine de caractères) : Le nom de la créature.
    private string $nom;
    // (entier) : Les points de santé de la créature.
    protected int $sante;
    // (entier) : La puissance des attaques de la créature.
    protected int $force;
    // (entier) : La capacité de la créature à réduire les dégâts reçus.
    protected int $defense;

    public function __construct($nom, $sante, $force, $defense)
    {
        $this->nom = $nom;
        $this->sante = $sante;
        $this->force = $force;
        $this->defense = $defense;
    }

    // mes méthodes
    public function attaquer($adversaire): void
    {
        //Inflige des dégâts à l'adversaire. Les dégâts sont calculés comme force - defense (minimum 0).
        // Calcul des dégâts infligés avant réduction par la défense de l'adversaire
        $degatsBase = $this->force;
        // L'adversaire reçoit les dégâts
        $adversaire->recevoirDegats($degatsBase);
    }

    public function recevoirDegats(int $degats): void
    {
        // Reduit les points de santé en fonctions des degats reçus
        $degatsFinaux = max(0, $degats - $this->defense);
        $this->sante -= $degatsFinaux;

        // S'assurer que la santé ne devient pas négative (si elle n'est pas déjà à 0)
        if ($this->sante < 0) {
            $this->sante = 0;
        }
    }

    public function estEnVie(): bool
    {
        // Retourne true, si les points de santé sont supérieurs à 0, sinon false
        return $this->sante > 0;
    }

    public function crier(): string
    {
        // Retourne une phrase propre à chaque créature
        return "{$this->nom} fait un bruit mystérieux.";
    }
// mes getters

    /**
     * @return mixed
     */
    public function getSante()
    {
        return $this->sante;
    }

    /**
     * @return mixed
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * @return mixed
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

}

class guerrier extends creature
{
    private $cri;

    public function __construct($nom, $sante, $force, $defense, $cri)
    {
        parent::__construct($nom, $sante, $force, $defense);
        $this->cri = $cri;

    }

    public function crier2(): string
    {
        // Retourne une phrase propre à chaque créature
        return $this->cri;
    }
}

class mage extends creature
{
    private $cri;

    public function __construct($nom, $sante, $force, $defense, $cri)
    {
        parent::__construct($nom, $sante, $force, $defense);
        $this->cri = $cri;

    }

    public function crier2(): string
    {
        // Retourne une phrase propre à chaque créature
        return $this->cri;
    }

    public function attaquer($adversaire): void
    {
        //Inflige des dégâts à l'adversaire. Les dégâts sont calculés comme force - defense (minimum 0).
        // Calcul des dégâts infligés avant réduction par la défense de l'adversaire
        $degatsBase = $this->force;
        // L'adversaire reçoit les dégâts
        $adversaire->recevoirDegats($degatsBase);
    }
}

class archer extends creature
{
    private $cri;

    public function __construct($nom, $sante, $force, $defense, $cri)
    {
        parent::__construct($nom, $sante, $force, $defense);
        $this->cri = $cri;

    }

    public function crier2(): string
    {
        // Retourne une phrase propre à chaque créature
        return $this->cri;
    }

    public function recevoirDegats(int $degats): void
    {
        $chance = rand(1, 100);
        if ($chance <= 30) {
            echo '<p style="color:blue;">attaque évité </p>';

        } else {
            // Reduit les points de santé en fonctions des degats reçus
            $degatsFinaux = max(0, $degats - $this->defense);
            $this->sante -= $degatsFinaux;

            // S'assurer que la santé ne devient pas négative (si elle n'est pas déjà à 0)
            if ($this->sante < 0) {
                $this->sante = 0;
            }
        }
    }
}


