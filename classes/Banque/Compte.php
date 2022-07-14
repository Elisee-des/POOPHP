<?php

namespace App\Banque;

use App\Client\Compte as CompteClient;

/**
 * Objet compte bancaire
 */
abstract class Compte
{
    //Proprietes
    /**
     * titulaire du compte
     *
     * @var string
     */
    private CompteClient $titulaire;

    /**
     * solde du compte
     *
     * @var float
     */
    protected $solde;

    //Methodes
    /**
     * Constructeur du compte bancaire
     *
     * @param CompteClient $nom Nom du titulaire du compte
     * @param float $montant pour le montant du compte d l'ouverture
     */
    public function __construct(CompteClient $compte, float $montant = 100)
    {
        //on attribut $nom a la propriete titulaire de l'instance cree
        $this->titulaire = $compte;
        $this->solde = $montant;
    }

    
    
    //Accesseur
    /**
     * Methode magique pour la convertion en chaine de caractere
     *
     * @return string
     */
    public function __toString()
    {
        return "Vous visualiser le compte de $this->titulaire, le solde est de $this->solde euros";
    }
    /**
     *Return le valeur titulaire du compte
     *
     * @return CompteClient
     */
    public function getTitutlaire()
    {
        return $this->titulaire;
    }

    /**
     * Undocumented function
     *
     * @param CompteClient $compte du client
     * @return Compte compte bancaire
     */
    public function setTitutlaire(CompteClient $compte): self
    {
        if (isset($compte)) {
            $this->titulaire = $compte;
        }
        return $this;
    }

    /**
     * Return la valeur du solde
     *
     * @return float
     */
    public function getSolde(): float
    {
        return $this->solde;
    }

    /**
     * Modifie la valeur du solde
     *
     * @param float $montant montant du solde
     * @return self
     */
    public function setSolde(float $montant): self
    {
        if ($montant > 0) {
            $this->solde = $montant;
        }
        return $this;
    }

    /**
     * Deposer de l'argent sur le compte
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
        } else {
            echo "Montant insuffisant ou invalide";
        }
        // echo $this->decouverte();
    }
}
