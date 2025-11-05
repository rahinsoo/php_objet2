<?php
require_once 'objet_creatures.php';
require_once 'objet_arene.php';
$guerrier1 = new guerrier("Guerrier fou", 150, 20, 10, "Pour la gloire");
$mage1 = new mage("Mage Décérébré", 100, 30, 5, "Abracadabra !");
$archer1 = new archer("Archer Detravers", 120, 15, 8, "Prêt à viser !");

$creature = array($guerrier1, $mage1, $archer1);
foreach ($creature as $cr)
{
    echo "{$cr->getNom()} : 
 Santé **{$cr->getSante()}** | 
 Force **{$cr->getForce()}** | 
 Défense **{$cr->getDefense()}**|</br>
{$cr->crier()}</br>";
    echo "{$cr->crier2()}</br></br>";
}

Arene::lancerCombat($archer1, $mage1);