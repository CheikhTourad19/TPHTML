<?php
if ($_POST['type'] == 'voiture') {
$id = $_POST['id'];
$marque = $_POST['marque'];
$dateAchat = $_POST['dateAchat'];
$prixAchat = $_POST['prixAchat'];
$prixCourant = $_POST['prixCourant'];
$kilometrage = $_POST['killometrage'];
$puissance = $_POST['puissance'];
$cylindres = $_POST['cylindres'];
$nbPortes = $_POST['nbPortes'];

    $pdo = new PDO('mysql:host=sql7.freemysqlhosting.net;dbname=sql7748478', 'sql7748478', 'vMLJWHRAwF');
    $stmt = $pdo->prepare("UPDATE voiture SET marque = :marque,dateAchat = :dateAchat,prixAchat = :prixAchat , prixCourant = :prixCourant , killometrage = :killometrage, puissance = :puissance , cylindres = :cylindres , nbPortes = :nbPortes where id = :id");
    try{
    $stmt->execute(
        [':id' => $id
        , ':marque' => $marque
        , ':dateAchat' => $dateAchat
        , ':prixAchat' => $prixAchat
        , ':prixCourant' => $prixCourant
        , ':killometrage' => $kilometrage
        , ':puissance' => $puissance
        , ':cylindres' => $cylindres
        , ':nbPortes' => $nbPortes
        ]
    );
    header('location: index.php');
    }catch (Exception $e){
        echo $e->getMessage();
    }

}elseif ($_POST['type'] == 'avion') {
    $id = $_POST['id'];
    $marque = $_POST['marque'];
    $dateAchat = $_POST['dateAchat'];
    $prixAchat = $_POST['prixAchat'];
    $prixCourant = $_POST['prixCourant'];
    $moteur=$_POST['moteur'];
    $heuresdevol=$_POST['heuresdevol'];
    $pdo = new PDO('mysql:host=sql7.freemysqlhosting.net;dbname=sql7748478', 'sql7748478', 'vMLJWHRAwF');
    $stmt = $pdo->prepare("UPDATE avion SET marque = :marque,dateAchat = :dateAchat,prixAchat = :prixAchat , prixCourant = :prixCourant , moteur = :moteur , heuresdevol = :heuresdevol where id = :id");
    try {
        $stmt->execute(
            [':id' => $id
                , ':marque' => $marque
                , ':dateAchat' => $dateAchat
                , ':prixAchat' => $prixAchat
                , ':prixCourant' => $prixCourant
                , ':moteur' => $moteur,
                ':heuresdevol' => $heuresdevol
            ]
        );
        header('location: index.php');
    }catch (Exception $e){
        echo $e->getMessage();

    }
}else{
    echo"erreur";
}
?>
