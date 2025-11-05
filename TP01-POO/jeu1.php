<?php
require_once 'objet_creatures.php';
require_once 'objet_arene.php';
$guerrier1 = new guerrier("Guerrier fou", 150, 20, 10, "Pour la gloire");
$mage1 = new mage("Mage Décérébré", 100, 30, 5, "Abracadabra !");
$archer1 = new archer("Archer Detravers", 120, 15, 8, "Prêt à viser !");

$creature = array($guerrier1, $mage1, $archer1);
foreach ($creature as $cr)
{
    echo "<h3>{$cr->getNom()} : 
 Santé **{$cr->getSante()}** | 
 Force **{$cr->getForce()}** | 
 Défense **{$cr->getDefense()}**|</h3>
<h4 style='color:#8b4e31;'>{$cr->crier()}</h4>";
    echo "<h4 style='color:darkred;'>{$cr->crier2()}</h4>";
}

Arene::lancerCombat($archer1, $mage1);