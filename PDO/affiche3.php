<?php

require_once 'Artiste.php';

try {
    $pdo = new PDO('mysql:host=localhost:3306;dbname=music', 'root', '');
    $sth=$pdo->prepare("SELECT * FROM artiste");
    $sth->execute();
    $result=$sth->fetchAll(PDO::FETCH_CLASS,'Artiste');
    foreach ($result as $row){
        echo"<br>";
        echo "Artiste num ";
        echo $row->id;
        echo"<br>";
        echo "nom :".$row->nom;
        echo"<br>";
        echo "prenom :".$row->prenom;
        echo"<br>";
        echo "pays :".$row->pays;
        echo"<br>";
        echo "style:".$row->style;
        echo"<br>";
        echo"------------------------------";
    }
}catch (PDOException $e){
    echo $e->getMessage();
}
?>
