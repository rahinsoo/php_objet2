<?php
class arene
{
    public static function lancerCombat(Creature $c1, Creature $c2): void
    {
        echo "## ⚔️ Le combat commence dans l'Arène ! ⚔️</br>";
        echo "Participants : **{$c1->getNom()}** vs **{$c2->getNom()}**</br></br>";

        // Affichage des cris de combat
        echo $c1->crier2() . "</br>";
        echo $c2->crier2() . "</br></br>";

        $tour = 1;

        // Boucle principale : continue tant que les deux créatures sont en vie
        while ($c1->estEnVie() && $c2->estEnVie()) {
            echo "</br>--- Tour **{$tour}** ---</br>";

            // 1. Tour de la Créature c1 (si elle est toujours en vie)
            if ($c1->estEnVie()) {
                echo "-> Attaque de **{$c1->getNom()}**:</br>";
                $c1->attaquer($c2);
                echo "pdv " . $c1->getNom() . " : " . $c1->getSante() . "</br>";
                echo "pdv " . $c2->getNom() . " : " . $c2->getSante() . "</br>";
            }

            // Vérifie si la créature c2 a été vaincue par l'attaque de c1
            if (!$c2->estEnVie()) {
                break; // Sort de la boucle si le combat est terminé
            }

            // 2. Tour de la Créature c2 (si elle est toujours en vie)
            if ($c2->estEnVie()) {
                echo "-> Attaque de **{$c2->getNom()}**:</br>";
                $c2->attaquer($c1);
                echo "pdv " . $c1->getNom() . " : " . $c1->getSante() . "</br>";
                echo "pdv " . $c2->getNom() . " : " . $c2->getSante() . "</br>";
            }

            $tour++;
        }

    }
}
