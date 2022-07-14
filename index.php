<?php

namespace App\Client;

use App\Autoloader as AppAutoloader;
use App\Client\Compte as CompteClient;
use App\Banque\{CompteEpargne, CompteCourant};
use Autoloader;

require_once "classes/Autoloader.php";

AppAutoloader::register();

$compteClient1 = new CompteClient("ADMIN", "admin", "londre");
$compteClient2 = new CompteClient("USER", "user", "londre");

$compte1 = new CompteCourant($compteClient1, 500, 200);
$compte2 = new CompteEpargne($compteClient2, 200, 10);
$compte3 = new CompteClient("User1","user", "gantier");
// $compte3 = new Compte();

// $compte1->retirer(200);

echo "<pre>";
var_dump($compte1);
var_dump($compte2);
var_dump($compte3);
echo "</pre>";
// $compte2->verserInteret();
// $compte2->retirer(300);

// echo "<pre>";
// var_dump($compte2);
// echo "</pre>";

// $client = new Compte();