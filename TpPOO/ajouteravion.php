<?php


echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vehiclue Selling</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
HTML;



use TpPOO\Avion;


require 'Avion.php';



$marque = $_POST['marque'];
$dateAchat = $_POST['dateAchat'];
$prixAchat = $_POST['prixAchat'];
$prixCourant = $_POST['prixCourant'];
$moteur = $_POST['moteur'];
$heuresdevol = $_POST['heuresdevol'];
$avion= new Avion($marque,$dateAchat,$prixAchat,$prixCourant,$moteur,$heuresdevol,1);

echo "<div class='alert alert-success' role='alert'>
  Avion Ajoutée avec succes <a href='index.php'>voir la liste des Avions</a>
</div> </body>";


?>
