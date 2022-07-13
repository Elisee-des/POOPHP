<?php

namespace App\Client;

use App\Autoloader as AppAutoloader;
use App\Banque\{CompteEpargne, CompteCourant};
use Autoloader;

require_once "classes/Autoloader.php";

AppAutoloader::register();

$compte1 = new CompteCourant("ADMIN", 500, 200);
$compte2 = new CompteEpargne("User", 200, 10);
// $compte3 = new Compte();

// $compte1->retirer(200);

echo "<pre>";
var_dump($compte1);
var_dump($compte2);
echo "</pre>";
// $compte2->verserInteret();
// $compte2->retirer(300);

// echo "<pre>";
// var_dump($compte2);
// echo "</pre>";

// $client = new Compte();