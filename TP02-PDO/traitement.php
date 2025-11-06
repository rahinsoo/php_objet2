<?php
$nom = $_POST['nom'];
$email = $_POST['mail'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];

echo "je m'appelle $nom nom email est $email . Ma plainte porte sur $sujet <br> contenu : <br> $message";
