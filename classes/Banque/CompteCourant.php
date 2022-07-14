<?php

namespace App\Banque;
use App\Client\Compte as CompteClient;

/**
 * Compte bancaire (herite de Compte)
 */
class CompteCourant extends Compte
{
    private $decouvert;

    /**
     * Constructeur de compte courant
     *
     * @param CompteClient $compte du client
     * @param integer $montant
     * @param integer $decouvert decouvert autoriser
     */
    public function __construct(CompteClient $compte, int $montant, int $decouvert)
    {
        parent::__construct($compte, $montant);
        $this->decouvert = $decouvert;
    }

    public function getDecouvert():int
    {
        return $this->decouvert;
    }

    public function setDecouvert(float $montant): self
    {
        if ($montant >= 0) {
            $this->decouvert = $montant;
        }
        return $this;
    }

    public function retirer(float $montant)
    {
        {
            if ($montant > 0 && $this->solde - $montant >= -$this->decouvert) {
                $this->solde -= $montant;
            } else {
                echo "Solde Insuffisant";
            }
        }
    }
}