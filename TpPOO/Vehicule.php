<?php

namespace TpPOO;

 Abstract class  Vehicule
{
    private $marque;
    private $dateAchat;
    private $prixAchat;
    private $prixCourant;

    public function __construct($marque, $dateAchat, $prixAchat, $prixCourant)
    {
        $this->marque = $marque;
        $this->dateAchat = $dateAchat;
        $this->prixAchat = $prixAchat;
        $this->prixCourant = $prixCourant;

    }


     public function getDateAchat()
     {
         return $this->dateAchat;
     }


     public function getPrixAchat()
     {
         return $this->prixAchat;
     }
    public function __destruct(){}

    public abstract function calculerPrix($annee);

    public function affiche(){
        echo "Marque : {$this->marque} prix courant : {$this->prixCourant}dt prix achat : {$this->prixAchat}dt date achat : {$this->dateAchat} ";
    }


}