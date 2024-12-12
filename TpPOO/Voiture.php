<?php

namespace TpPOO;

use TpPOO\Vehicule;
use PDO;



class Voiture extends Vehicule
{
    private $cylindre;
    private $nbPortes;

    private $puissance;
    private $kilometrage;

    public function __construct($marque, $dateAchat, $prixAchat, $prixCourant, $kilometrage,$puissance, $cylindre,$nbPortes,$db)
    {
        parent::__construct($marque, $dateAchat, $prixAchat, $prixCourant);
        $this->cylindre = $cylindre;
        $this->nbPortes = $nbPortes;
        $this->puissance = $puissance;
        $this->kilometrage = $kilometrage;
    if ($db==1) {
    $pdo = new PDO('mysql:host=sql7.freemysqlhosting.net;dbname=sql7748478', 'sql7748478', 'vMLJWHRAwF');
    $stmt = $pdo->prepare("INSERT INTO voiture (marque, dateAchat, prixAchat, prixCourant, cylindres, nbPortes, puissance, killometrage)
                       VALUES (:marque, :dateAchat, :prixAchat, :prixCourant, :cylindre, :nbPortes, :puissance, :kilometrage)");
    try {
        $stmt->execute([
            ':marque' => $marque,
            ':dateAchat' => $dateAchat,
            ':prixAchat' => $prixAchat,
            ':prixCourant' => $prixCourant,
            ':cylindre' => $cylindre,
            ':nbPortes' => $nbPortes,
            ':puissance' => $puissance,
            ':kilometrage' => $kilometrage
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }}
    }

    public function affiche()
    {
        parent::affiche();
        echo "puissance : {$this->puissance}hp kilometrage : {$this->kilometrage} cylindres: {$this->cylindree} nbPortes: {$this->nbPortes}";
    }
    public function calculerPrix($annee)
    {
        $date=new \DateTime($this->getDateAchat());
        $anneee=$date->format('Y');
        $prix=$this->getPrixAchat()-(($this->getPrixAchat()*(($annee-$anneee)*0.2))+($this->getPrixAchat()*(0.05*($this->kilometrage/10000))));
        return $prix;

    }

}