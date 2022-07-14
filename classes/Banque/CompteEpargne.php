<?php

namespace App\Banque;
use App\Client\Compte as CompteClient;

/**
 * Compte Epargne avec taux d'interet
 */
class CompteEpargne extends Compte
{

    private $taux_interet;

    /**
     * Constructeur de compte d'epargne
     *
     * @param CompteClient $compte client du titulaire
     * @param float $montant
     * @param integer $taux
     */
    public function __construct(CompteClient $compte, float $montant, int $taux)
    {
        parent::__construct($compte, $montant);

        $this->taux_interet = $taux;
    }

    public function getTauxInteret():int
    {
        return $this->taux_interet;
    }

    public function setTautInteret(int $taux_interet):self
    {
        if($this->tauxInteret >= 0)
        {
            $this->taux_interet = $taux_interet;
        }
        return $this;
    }

    public function verserInteret()
    {
        $this->solde = $this->solde + ($this->solde * $this->taux_interet)/100;
    }
}