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
$id=$_GET['id'];
if ($_GET['type']=='voiture'){

$pdo = new PDO('mysql:host=sql7.freemysqlhosting.net;dbname=sql7748478', 'sql7748478', 'vMLJWHRAwF');
$stmt = $pdo->prepare("DELETE FROM voiture WHERE id=:id");
try {
    $stmt->execute([
        ':id' => $id
    ]);
    echo "<div class='alert alert-danger' role='alert'>
  Voiture supprimer avec succes <a href='index.php'>voir la liste des voiture</a>
</div> </body>";
}catch(PDOException $e){
    echo $e->getMessage();
}
}elseif ($_GET['type']=='avion'){
    $pdo = new PDO('mysql:host=sql7.freemysqlhosting.net;dbname=sql7748478', 'sql7748478', 'vMLJWHRAwF');
    $stmt = $pdo->prepare("DELETE FROM avion WHERE id=:id");
    try {
        $stmt->execute([
            ':id' => $id
        ]);
        echo "<div class='alert alert-danger' role='alert'>
  Voiture supprimer avec succes <a href='index.php'>voir la liste des voiture</a>
</div> </body>";
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}else{
    echo 'erreur';
}
?>
