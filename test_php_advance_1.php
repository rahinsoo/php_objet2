<?php
/*$anneeNaissance = intval(readline("Quelle est votre année de naissance ? "));
$anneeActuelle = 2025;
$age = $anneeActuelle - $anneeNaissance;
echo "Vous avez " . $age . " ans.";*/

$anneeDeNaissance = 2009;
$age = 2025 - $anneeDeNaissance;

echo "Vous avez " . $age . " ans." . "<br>";

if ($age % 2 == 0) {
    echo "Votre âge est pair." . "<br>";
}

if ($age >= 18) {
    echo "Vous êtes majeur." . "<br>";
} else {
    echo "Vous êtes mineur." . "<br>";
}

for ($i=1; $i <= 3; $i++) {
    $anneeSuivante = $anneeDeNaissance + $i;
    echo $anneeSuivante . "<br>";
}

$years = [1952, 1983, 1986, 2010, 2018, 2021];

echo "avec la boucle for" . "<br>";
for ($i=0; $i < count($years); $i++) {
    echo $years[$i] . "<br>";
}

echo "<br>";

echo "avec la boucle foreach" . "<br>";
foreach ($years as $value) {
    echo $value . "<br>";
}






