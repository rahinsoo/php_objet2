<?php
/*
 * Ecrire un programe en PHP qui à partir d'une liste d'année de naissance, affiche :
 * 1. L'année de naissance la plus petite (minimum)
 * 2. L'année de naissance la plus grande (maximum)
 * 3. Le nombre d'année de naissance paires présentes dans la liste
 */

// Création du tableau date de naissance :
$listeDate = array(1850, 1929, 2000, 2030, 2015, 2024);

// ------------------------------------------------
// 1. Année de naissance la plus grande (Maximum)
// ------------------------------------------------

$dateMax = $listeDate[0];

for($i = 1; $i < count($listeDate); $i++)
{
    if($listeDate[$i] > $dateMax)
    {
        $dateMax = $listeDate[$i];
    }
}
echo "Année de naissance la plus grande (Max) : " . $dateMax . "<br>" ;

// ------------------------------------------------
// 2. Année de naissance la plus petite (Minimum)
// ------------------------------------------------

$dateMin = $listeDate[0];

for($i = 1; $i < count($listeDate); $i++)
{
    if($listeDate[$i] < $dateMin)
    {
        $dateMin = $listeDate[$i];
    }
}
echo "Année de naissance la plus petite (Min) : " . $dateMin . "<br>" ;

// ------------------------------------------------
// 3. Nombre d'années de naissance paires
// ------------------------------------------------

// Initialisation du compteur à zéro
$compteurPaires = 0;

foreach ($listeDate as $value) {
    // Vérification de la parité : le modulo 2 est égal à 0
    if ($value % 2 == 0) {
        // Incrémentation du compteur
        $compteurPaires++;
    }
}

echo "Nombre d'années de naissance paires : " . $compteurPaires . "<br>";


