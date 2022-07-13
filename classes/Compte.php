<?php

/**
 * Objet compte bancaire
 */
class Compte
{
    //Proprietes
    /**
     * titulaire du compte
     *
     * @var string
     */
    public $titulaire;

    /**
     * solde du compte
     *
     * @var float
     */
    public $solde;

    //Methodes
    /**
     * Constructeur du compte bancaire
     *
     * @param string $nom Nom du titulaire du compte
     * @param float $montant pour le montant du compte d l'ouverture
     */
    public function __construct(string $nom, float $montant = 100)
    {
        //on attribut $nom a la propriete titulaire de l'instance cree
        $this->titulaire = $nom;
        $this->solde = $montant;
    }

    /**
     * DEposer de l'argent sur le compte
     *
     * @param float $montant
     * @return void
     */
    public function deposer(float $montant)
    {
        if ($montant > 0) {
            $this->solde += $montant;
        }
    }

    public function voirSolde()
    {
        return "le solde du compte est de $this->solde euros";
    }

    /**
     * Retire un montant sur le compte
     *
     * @param float $montant
     * @return void
     */
    public function retirer(float $montant)
    {
        if ($montant > 0 && $this->solde >= $montant) {
            $this->solde -= $montant;
        }
        else 
        {
            echo "Montant insuffisant ou invalide";
        }
    }
}
