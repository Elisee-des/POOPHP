<?php

require_once "classes/Compte.php";

$compte1 = new Compte("ADMIN");

// $compte1->titulaire = "admin";
$compte1->solde = 500;

$compte1->deposer(100);


// $compte2 = new Compte("USER");

// $compte2->titulaire = "user";
// $compte2->solde = 500.3;
?>

<p><?= $compte1->voirSolde(); ?></p>

<?php


$compte1->retirer(-100);
echo "<pre>";
var_dump($compte1);
// var_dump($compte2);
echo "</pre>";