
<?php
$nom=$_POST['nom'];
$age=$_POST['age'];
$mail=$_POST['mail'];
$don=$_POST['don'];

$file='resultats.txt';

$data=" $nom | $age | $mail | $don\n";

if (file_put_contents($file,$data,FILE_APPEND)){
    echo"<h1>Enregistrer avec succes </h1>";
    echo "<a href=results.php>Voir resultats </a>";
}

?>
