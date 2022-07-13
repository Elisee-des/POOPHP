<?php

require_once "classes/Compte.php";
require_once "classes/CompteCourant.php";
require_once "classes/CompteEpargne.php";
require_once "classes/CompteEpargneCourant.php";

$compte1 = new CompteCourant("ADMIN", 500, 200);
$compte2 = new CompteEpargneCourant("User", 200, 10, 200);

// $compte1->retirer(200);

echo "<pre>";
var_dump($compte1);
var_dump($compte2);
echo "</pre>";
$compte2->verserInteret();
$compte2->retirer(300);

echo "<pre>";
var_dump($compte2);
echo "</pre>";