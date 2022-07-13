<?php

require_once "classes/Compte.php";

$compte1 = new Compte("ADMIN", 500);

$compte1->setTitutlaire("USER");
// $compte1->setSolde(200);

$compte1->getTitutlaire();
// $compte1->solde = 500;

$compte1->deposer(100);

echo $compte1->getTitutlaire();
// $compte2 = new Compte("USER");

// $compte2->titulaire = "user";
// $compte2->solde = 500.3;
?>

<p><?= $compte1->voirSolde(); ?></p>

<?php


$compte1->retirer(100);
echo "<pre>";
var_dump($compte1);
// var_dump($compte2);
echo "</pre>";
echo $compte1;

// echo "\nLe taux d'interet du compte est de ".Compte::TAUX_INTERET."%\n";
