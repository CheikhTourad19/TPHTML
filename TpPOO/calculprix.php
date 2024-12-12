<?php

use TpPOO\Avion;
use TpPOO\Voiture;
use TpPOO\Vehicule;

require 'Vehicule.php';
require 'Voiture.php';
require 'Avion.php';
if ($_POST['type']=='car'){
    $id=$_POST['id'];
    $pdo = new PDO('mysql:host=sql7.freemysqlhosting.net;dbname=sql7748478', 'sql7748478', 'vMLJWHRAwF');
    $stmt = $pdo->prepare("SELECT * FROM voiture WHERE id=:id");
    $stmt->execute(
        [':id' => $id]
    );
    $v = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $voituredb = $v[0];
    $voiture=new Voiture($voituredb['marque'],$voituredb['dateAchat'],$voituredb['prixAchat'],$voituredb['prixCourant'],$voituredb['killometrage'],$voituredb['puissance'],$voituredb['cylindres'],$voituredb['nbPortes'],0);
    echo"<center><h1>Prix en {$_POST['annee']} est : {$voiture->calculerPrix($_POST['annee'])}</h1> </center>";
}elseif ($_POST['type']=='avion'){
    $id=$_POST['id'];
    $pdo = new PDO('mysql:host=sql7.freemysqlhosting.net;dbname=sql7748478', 'sql7748478', 'vMLJWHRAwF');
    $stmt = $pdo->prepare("SELECT * FROM avion WHERE id=:id");
    $stmt->execute(
        [':id' => $id]
    );
    $v = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $aviondb = $v[0];
    $avion=new Avion($aviondb['marque'],$aviondb['dateAchat'],$aviondb['prixAchat'],$aviondb['prixCourant'],$aviondb['moteur'],$aviondb['heuresdevol'],0);
    echo"<center><h1>Prix en {$_POST['annee']} est : {$avion->calculerPrix($_POST['annee'])}</h1> </center>";
}
?>
