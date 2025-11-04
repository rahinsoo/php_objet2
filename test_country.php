<?php
require_once 'Country.php';
?>
<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <title>Test classe Country</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }

        .country {
            background: #f4f4f4;
            padding: 15px;
            margin: 10px 0;
            border-left: 4px solid #333;
        }

        h1 {
            color: #333;
        }

        h2 {
            color: #666;
        }
    </style>
</head>
<body>
<h1>Test classe Country</h1>
<?php
$france = new Country("France", "Paris", 67.5, "Europe");
// Création Japon
$japon = new Country("Japon", "Tokyo", 125.8, "Asie");
// Création Canada
$canada = new Country("Canada", "Ottawa", 38.2, "Amérique du Nord");
// Création Brésil
$bresil = new Country("Brésil", "Brasília", 214.3, "Amérique du Sud");
// Création Égypte
$egypte = new Country("Égypte", "Le Caire", 104.3, "Afrique");

?>
<h2>Informations des pays</h2>

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
    <?php $egypte->getInfo(); ?>
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

<h2>Bonus : Tableau de tous les pays</h2>
<?php
// On peut stocker tous les objets dans un tableau
$pays = array($france, $japon, $canada, $bresil, $egypte);
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


</body>
</html>