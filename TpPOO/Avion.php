<?php

namespace TpPOO;

use PDO;
use PDOException;
use TpPOO\Vehicule;

require_once 'Vehicule.php';

class Avion extends Vehicule
{
    private $moteur;
    private $heuresVol;

    public function __construct($marque, $dateAchat, $prixAchat, $prixCourant, $moteur, $heuresVol,$db)
    {
        parent::__construct($marque, $dateAchat, $prixAchat, $prixCourant);
        $this->moteur = $moteur;
        $this->heuresVol = $heuresVol;
        if ($db==1){
        $pdo = new PDO('mysql:host=sql7.freemysqlhosting.net;dbname=sql7748478', 'sql7748478', 'vMLJWHRAwF');
        $stmt = $pdo->prepare("INSERT INTO avion (marque, dateAchat, prixAchat, prixCourant,moteur,heuresdevol)
                       VALUES (:marque, :dateAchat, :prixAchat, :prixCourant, :moteur, :heuresdevol)");
        try {
            $stmt->execute([
                ':marque' => $marque,
                ':dateAchat' => $dateAchat,
                ':prixAchat' => $prixAchat,
                ':prixCourant' => $prixCourant,
                ':moteur' => $moteur,
                ':heuresdevol' => $heuresVol
            ]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }}
    }

    public function affiche()
    {
        parent::affiche();
        echo"moteur :{$this->moteur} heures de vols : {$this->heuresVol}";
    }
    public function calculerPrix($annee)
    {
        $date=new \DateTime($this->getDateAchat());
        $anneee=$date->format('Y');
        $prixAchat = $this->getPrixAchat(); 
        $depreciationAnnee = ($annee - $anneee) * 0.1;
        $depreciationHeures = 0.02 * ($this->heuresVol / 100);

        $prix = $prixAchat * (1 - ($depreciationAnnee + $depreciationHeures));

        return $prix;
    }

}