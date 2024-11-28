<?php

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$numero=$_POST['numero'];

$file='contacts.txt';
$data="Nom : $nom\n Prenom: $prenom\nNumero: $numero\n";

if (file_put_contents($file, $data,FILE_APPEND)){
    echo "<h1>Enregistrer avec succes</h1>";
}else{
    echo "<h1>Erreur</h1>";
}
echo "<a href='contact.php'> Voir Mes contacts </a>"
?>
