<?php

namespace App;

class Autoloader
{
    static function register()
    {
        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
    }

    static function autoload($class)
    {
        //on recupere la totaliter du namespace de la class concerneé(App\Client\Compte)
        //on retire App\ pour avoir (Client\Compte)
        $class = str_replace(__NAMESPACE__ . '\\', '', $class);

        //on remplace les \ par des /
        $class = str_replace('\\', '/', $class);

        $fichier = __DIR__ . '/' . $class . '.php';

        if(file_exists($fichier))
        {
            require_once $fichier;
        }
    }
}