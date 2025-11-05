<?php
class arene
{
    public static function lancerCombat(Creature $c1, Creature $c2): void
    {
        echo "<h1>## ⚔️ Le combat commence dans l'Arène ! ⚔️</h1>";
        echo "<h2>Participants : </h2>";
        echo "<h4>**{$c1->getNom()}** vs **{$c2->getNom()}**</h4>";

        // Affichage des cris de combat
        echo "<h2 style='color:darkred;'>" . $c1->crier2() . "</h2>";
        echo "<h2 style='color:darkblue;'>" . $c2->crier2() . "</h2></br>";

        $tour = 1;

        // Boucle principale : continue tant que les deux créatures sont en vie
        while ($c1->estEnVie() && $c2->estEnVie()) {
            echo "<h2>--- Tour **{$tour}** ---</h2>";

            // 1. Tour de la Créature c1 (si elle est toujours en vie)
            if ($c1->estEnVie()) {
                echo "<h4> -> Attaque de **{$c1->getNom()}**:</h4>";
                $c1->attaquer($c2);
                echo "<p> pdv " . $c1->getNom() . " : " . $c1->getSante() . "</p>";
                echo "<p> pdv " . $c2->getNom() . " : " . $c2->getSante() . "</p>";
            }

            // Vérifie si la créature c2 a été vaincue par l'attaque de c1
            if (!$c2->estEnVie()) {
                echo "<p style='color:darkblue;'>" . $c2->getNom() . " ne se relève plus </p>";
                break; // Sort de la boucle si le combat est terminé
            }

            // 2. Tour de la Créature c2 (si elle est toujours en vie)
            if ($c2->estEnVie()) {
                echo "<h4>-> Attaque de **{$c2->getNom()}**:</h4>";
                $c2->attaquer($c1);
                echo "<p> pdv " . $c1->getNom() . " : " . $c1->getSante() . "</p>";
                echo "<p> pdv " . $c2->getNom() . " : " . $c2->getSante() . "</p>";
            }

            if (!$c1->estEnVie()) {
                echo "<p style='color:darkred;'>" . $c1->getNom() . " ne se relève plus </p>";
                break; // Sort de la boucle si le combat est terminé
            }

            $tour++;
        }

    }
}
