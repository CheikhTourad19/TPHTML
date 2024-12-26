<?php
$nom=$_POST['nom'];
$pdo = new PDO('mysql:host=localhost:3306;dbname=music', 'root', '');
$sql=$pdo->prepare("DELETE FROM artiste WHERE nom='$nom'");

try {
    $sql->execute();
    echo "<h1>supprimer avec succes </h1><br>";
    echo "<a href='consulter.php'>Consulter les artiste</a>";
}catch (Exception $e){
    echo" Erreur l'artiste n'existe pas ou une erreur s'est passée<br>";
    echo $e->getMessage();
}

?>
