<?php

namespace App\Client;

use App\Banque\{CompteEpargne, COmpteCourant};

require_once "classes/Banque/Compte.php";
require_once "classes/Banque/CompteCourant.php";
require_once "classes/Banque/CompteEpargne.php";
require_once "classes/Client/Compte.php";


$compte1 = new CompteCourant("ADMIN", 500, 200);
$compte2 = new CompteEpargne("User", 200, 10);

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

$client = new Compte();