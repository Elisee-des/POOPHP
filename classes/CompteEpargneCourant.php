<?php

/**
 * Compte Epargne avec taux d'interet
 */
class CompteEpargneCourant extends CompteEpargne
{

    private $decouvert;

    /**
     * Constructeur de compte courant
     *
     * @param string $nom
     * @param integer $montant
     * @param integer $decouvert decouvert autoriser
     */
    public function __construct(string $nom, int $montant, int $taux, int $decouvert)
    {
        parent::__construct($nom, $montant, $taux);
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
