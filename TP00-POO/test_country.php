<?php
require_once 'Country.php';
?>
<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <link rel="stylesheet" href="test_country.css">
    <title>Test classe Country</title>
</head>
<body>
<h1>Test classe Country</h1>
<?php
$chine = new Country("Chine", "Pékin", 1425, "Asie");
$inde = new Country("Inde", "New Delhi", 1408, "Asie");
$etatsunis = new DevelopedCountry("États-Unis", "Washington D.C.", 331, "Amérique du Nord", 25500);
$indonesie = new Country("Indonésie", "Jakarta", 273, "Asie");
$pakistan = new Country("Pakistan", "Islamabad", 231, "Asie");
$bresil = new Country("Brésil", "Brasília", 214, "Amérique du Sud");
$nigeria = new Country("Nigeria", "Abuja", 218, "Afrique");
$bangladesh = new Country("Bangladesh", "Dacca", 169, "Asie");
$russie = new Country("Russie", "Moscou", 144, "Europe/Asie");
$mexique = new Country("Mexique", "Mexico", 126, "Amérique du Nord");
$japon = new DevelopedCountry("Japon", "Tokyo", 125.8, "Asie", 4940);
$france = new DevelopedCountry("France", "Paris", 67.5, "Europe", 2800);
$canada = new DevelopedCountry("Canada", "Ottawa", 38.2, "Amérique du Nord", 2140);
$tousPays = array(
        $chine, $inde, $etatsunis, $indonesie, $pakistan, $bresil, $nigeria,
        $bangladesh, $russie, $mexique, $japon, $france, $canada
);
?>
<h2>Test des getters (méthodes d'accès)</h2>

<div class='country'>
    <strong>🇫🇷 FRANCE</strong><br>
    <?php $france->getInfo(); ?>
</div>
<div class='country'>
    <strong>🇯🇵 JAPON</strong><br>
    <?php $japon->getInfo(); ?>
</div>
<div class='country'>
    <strong>🇨🇦 CANADA</strong><br>
    <?php $canada->getInfo(); ?>
</div>
<div class='country'>
    <strong>🇧🇷 BRÉSIL</strong><br>
    <?php $bresil->getInfo(); ?>
</div>
<div class='country'>
    <strong>🇪🇬 ÉGYPTE</strong><br>
    <?php $nigeria->getInfo(); ?>
</div>

<h2>Exemples getters</h2>

<div class='country'>
    <strong>Propriétés individuelles :</strong><br>
    <?php
    echo "Nom du pays : " . $france->getName() . "<br>";
    echo "Capitale : " . $france->getCapital() . "<br>";
    echo "Population : " . $france->getPopulation() . " millions d'habitants<br>";
    echo "Continent : " . $france->getContinent();
    ?>
</div>
<h2>Création pays développés (classe DevelopedCountry)</h2>
<?php
$france = new DevelopedCountry("France", "Paris", 67.5, "Europe", 2800);
$allemagne = new DevelopedCountry("Allemagne", "Berlin", 83.2, "Europe", 4200);
$japon = new DevelopedCountry("Japon", "Tokyo", 125.8, "Asie", 4940);
?>
<div class='developed'>
    <strong>🇫🇷 FRANCE (DevelopedCountry)</strong><br>
    <?php echo $france->getInfo(); ?>
    </div>

<div class='developed'>
    <strong>🇩🇪 ALLEMAGNE (DevelopedCountry)</strong><br>
    <?php echo $allemagne->getInfo(); ?>
    </div>

<div class='developed'>
    <strong>🇯🇵 JAPON (DevelopedCountry)</strong><br>
    <?php echo $japon->getInfo(); ?>
    </div>

<h2>Comparaison des deux classes</h2>

<div class='comparison'>
    <strong>Différence entre Country et DevelopedCountry :</strong><br><br>

    <u>Vietnam (Country) :</u><br>
    <?php
    echo $inde->getInfo() . "<br>";
    echo "❌ Pas d'information sur le PIB<br><br>";
    ?>

    <u>France (DevelopedCountry) :</u><br>
    <?php
    echo $france->getInfo() . "<br>";
    echo "✅ Inclut l'information sur le PIB : " . $france->getGdp() . " milliards $";
    ?>
    </div>

<?php
// ============================================
// HÉRITAGE : Accès aux méthodes de la classe parente
// ============================================
?>
<h2>Héritage : DevelopedCountry possède TOUTES les méthodes de Country</h2>

<div class='developed'>
    <strong>France (DevelopedCountry) utilise les getters de Country :</strong><br>
    <?php
    echo "• Nom : " . $france->getName() . " (méthode héritée de Country)<br>";
    echo "• Capitale : " . $france->getCapital() . " (méthode héritée de Country)<br>";
    echo "• Population : " . $france->getPopulation() . " millions (méthode héritée de Country)<br>";
    echo "• Continent : " . $france->getContinent() . " (méthode héritée de Country)<br>";
    echo "• PIB : " . $france->getGdp() . " milliards $ (méthode spécifique à DevelopedCountry)<br>";
    ?>
    </div>

<?php
// ============================================
// TEST DES SETTERS SUR DevelopedCountry
// ============================================
?>
<h2>5. Test des setters (méthodes héritées et nouvelles)</h2>

<div class='developed'>
    <strong>Modification du PIB de l'Allemagne :</strong><br>
    <?php
    echo "PIB avant : " . $allemagne->getGdp() . " milliards $<br>";

    // Utilisation du setter spécifique à DevelopedCountry
    $allemagne->setGdp(4300);

    echo "PIB après : " . $allemagne->getGdp() . " milliards $<br>";
    echo "✅ Modification réussie !<br><br>";
?>
    <strong>Modification de la population (méthode héritée) :</strong><br>
    <?php
    echo "Population avant : " . $allemagne->getPopulation() . " millions<br>";

    // Utilisation d'un setter hérité de Country
    $allemagne->setPopulation(84.0);

    echo "Population après : " . $allemagne->getPopulation() . " millions<br>";
    echo "✅ Modification réussie !";
    ?>
    </div>

<?php

// ============================================
// TEST DES SETTERS
// ============================================
?>
<h2>4. Test des setters (méthodes de modification)</h2>

<div class='setter-test'>;
    <strong>Test 1 : Modification du nom du Canada</strong><br>
    <?php echo "<span class='before'>AVANT :</span> " . $canada->getName() . "<br>";

    // Utilisation du setter pour changer le nom
    $canada->setName("Canada (Mis à jour)");

    echo "<span class='after'>APRÈS :</span> " . $canada->getName() . "<br>";
    echo "✓ Le nom a été modifié avec succès !";
    ?>
</div>

<div class='setter-test'>
    <strong>Test 2 : Modification de la population de la France</strong><br>
    <?php
    echo "<span class='before'>AVANT :</span> " . $france->getPopulation() . " millions d'habitants<br>";

    // Utilisation du setter pour changer la population
    $france->setPopulation(68.0);

    echo "<span class='after'>APRÈS :</span> " . $france->getPopulation() . " millions d'habitants<br>";
    echo "✓ La population a été modifiée avec succès !";
    ?>
</div>


<div class='setter-test'>

    <strong>Test 3 : Modifications multiples sur le Japon</strong><br>
    <span class='before'>AVANT :</span><br>
    <?php
    echo "Nom : " . $japon->getName() . "<br>";
    echo "Population : " . $japon->getPopulation() . " millions<br>";
    echo "Capitale : " . $japon->getCapital() . "<br><br>";

    // Modifications multiples
    $japon->setName("Japon (日本)");
    $japon->setPopulation(126.0);
    $japon->setCapital("Tōkyō");

    echo "<span class='after'>APRÈS :</span><br>";
    echo "Nom : " . $japon->getName() . "<br>";
    echo "Population : " . $japon->getPopulation() . " millions<br>";
    echo "Capitale : " . $japon->getCapital() . "<br>";
    echo "✓ Toutes les propriétés ont été modifiées avec succès !";
    ?>
</div>

<h2>Bonus : Tableau de tous les pays</h2>
<?php
// On peut stocker tous les objets dans un tableau
$pays = array($france, $japon, $canada, $bresil, $nigeria, $allemagne, $russie);
?>
<table border='1' cellpadding='10' style='border-collapse: collapse; width: 100%;'>
    <tr style='background: #333; color: white;'>
        <th>Pays</th>
        <th>Capitale</th>
        <th>Population (millions)</th>
        <th>Continent</th>
    </tr>

    <?php
    foreach ($pays as $p) {
        echo "<tr>";
        echo "<td>" . $p->getName() . "</td>";
        echo "<td>" . $p->getCapital() . "</td>";
        echo "<td>" . $p->getPopulation() . "</td>";
        echo "<td>" . $p->getContinent() . "</td>";
        echo "</tr>";
    }
    ?>
</table>
<table>
    <tr>
        <th>Pays</th>
        <th>Population (millions)</th>
        <th>Très peuplé ? (> 100M)</th>
    </tr>
<?php
    // Parcours de tous les pays et test de isPopulous()
    foreach ($tousPays as $p2) {
    echo "<tr>";
        echo "<td>" . $p2->getName() . "</td>";
        echo "<td>" . $p2->getPopulation() . "</td>";

        // Test de la méthode isPopulous()
        if ($p2->isPopulous()) {
        echo "<td class='yes'>✓ OUI</td>";
        } else {
        echo "<td class='no'>✗ Non</td>";
        }

        echo "</tr>";
    }
?>
    </table>
<?php afficherPaysTreePeuples($tousPays); ?>

</body>
</html>