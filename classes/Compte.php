<?php

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
    private $titulaire;

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
     * @param string $nom Nom du titulaire du compte
     * @param float $montant pour le montant du compte d l'ouverture
     */
    public function __construct(string $nom, float $montant = 100)
    {
        //on attribut $nom a la propriete titulaire de l'instance cree
        $this->titulaire = $nom;
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
     * @return string
     */
    public function getTitutlaire(): string
    {
        return $this->titulaire;
    }

    /**
     *modifie le valeur titulaire du compte
     *
     * @return string
     */
    public function setTitutlaire(string $nom): self
    {
        // if ($nom != "") {
            $this->titulaire = $nom;
        // }
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
