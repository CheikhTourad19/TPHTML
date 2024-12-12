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


use TpPOO\Voiture;
use TpPOO\Vehicule;

require 'Vehicule.php';
require 'Voiture.php';

 $marque =$_POST['marque'];
 $dateAchat =$_POST['dateAchat'];
 $prixAchat =$_POST['prixAchat'];
 $prixCourant =$_POST['prixCourant'];
$cylindre =$_POST['cylindre'];
$nbPortes =$_POST['nbPortes'];
$puissance =$_POST['puissance'];
 $kilometrage =$_POST['kilometrage'];

$voiture=new Voiture($marque,$dateAchat,$prixAchat,$prixCourant,$kilometrage,$puissance,$cylindre,$nbPortes,1);

echo "<div class='alert alert-success' role='alert'>
  Voiture Ajoutée avec succes <a href='index.php'>voir la liste des voiture</a>
  
</div> </body>";
?>
